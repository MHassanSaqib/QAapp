@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="p-4">
                        <h1>
                            {{$question->title}}
                        </h1>
                        <hr>
                        <p>
                            {{$question->description}}
                        </p>

                        <p>
                           Posted by: <strong> {{$question->user->name}} </strong>
                        </p>

                        <form method="POST" action="{{ route('questions.store') }}">
                            @include('question._form', ['buttonName' => 'Create Question'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
