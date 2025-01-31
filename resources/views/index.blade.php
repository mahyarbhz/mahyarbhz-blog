<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('title', 'Blog')
{{-- @section('meta_description', $post->excerpt ?? Str::limit($post->content, 160)) --}}
{{-- @section('meta_keywords', $post->tags ?? 'Laravel, Blog') --}}
{{-- @section('meta_author', $post->author->name ?? 'Your Blog Name') --}}
{{-- @section('meta_robots', 'index, follow') --}}

{{-- @section('og_title', $post->title) --}}
{{-- @section('og_description', $post->excerpt ?? Str::limit($post->content, 160)) --}}
{{-- @section('og_image', $post->featured_image_url ?? asset('images/default.png')) --}}
{{-- @section('og_url', request()->url()) --}}
{{-- @section('og_type', 'article') --}}

{{-- @section('twitter_title', $post->title) --}}
{{-- @section('twitter_description', $post->excerpt ?? Str::limit($post->content, 160)) --}}
{{-- @section('twitter_image', $post->featured_image_url ?? asset('images/default.png')) --}}
{{-- @section('twitter_card', 'summary_large_image') --}}

@section('content')
    <main class="max-w-4xl mx-auto px-6 py-12">
        <div class="mb-16">
            {{-- <h1>Hello there, I'm Mahyar Behzadi!</h1>
            <h1>Exploring the synergy of code and circuits.</h1>
            <p>Welcome to my personal blog!</p> --}}
            <h1 class="text-2xl font-bold">A warm welcome from Mahyar!</h1>
            <p>While exploring the synergy of code and circuits.</p>
        </div>
        <!-- Featured Post -->
        <article class="mb-16">
            <img src="your-photo.jpg" alt="Featured post" class="w-full h-64 object-cover rounded-lg mb-6">
            <div class="space-y-4">
                <time class="text-zinc-400 text-sm">2025-01-31</time>
                <h2 class="text-3xl font-bold hover:text-emerald-400 transition-colors">
                    <a href="#">Featured Post Title</a>
                </h2>
                <p class="text-zinc-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                    eiusmod tempor incididunt ut labore...</p>
            </div>
        </article>

        <!-- Posts Grid -->
        <div class="mb-16" style="direction: rtl">
            <h1 class="mb-4 text-2xl font-bold">پست های فارسی من</h1>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Post Card -->
                <article class="border border-zinc-700 p-6 rounded-lg hover:border-emerald-400 transition-colors">
                    <img src="post-image.jpg" alt="Post image" class="w-full h-40 object-cover rounded-lg mb-4">
                    <time class="text-zinc-400 text-sm">2025-01-31</time>
                    <h3 class="text-xl font-bold mt-2 mb-3 hover:text-emerald-400 transition-colors">
                        <a href="{{ url()->query('/post-example')}}">Post Title Here</a>
                    </h3>
                    <p class="text-zinc-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                        eiusmod tempor incididunt ut labore...</p>
                </article>
            </div>
        </div>

        <!-- Posts Grid -->
        <div class="mb-16">
            <h1 class="mb-4 text-2xl font-bold">My english blog posts</h1>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Post Card -->
                <article class="border border-zinc-700 p-6 rounded-lg hover:border-emerald-400 transition-colors">
                    <img src="post-image.jpg" alt="Post image" class="w-full h-40 object-cover rounded-lg mb-4">
                    <time class="text-zinc-400 text-sm">2025-01-31</time>
                    <h3 class="text-xl font-bold mt-2 mb-3 hover:text-emerald-400 transition-colors">
                        <a href="{{ url()->query('/post-example')}}">Post Title Here</a>
                    </h3>
                    <p class="text-zinc-400 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                        eiusmod tempor incididunt ut labore...</p>
                </article>
            </div>
        </div>
    </main>
@endsection
