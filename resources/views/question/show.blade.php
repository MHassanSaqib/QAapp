@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <div id="the-id" class="upvotejs">
                        <a class="upvote upvote-on"></a>
                        <span class="count">0</span>
                        <a class="downvote"></a>
                        <a class="star"></a>
                    </div>

                    <div class="p-4">
                        <h1>
                            {{$question->title}}
                        </h1>
                        <hr>
                        <p>
                            {{$question->description}}
                        </p>


                        <div class="text-right">
                            <span>
                            Posted by: <strong> {{$question->user->name}} </strong> |
                            </span>

                            <span>
                                Posted: <strong>{{$question->created_at}}</strong>
                            </span>
                        </div>

                        <h2> Answers </h2>

                        @foreach($question->answers as $answer)
                            {{$answer->body}}
                            <hr>
                        @endforeach



                        <br><hr>
                        <form method="POST" action="{{ route('answers.store') }}">
                            @include('answer._form', ['buttonName' => 'Submit Answer',
                            'question' => $question])
                        </form>



                    </div>
                </div>

            </div>



        </div>
    </div>
</div>
@endsection

@push('styles')
    <link href="{{ asset('vendor\upvotejs\upvotejs.css') }}" rel="stylesheet">
@endpush
