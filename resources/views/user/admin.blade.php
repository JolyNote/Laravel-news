@extends('welcome')
@section('title', 'Админская панель')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col-12">
                <h2>Админская панель</h2>
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
                            <td>
                                @if(\Illuminate\Support\Facades\Auth::user()->isAdmin)
                                    <form method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$order->id}}" >
                                        <select name="status_id" class="form-select" onchange="this.form.submit()">
                                            @foreach($statuses as $status)
                                                <option value="{{$status->id}}" @if($order->status() == $status->name) selected @endif>{{$status->name}}</option>
                                            @endforeach
                                        </select>
                                    </form>
                                @endif
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
