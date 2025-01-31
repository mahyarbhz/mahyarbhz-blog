<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Blog') | MahyarBHZ</title>

    <!-- Primary Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'A simple personal blog.')">
    <meta name="keywords" content="@yield('meta_keywords', 'blog, mahyarbhz, weblog, electical engineering, programming, devops')">
    <meta name="author" content="@yield('meta_author', 'Mahyar Behzadi')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="@yield('og_title', 'MahyarBHZ')" />
    <meta property="og:description" content="@yield('og_description', 'A simple personal blog.')" />
    <meta property="og:image" content="@yield('og_image', asset('images/default.png'))" />
    <meta property="og:url" content="@yield('og_url', url()->current())" />
    <meta property="og:type" content="@yield('og_type', 'website')" />

    <!-- Twitter -->
    <meta name="twitter:title" content="@yield('twitter_title', 'MahyarBHZ')">
    <meta name="twitter:description" content="@yield('twitter_description', 'A simple personal blog.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/default.png'))">
    <meta name="twitter:card" content="@yield('twitter_card', 'summary_large_image')">

    <!-- Additional meta tags ... -->

    <!-- Styles, Scripts, etc. -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;500;700&display=swap"
        rel="stylesheet"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- <style>
        body {
            font-family: 'Roboto Mono', monospace;
        }
    </style> --}}
</head>

<body class="bg-zinc-900 text-zinc-100 min-h-screen" dir="{{ app()->getLocale() == 'en' ? 'ltr' : 'ltr' }}">
    <!-- Navigation -->
    <nav class="px-6 py-4 border-b border-zinc-700 sticky top-0 bg-zinc-900/80 backdrop-blur">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold hover:text-emerald-400 transition-colors">Blog</a>
            <div class="hidden sm:flex space-x-6">
                {{-- <a href="#" class="hover:text-emerald-400 transition-colors">Archive</a>
                    <a href="#" class="hover:text-emerald-400 transition-colors">About</a>
                    <a href="#" class="hover:text-emerald-400 transition-colors">Contact</a> --}}
                <a href="#" class="hover:text-emerald-400 transition-colors">English</a>
                {{-- <a href="{{ url('/language/fa') }}" class="hover:text-emerald-400 transition-colors">فارسی</a> --}}
            </div>
        </div>
    </nav>
    
    @yield('content')

    <footer class="border-t border-zinc-700 mt-16 py-8">
        <div class="max-w-4xl mx-auto px-6 text-center text-zinc-400">
            <p>© 2025 Mahyar Behzadi. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
