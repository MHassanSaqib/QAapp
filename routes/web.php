<?php

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('questions', 'QuestionController');

Route::resource('answers', 'AnswerController')
    ->except([
        'show',
        'index',
        'create',
    ]);

