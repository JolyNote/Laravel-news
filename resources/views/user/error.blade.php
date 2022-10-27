@extends('welcome')
@section('title', 'Ошыбка')
@section('content')
    <div class="d-flex align-items-center justify-content-center">
        <div class="text-center">
            <img  src="resources/assets/haram.png" width="300px" height="300px" class="display-1 fw-bold"></img>
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">HARAM!</span>
                <br>Что входит в ХАРАМ:</p>
            <ul class="lead">
                <li>Переходить на эту страницу</li>
            </ul>
            <a href="{{route('/')}}" class="btn btn-success">Вернуться обратно</a>
        </div>
    </div>
@endsection
