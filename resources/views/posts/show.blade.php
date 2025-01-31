<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('title', "Post")
{{-- @section('meta_description', $post->excerpt ?? Str::limit($post->content, 160)) --}}
{{-- @section('meta_keywords', $post->tags ?? 'Laravel, Blog') --}}
{{-- @section('meta_author', $post->author->name ?? 'Your Blog Name') --}}
{{-- @section('meta_robots', 'index, follow') --}}

{{-- @section('og_title', $post->title) --}}
{{-- @section('og_description', $post->excerpt ?? Str::limit($post->content, 160)) --}}
{{-- @section('og_image', $post->featured_image_url ?? asset('images/default.png')) --}}
{{-- @section('og_url', request()->url()) --}}
@section('og_type', 'article')

{{-- @section('twitter_title', $post->title) --}}
{{-- @section('twitter_description', $post->excerpt ?? Str::limit($post->content, 160)) --}}
{{-- @section('twitter_image', $post->featured_image_url ?? asset('images/default.png')) --}}
{{-- @section('twitter_card', 'summary_large_image') --}}

@section('content')
    {{-- <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p> --}}
    <!-- Rest of your post content -->
    <main class="max-w-3xl mx-auto px-6 py-12">
        <article class="space-y-8">
            <!-- Post Header -->
            <header class="space-y-6">
                <a href="{{ route('home') }}" class="text-emerald-400 hover:text-emerald-300 transition-colors">&larr; Back to Blog</a>
                <time class="block text-zinc-400 text-sm">2025-01-31</time>
                <h1 class="text-4xl font-bold">Understanding GPU-Accelerated UI Frameworks</h1>
                <div class="flex space-x-3">
                    <span class="px-3 py-1 bg-zinc-800 rounded-full text-sm text-emerald-400">Technology</span>
                    <span class="px-3 py-1 bg-zinc-800 rounded-full text-sm text-emerald-400">Programming</span>
                </div>
            </header>

            <!-- Featured Image -->
            <img src="post-image.jpg" alt="Post cover" class="w-full h-96 object-cover rounded-lg">

            <!-- Post Content -->
            <div class="prose prose-invert max-w-none text-zinc-300">
                <p class="lead">In recent years, GPU-accelerated UI frameworks have revolutionized the way we build
                    performant applications. Let's dive into the core concepts.</p>

                <h2>Why GPU Acceleration Matters</h2>
                <p>Traditional CPU-based rendering often struggles with complex animations and high-resolution displays. By
                    leveraging the parallel processing power of modern GPUs...</p>

                <pre class="bg-zinc-800 p-4 rounded-lg overflow-x-auto">
                    <code class="text-emerald-400">
                        fn main() {
                            Application::new()
                                .with_window_options(WindowOptions {
                                    size: Size::new(1200, 800),
                                    ..Default::default()
                                })
                                .run();
                        }
                    </code>
                </pre>

                <h2>Implementation Challenges</h2>
                <p>While the benefits are clear, implementing a GPU-accelerated UI framework comes with its own set of
                    challenges...</p>
            </div>

            <!-- Comments Section -->
            <section class="pt-12 border-t border-zinc-700">
                <h3 class="text-2xl font-bold mb-6">Comments (3)</h3>
                <div class="space-y-6">
                    <!-- Comment -->
                    <div class="border border-zinc-700 p-4 rounded-lg">
                        <div class="flex items-center justify-between mb-3">
                            <span class="font-medium">John Doe</span>
                            <time class="text-zinc-400 text-sm">2 hours ago</time>
                        </div>
                        <p class="text-zinc-400">Great article! Really helped me understand the fundamentals.</p>
                    </div>

                    <!-- Add Comment Form -->
                    <form class="space-y-4">
                        <textarea class="w-full bg-zinc-800 rounded-lg p-4 focus:ring-2 focus:ring-emerald-400 focus:outline-none"
                            rows="4" placeholder="Write your comment..."></textarea>
                        <button type="submit"
                            class="px-6 py-2 bg-emerald-400 text-zinc-900 font-medium rounded-lg hover:bg-emerald-300 transition-colors">
                            Post Comment
                        </button>
                    </form>
                </div>
            </section>
        </article>
    </main>
@endsection
