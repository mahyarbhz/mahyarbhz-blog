<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('lang', $post->lang)
@section('title', "Post")
@section('meta_description', $post->excerpt ?? Str::limit($post->content, 160))
@section('meta_keywords', $post->tags ?? 'DevOps, Electrical Engineering, Programming')
@section('meta_author', $post->isEnglish() ? 'Mahyar Behzadi' : 'مهیار بهزادی')
@section('meta_robots', 'index, follow')

@section('og_title', $post->title)
@section('og_description', $post->excerpt ?? Str::limit($post->content, 160))
@section('og_image', $post->cover ?? asset('images/default.png'))
@section('og_url', request()->url())
@section('og_type', 'article')

@section('twitter_title', $post->title)
@section('twitter_description', $post->excerpt ?? Str::limit($post->content, 160))
@section('twitter_image', $post->cover ?? asset('images/default.png'))
@section('twitter_card', 'summary_large_image')

@section('dir', $post->isEnglish() ? 'ltr' : 'rtl')

@section('content')
    <main class="max-w-3xl mx-auto px-6 py-12">
        <article class="text-white space-y-8 {{ $post->isEnglish() ? 'font-roboto' : 'font-yekan' }}">
            <!-- Post Header -->
            <header class="space-y-6">
                @if ($post->isEnglish())
                    <a href="{{ route('home') }}" class="text-emerald-400 hover:text-emerald-300 transition-colors">&larr; Back to Blog</a>
                    <time class="block text-zinc-400 text-sm">{{ $post->getCreatedAtGregorian() }}</time>
                @else
                    <a href="{{ route('home') }}" class="text-emerald-400 hover:text-emerald-300 transition-colors">&rarr; بازگشت</a>
                    <time class="block text-zinc-400 text-sm">{{ $post->getCreatedAtJalali() }}</time>
                @endif
                <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
                {{-- <div class="flex space-x-3">
                    <span class="px-3 py-1 bg-zinc-800 rounded-full text-sm text-emerald-400">Technology</span>
                    <span class="px-3 py-1 bg-zinc-800 rounded-full text-sm text-emerald-400">Programming</span>
                </div> --}}
            </header>

            <!-- Featured Image -->
            <img src="{{ asset($post->cover) }}" alt="Post cover" class="w-full h-96 object-cover rounded-lg">

            <!-- Post Content -->
            <div class="post-content prose prose-invert max-w-none text-white">
                {!! $post->content !!}
            </div>

            <!-- Comments Section -->
            <section class="pt-12 border-t border-zinc-700">
                <h3 class="text-2xl font-bold mb-6">{{ $post->isEnglish() ? 'Comments (0)' : 'نظرات (۰)' }}</h3>
                <div class="space-y-6">
                    <!-- Comment -->
                    {{-- <div class="border border-zinc-700 p-4 rounded-lg">
                        <div class="flex items-center justify-between mb-3">
                            <span class="font-medium">John Doe</span>
                            <time class="text-zinc-400 text-sm">2 hours ago</time>
                        </div>
                        <p class="text-zinc-400">Great article! Really helped me understand the fundamentals.</p>
                    </div> --}}

                    <!-- Add Comment Form -->
                    <form class="space-y-4">
                        <textarea class="w-full bg-zinc-800 rounded-lg p-4 focus:ring-2 focus:ring-emerald-400 focus:outline-none"
                            rows="4" placeholder="{{ $post->isEnglish() ? 'Write your comment...' : 'نظر خود را بنویسید' }}" disabled="disabled"></textarea>
                        <button type="submit" disabled="disabled"
                            class="px-6 py-2 bg-gray-400 text-zinc-900 font-medium rounded-lg hover:bg-gray-600 transition-colors">
                            {{ $post->isEnglish() ? 'Currently unavailable' : 'فعلا در دسترس نیست' }}
                        </button>
                    </form>
                </div>
            </section>
        </article>
    </main>
@endsection
