<?php

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('questions', 'QuestionController');

Route::resource('answers', 'AnswerController')
    ->except([
        'index',
        'show',
        'create',
    ]);

Route::post('questions/{question}/upvote', 'QuestionVoteController@upvote');
Route::post('questions/{question}/downvote', 'QuestionVoteController@downvote');

Route::get('test', function(){



    $user = auth()->user();

    $question = App\Question::find(1);

    dd($user->hasUpVoted($question));

    $user->upVote($question);

});



// Route::post('formSubmit', function(){
//     abort(203, 'some error');
//     return request()->get('name');

// });
