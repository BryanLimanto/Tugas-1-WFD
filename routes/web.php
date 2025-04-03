<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;

Route::resource('promotions', PromotionController::class);

Route::get('/', function () {
    return redirect()->route('promotions.index');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/best-sellers', function () {
    return view('best-sellers');
})->name('best-sellers');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/categories', function () {
    return view('categories');
})->name('categories');


Route::get('/category/{slug}', function ($slug) {
    // Ini contoh sederhana, nantinya bisa dihubungkan dengan database
    $category = [
        'name' => ucwords(str_replace('-', ' ', $slug)),
        'slug' => $slug,
        'description' => 'Description for ' . $slug . ' category'
    ];
    
    return view('category', compact('category'));
})->name('category');

