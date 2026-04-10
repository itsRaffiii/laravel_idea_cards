<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;

//For Nav Bar
Route::view('/about', 'about');

Route::view('/contact', 'contact'); 

Route::get('/', function () {
    
    $ideas = Idea::query()
    ->when(request('state'), function ($query, $state) {
        $query->where('state', $state);
    })
    ->get();

    return view('ideas', [
        'ideas' => $ideas,
    ]);

});

Route::get('/delete-ideas', function () {
    session()->forget('idea');

    return redirect('/');
});

Route::post('/ideas', function () {
    Idea::create([
        'description' => request('idea'),
        'state' => 'pending',

    ]);

    return redirect('/');

});