<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use App\Question;

class AnswerController extends Controller
{

    public function store(Answer $answer, Request $request)
    {

        $answer = new Answer($request->all());
        auth()->user()->answers()->save($answer);
        return redirect()->back();

    }

    public function edit(Answer $answer)
    {
        //
    }


    public function update(Request $request, Answer $answer)
    {
        //
    }

    public function destroy(Answer $answer)
    {
        //
    }
}
