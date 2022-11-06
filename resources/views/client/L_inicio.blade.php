<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorias</title>
</head>
<body background="{{asset('img/fondo11.jpg')}}">
    @include("partials.menu_head")
    @include('partials.navbar')

    @if(session('status'))
    <div >
        <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
            <div class="input-group">
                {{ session('status') }}
            </div>
        </div>
    </div>
@endif
<form method="POST" action="{{ route('client.test.store') }}">
@csrf
@foreach($categories as $category)
<br> 
<br> <br> <br>
@switch($category->id)

    @case(1)
        <a href="{{ route('client.test') }}">{{$category->name}}</a>
    @break
 
    @case(2)
        <a href="{{ url('/b_inicio') }}">{{$category->name}}</a>
    @break
 
        
@endswitch

@endforeach
</form>
@include('partials.lib_js')
</body>
</html>