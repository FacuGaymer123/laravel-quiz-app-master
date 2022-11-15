
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    </head>
    @include('partials.menu_head')
<body id="nose">
<div class="navbar-asq">
@include('partials.navbar')
</div>


@if (session('status'))
<div>
    <div>
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    </div>
</div>
@endif


<div class="container-test">
    <div>
        <div>
            <div class="sub-container_test">
                <div>
                    
                    <form method="POST" action="{{ route('client.test.store') }}">
                        @csrf
                        @foreach ($categories as $category)
                        @foreach ($category->categoryQuestions as $question)
                        <div class="questions">

                            <div>{{ $question->question_text }}</div>
                            <img class="question-img" src="{{ $question-> img }}" alt="">
                            <div style="background-color: #707070; color: white; ">
                                <input type="hidden" name="questions[{{ $question->id }}]" value="">
                                @foreach ($question->questionOptions as $option)
                                <div class="conteiner-input">
                                    <label class="inputxd">
                                        <input type="radio" name="questions[{{ $question->id}}]"
                                            id="option-{{ $option->id }}"  value="{{ $option->id }}"
                                            @if (old("questions.$question->id") == $option->id) checked @endif>{{
                                        $option->option_text }}
                                        <img class="option-img pt-4" src="{{ $option-> img2 }}" alt="">
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            @if ($errors->has("questions.$question->id"))
                            <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                <strong>{{ $errors->first("questions.$question->id") }}</strong>
                            </span>
                            @endif

                        </div>
                        @endforeach
                    @endforeach
                        <input class="enviar" type="submit">
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

@include('partials.lib_js')
</body>
</html>

