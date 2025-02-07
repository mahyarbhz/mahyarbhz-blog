<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ImportPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Markdown posts into the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $files = File::allFiles(resource_path('posts'));

        DB::transaction(function () use ($files) {
            foreach ($files as $file) {
                $contents = File::get($file);
                // Parse front matter (for metadata)
                $document = YamlFrontMatter::parse($contents);
                $frontMatter = $document->matter();
                $markdown = $document->body();

                // Convert Markdown to HTML
                $htmlContent = Str::markdown($markdown, [
                    'html_input' => 'allow',
                    'allow_unsafe_links' => true,
                ]);

                // Determine slug (unique identifier)
                $slug = $frontMatter['slug'] ?? Str::slug($document->title ?? $file->getFilename());

                // Update or create post
                $post = Post::updateOrCreate(
                    ['slug' => $slug, 'lang' => $frontMatter['lang'] ?? 'en'],
                    [
                        'title'      => $frontMatter['title'] ?? 'Untitled',
                        'lang'       => $frontMatter['lang'] ?? 'en',
                        'category'   => $frontMatter['category'] ?? 'uncategorized',
                        'excerpt'    => $frontMatter['excerpt'] ?? Str::limit(strip_tags($htmlContent), 150),
                        'tags'       => $frontMatter['tags'] ? implode(',', (array)$frontMatter['tags']) : null,
                        'cover'      => $frontMatter['cover'] ?? null,
                        'content'    => $htmlContent,
                        'published'  => $frontMatter['published'] ?? false,
                        // These values might get overwritten by Eloquent:
                        'created_at' => Carbon::parse($frontMatter['date'], config('app.timezone'))->toDateTimeString(),
                        'updated_at' => now(),
                    ]
                );

                // Override created_at if needed
                $post->created_at = Carbon::parse($frontMatter['date'], config('app.timezone'))->toDateTimeString();
                $post->save();
            }
        });

        $this->info('Posts imported successfully.');
    }
}
