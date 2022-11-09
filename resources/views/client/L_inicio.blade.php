<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorias</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/card.css') }}" rel="stylesheet" />
</head>
<body background="{{asset('img/fondo11.jpg')}}">
    @include("partials.menu_head")
    @include('partials.navbar')
    <img class="w-100" src="{{ asset('img/categorias.png') }}" alt="Image">

@if(session('status'))
    <div >
        <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
            <div class="input-group">
                {{ session('status') }}
            </div>
        </div>
    </div>
@endif


<form class="pt-5" method="POST" action="{{ route('client.test.store') }}">
@csrf
<section class="pt-4">
    <div class="container px-lg-5">
        <div class="row gx-lg-5">
@foreach($categories as $category)
<div class="col-lg-6 col-xxl-4 mb-5">
    <div class="card bg-light border-0 h-100">
        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
            <h2 class="fs-4 fw-bold"><a href="{{route('client.test',$category->id)}}">{{$category->name}}</a></h2>
            <p class="mb-0">The heroic part of this template is the jumbotron hero header!</p>
        </div>
    </div>
</div>
@endforeach

</form>


        <!-- Page Features-->



            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                        <h2 class="fs-4 fw-bold">Jumbotron hero header</h2>
                        <p class="mb-0">The heroic part of this template is the jumbotron hero header!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                        <h2 class="fs-4 fw-bold">Feature boxes</h2>
                        <p class="mb-0">We've created some custom feature boxes using Bootstrap icons!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                        <h2 class="fs-4 fw-bold">Simple clean code</h2>
                        <p class="mb-0">We keep our dependencies up to date and squash bugs as they come!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                        <h2 class="fs-4 fw-bold">A name you trust</h2>
                        <p class="mb-0">Start Bootstrap has been the leader in free Bootstrap templates since 2013!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->


@include('partials.lib_js')

</body>
</html>
