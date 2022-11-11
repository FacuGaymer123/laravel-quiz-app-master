@include('partials.menu_head')
@include('partials.navbar')


<div class="container">
    <div>
        <div>
            <div class="mt-5" style="background-color: #024d5e; " class="card">

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
                            <img src="{{ $question-> img }}" alt="">
                            <div style="background-color: #707070; color: white; ">
                                <input type="hidden" name="questions[{{ $question->id }}]" value="">
                                @foreach ($question->questionOptions as $option)
                                <div class="content-input">
                                    <label for="myRadioID">
                                        <input type="radio" name="questions[{{ $question->id}}]"
                                            id="option-{{ $option->id }}" class="radio__input" value="{{ $option->id }}"
                                            @if (old("questions.$question->id") == $option->id) checked @endif>{{
                                        $option->option_text }}

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
                        <input type="submit">
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>