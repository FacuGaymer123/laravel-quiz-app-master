@extends('layouts.client')

@section('content')
<style>
    .jose{
        margin: 0 auto;
    }
    .radio{
        display: inline-flex;
    }
</style>
    <div class="container">
        <div>
            <div>
                <div style="background-color: #024d5e; " class="card">

                    <div>
                        @if (session('status'))
                            <div>
                                <div>
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('client.test.store') }}">
                            @csrf
                            @foreach ($categories as $category)
                                @foreach ($category->categoryQuestions as $question)
                                    <div style="background-color: #17a2b4; color: white; ">
                                        <div>{{ $question->question_text }}</div>

                                        <div style="background-color: #707070; color: white; ">
                                            <input type="hidden" name="questions[{{ $question->id }}]" value="">
                                            @foreach ($question->questionOptions as $option)
                                                <div class="content-input">
                                                    <label for="myRadioID" class="radio">
                                                    <input type="radio" name="myRadioField" id="myRadioID" class="radio__input" name="questions[{{ $question->id }}]">
                                                        <div>
                                                        id="option-{{ $option->id }}"
                                                        value="{{ $option->id }}"@if (old("questions.$question->id") == $option->id) checked @endif>{{ $option->option_text }}
                                                        </div class="radio__radio">
                                                    </label>

                                                    </div>
                                            @endforeach
                                        </div>
                                        @if ($errors->has("questions.$question->id"))
                                            <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;"
                                                role="alert">
                                                <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                @endforeach
                            @endforeach
                            <input class="jose" type="submit">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
