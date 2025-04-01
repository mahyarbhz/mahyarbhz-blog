<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang=@yield('lang', 'en')>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no, user-scalable=no, viewport-fit=cover">
    <title>@yield('title', 'Mahyar Behzadi’s Tech & Engineering Blog') | Mahyar Behzadi</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('storage/favicon/favicon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('storage/favicon/favicon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('storage/favicon/favicon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/favicon/favicon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('storage/favicon/favicon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('storage/favicon/favicon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('storage/favicon/favicon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('storage/favicon/favicon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/favicon/favicon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('storage/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('storage/favicon/favicon-192x192.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/favicon/favicon.ico') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/favicon/favicon.ico') }}">
    {{-- <meta name="msapplication-TileColor" content="#ffffff"> --}}
    {{-- <meta name="msapplication-TileImage" content="{{ asset('favicon/favicon-144x144.png') }}"> --}}
    {{-- <meta name="msapplication-config" content="{{ asset('favicon/browserconfig.xml') }}"> --}}
    {{-- <link rel="manifest" href="{{ asset('favicon/manifest.json') }}"> --}}
    {{-- <meta name="theme-color" content="#ffffff"> --}}

    <!-- Primary Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Explore insights on electrical engineering, programming, devops, and entrepreneurship by Mahyar Behzadi.')">
    <meta name="keywords" content="@yield('meta_keywords', 'blog, Mahyar Behzadi, electrical engineering, programming, devops, entrepreneurship')">
    <meta name="author" content="@yield('meta_author', 'Mahyar Behzadi')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="@yield('og_title', 'Mahyar Behzadi’s Tech & Engineering Blog')" />
    <meta property="og:description" content="@yield('og_description', 'This is where I\'m sharing what I learn about tech and electrics!')" />
    <meta property="og:image" content="@yield('og_image', asset('images/default.png'))" />
    <meta property="og:url" content="@yield('og_url', url()->current())" />
    <meta property="og:type" content="@yield('og_type', 'website')" />

    <!-- Twitter -->
    <meta name="twitter:title" content="@yield('twitter_title', 'Mahyar Behzadi’s Tech & Engineering Blog')">
    <meta name="twitter:description" content="@yield('twitter_description', 'This is where I\'m sharing what I learn about tech and electrics!')" />
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/default.png'))">
    <meta name="twitter:card" content="@yield('twitter_card', 'summary_large_image')">


    <!-- Additional meta tags ... -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{-- <body class="bg-zinc-900 text-zinc-100 min-h-screen" dir=@yield('dir', 'ltr')> --}}
<body class="bg-background-dark text-text min-h-screen" dir=@yield('dir', 'ltr')>
    <!-- Navigation -->
    <nav class="px-6 py-4 border-b border-zinc-700 sticky top-0 bg-background-dark/80 backdrop-blur dir-ltr">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold hover:text-accent transition-colors">Mahyar's
                Blog</a>
            <div class="hidden sm:flex space-x-6">
                {{-- <a href="#" class="hover:text-emerald-400 transition-colors">About</a> --}}
                <button disabled="disabled" class="hover:text-accent transition-colors">DevOps</button>
                {{-- <a href="{{ url('/language/fa') }}" class="hover:text-emerald-400 transition-colors">فارسی</a> --}}
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="border-t border-zinc-700 mt-16 py-8 dir-ltr">
        <div class="max-w-4xl mx-auto px-6 text-center text-zinc-400">
            <p>© 2025 Mahyar Behzadi. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
