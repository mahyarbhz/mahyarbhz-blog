<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

// Route::get('language/{locale}', function ($locale) {
//     app()->setLocale($locale);
//     session()->put('locale', $locale);
//     return redirect()->back();
// });

// Route::prefix('{locale}')
//     ->middleware(SetLocale::class)
//     ->group(function () {
//         Route::get('/', function () {
//             return view('index');
//         })->name('home');
//     });


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/post-example', function () {
    return view('posts.show');
});
