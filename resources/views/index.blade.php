<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

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

@section('dir', 'ltr')

@section('content')
    <main class="max-w-4xl mx-auto px-6 py-12">
        <div class="mb-16">
            <h1 class="text-2xl font-bold">A warm welcome from Mahyar!</h1>
            <p>While exploring the synergy of code and circuits.</p>
        </div>
        <!-- Featured Post -->
        <article class="mb-16 {{ $latestPost->isEnglish() ? 'dir-ltr font-roboto' : 'dir-rtl font-yekan' }}">
            <img src="{{ asset($latestPost->cover) }}" alt="Featured post" class="w-full h-64 object-cover rounded-lg mb-6">
            <div class="space-y-4">
                <time class="text-zinc-400 text-sm">{{ $latestPost->isEnglish() ? $latestPost->getCreatedAtGregorian() : $latestPost->getCreatedAtJalali() }}</time>
                <h2 class="text-3xl font-bold hover:text-emerald-400 transition-colors">
                    <a href="{{ url()->query($latestPost->getSlug()) }}">{{ $latestPost->title }}</a>
                </h2>
                <p class="text-zinc-400 leading-relaxed">{{ $latestPost->excerpt }}</p>
            </div>
        </article>


        <!-- Posts Grid -->
        <div class="mb-16 dir-rtl font-yekan">
            <h1 class="mb-4 text-2xl font-bold">نوشته‌های فارسی من</h1>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Post Card -->
                @foreach ($faPosts as $post)
                <article class="border border-zinc-700 p-6 rounded-lg hover:border-emerald-400 transition-colors">
                    <img src="{{ asset($post->cover) }}" alt="Post image" class="w-full h-40 object-cover rounded-lg mb-4">
                    <time class="text-zinc-400 text-sm">{{ $post->getCreatedAtJalali() }}</time>
                    <h3 class="text-xl font-bold mt-2 mb-3 hover:text-emerald-400 transition-colors">
                        <a href="{{ url()->query($post->getSlug()) }}">{{ $post->title }}</a>
                    </h3>
                    <p class="text-zinc-400 line-clamp-3">{{ $post->excerpt }}</p>
                </article>
                @endforeach
                @if(count($faPosts) == 0)
                نوشته‌ای پیدا نشد!
                @endif
            </div>
        </div>

        <!-- Posts Grid -->
        <div class="mb-16 dir-ltr font-roboto">
            <h1 class="mb-4 text-2xl font-bold">My english blog posts</h1>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Post Card -->
                @foreach ($enPosts as $post)
                <article class="border border-zinc-700 p-6 rounded-lg hover:border-emerald-400 transition-colors">
                    <img src="{{ asset($post->cover) }}" alt="Post image" class="w-full h-40 object-cover rounded-lg mb-4">
                    <time class="text-zinc-400 text-sm">{{ $post->getCreatedAtGregorian() }}</time>
                    <h3 class="text-xl font-bold mt-2 mb-3 hover:text-emerald-400 transition-colors">
                        <a href="{{ url()->query($post->getSlug()) }}">{{ $post->title }}</a>
                    </h3>
                    <p class="text-zinc-400 line-clamp-3">{{ $post->excerpt }}</p>
                </article>
                @endforeach
                @if(count($enPosts) == 0)
                No posts found!
                @endif
            </div>
        </div>
    </main>
@endsection
