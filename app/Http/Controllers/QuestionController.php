<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create');
    }

    public function store(Request $request)
    {
        $question = new Question($request->all());
        auth()->user()->questions()->save($question);

        //The below line will create question but does not add user_id
        //Question::create($request->all());
    }

    public function show(Question $question)
    {
        return view('question.show', compact('question'));
    }

    public function edit(Question $question)
    {
        //
    }

    public function update(Request $request, Question $question)
    {
        //
    }

    public function destroy(Question $question)
    {
        //
    }
}
