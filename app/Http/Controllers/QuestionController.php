<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {

        $type = request()->get('type');

        $results_per_page = request()->has('results_per_page') ? request()->get('results_per_page') : 10;

        $questions = Question::filterByType($type)->paginate($results_per_page);



        // Homework, write your following if-else part with when() method
        // and make relevant query scopes....



        // $questions = Question::when($type == 'most voted', function ($query, $sortBy) {
        //             return $query->mostVoted();
        //         }, function ($query) {
        //             return $query;
        //         })->paginate(3);





        // if ($type == 'newest')
        //     $questions = Question::latest()->paginate(3);

        // if ($type =='oldest')
        //     $questions = Question::paginate(3);

        // if ($type == 'most voted')
        //     $questions = Question::orderBy('vote_count', 'desc')->paginate(3);

        // if ($type == 'unanswered')
        //     $questions = Question::doesntHave('answers')->paginate(3);

        // if ($type == 'answered')
        //     $questions = Question::has('answers')->paginate(3);

        // else
        //     $questions = Question::paginate(3);

        return view('question.index', [
            'questions' => $questions,
        ]);

    }



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
