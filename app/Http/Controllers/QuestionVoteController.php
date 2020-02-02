<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionVoteController extends Controller
{

    public function upvote(Request $request, Question $question)
    {
        $user = auth()->user();

        $user->upVote($question);
    }

    public function downvote(Request $request, Question $question)
    {
        $user = auth()->user();

        $user->downVote($question);
    }

}
