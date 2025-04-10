<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function(){
    return view('web.hompage');
});
Route::get('products', function(){
    return view('web.products');
});
Route::get('product/{slug}', function($slug){
    return 'Halaman single product - '.$slug;
});
Route::get('categories', function(){
    return view('web.categories');
});
<<<<<<< HEAD
Route::get('categories/{slug}', function(){
    return 'Halaman single category - '.$slug;
});
Route::get('cart', function(){
    return 'Halaman cart';
});
Route::get('checkout', function(){
    return 'Halaman checkout';
=======
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
>>>>>>> f3539cd8512693c452655f915e43734841dc0da3
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

// require _DIR_.'/auth.php';