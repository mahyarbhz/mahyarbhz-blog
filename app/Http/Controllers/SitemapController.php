<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Response;
use App\Models\Post;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [];

        // Add static URLs
        $urls[] = [
            'loc' => URL::to('/'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'daily',
            'priority' => '1.0'
        ];

        // Add dynamic URLs from the 'posts' table
        $posts = Post::where(["published" => true])->get();
        foreach ($posts as $post) {
            $urls[] = [
                'loc' => URL::to('/'. $post->getSlug()),
                'lastmod' => $post->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ];
        }

        // Generate XML sitemap
        $xml = $this->generateSitemap($urls);

        return Response::make($xml, 200)->header('Content-Type', 'application/xml');
    }

    private function generateSitemap($urls)
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset/>');
        $xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        foreach ($urls as $url) {
            $urlTag = $xml->addChild('url');
            $urlTag->addChild('loc', $url['loc']);
            $urlTag->addChild('lastmod', $url['lastmod']);
            $urlTag->addChild('changefreq', $url['changefreq']);
            $urlTag->addChild('priority', $url['priority']);
        }

        return $xml->asXML();
    }
}
