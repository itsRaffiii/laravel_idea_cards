<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
'greetings' => 'Hello',
'person' => request('person'),
 ]); 

Route::view('/about', 'about');

Route::view('/contact', 'contact');