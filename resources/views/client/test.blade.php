@extends('layouts.client')

@section('content')
<div class="container">
    <div >
        <div>
            <div style="background-color: #17a2b4; " class="card">

                <div>
                    @if(session('status'))
                        <div >
                            <div>
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('client.test.store') }}">
                        @csrf
                        @foreach($categories as $category)
                            
                                    @foreach($category->categoryQuestions as $question)
                                        <div style="background-color: #17a2b4; color: white; " >
                                            <div >{{ $question->question_text}}</div>
                        

                                                <input type="hidden" name="questions[{{ $question->id}}]" value="">
                                                @foreach($question->questionOptions as $option)
                                                    <div >
                                                        <button type="submit" name="questions[{{ $question->id}}]" id="option-{{ $option->id }}" value="{{ $option->id }}"@if(old("questions.$question->id") == $option->id) checked @endif>{{ $option->option_text }}</button>
                                                    </div>
                                                @endforeach

                                                @if($errors->has("questions.$question->id"))
                                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                                        <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    <script>
                                        
                                    </script>
                                    
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection