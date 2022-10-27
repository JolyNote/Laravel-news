@extends('welcome')
@section('title', 'Личный кабинет')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col-12">
                <h2>Личный кабинет</h2>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Временная метка</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Категории</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Фото новое</th>
                        <th scope="col">Удаление</th>
                        <th scope="col">Изменение</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <th scope="row">{{$order->id}}</th>
                            <td>{{$order -> created_at}}</td>
                            <td>{{$order -> news}}</td>
                            <td>{{$order -> description}}</td>
                            <td>{{$order -> category()}}</td>
                            <td>{{$order -> status()}}</td>
                            <td>
                                <img style="width: 70%; height: 65%" src="{{asset('storage/app/public/'.$order->photo)}}" alt="Картинка">
                            </td>
                            <td>
                                <img style="width: 70%; height: 65%" src="{{asset('storage/app/public/'.$order->photo_new)}}" alt="Картинка">
                            </td>
                            <td><a href="{{route('delete', $order->id)}}">Удалить</a></td>
                            <td><a href="{{route('update', $order->id)}}">Изменить</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
