@extends('welcome')
@section('title', 'Главная')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col-12">
                <h2>Решенные задачи</h2>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Категории</th>
                        <th scope="col">Фото</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order -> news}}</td>
                            <td>{{$order -> description}}</td>
                            <td>{{$order -> category()}}</td>
                            <td>
                                <img style="width: 30%; height: 30%" src="{{asset('storage/app/public/'.$order->photo)}}" alt="Картинка">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
