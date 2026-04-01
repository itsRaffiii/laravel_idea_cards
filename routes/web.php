<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
'greetings' => 'Hello',
'person' => request('person'),
 ]); 


Route::view('/about', 'about');

Route::view('/contact', 'contact');  



Route::get('/', function () {
    $ideas = session()->get('idea', []);
    // dump($ideas);

    return view('ideas', [
        'ideas' => $ideas,
    ]);

});



Route::get('/delete-ideas', function () {
    session()->forget('idea');

    return redirect('/');
});

Route::post('/ideas', function () {
    $idea = request('idea');

    session()->push('idea', $idea);
    // dump($idea);

    return redirect('/');

});