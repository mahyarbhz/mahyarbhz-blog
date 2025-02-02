<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\SitemapController;

// Route::get('language/{locale}', function ($locale) {
//     app()->setLocale($locale);
//     session()->put('locale', $locale);
//     return redirect()->back();
// });

Route::prefix('{locale}')
    ->middleware(SetLocale::class)
    ->group(function () {
        Route::get('/{slug}', function ($locale, $slug) {
            $supportedLocales = ['en', 'fa'];
            if (!in_array($locale, $supportedLocales)) {
                abort(404);
            }

            $post = Post::where('lang', $locale)
                ->where('slug', $slug)
                ->firstOrFail();

            return view('posts.show', ['post' => $post]);
        })->name('posts.show');
    });


Route::get('/', function () {
    $enPosts = Post::select(['slug', 'title', 'excerpt', 'cover', 'lang', 'created_at'])->where('lang', 'en')
    ->get();
    $faPosts = Post::select(['slug', 'title', 'excerpt', 'cover', 'lang', 'created_at'])->where('lang', 'fa')
    ->get();

    $latestPost = Post::select(['slug', 'title', 'excerpt', 'cover', 'lang', 'created_at'])->latest('created_at')->first();

    return view('index', ['latestPost' => $latestPost, 'enPosts' => $enPosts, 'faPosts' => $faPosts]);
})->name('home');

Route::get('/sitemap.xml', [SitemapController::class, 'index']);


// Route::get('/post-example', function () {
//     return view('posts.show');
// });

Route::get('/posts', function () {
    return Post::all();
});