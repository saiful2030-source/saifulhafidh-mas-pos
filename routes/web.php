<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Page\Home;
use App\Livewire\Page\About;
use App\Livewire\Page\Contact;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');