@extends('welcome')
@section('title', 'Измнение')
@section('content')
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        @error('success')<p class="alert alert-danger">{{$message}}</p>@enderror
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <h3>Редактирование поста</h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Название</label>
                <input value="{{$order->news}}" name="news" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                @error('news')<p class="text text-danger">{{$message}}</p>@enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                <textarea value="{{$order->description}}" name="description" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$order->description}}</textarea>
                @error('description')<p class="text text-danger">{{$message}}</p>@enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Категории</label>
                <select value="{{$order->category_id}}" name="category_id" type="select" class="form-control" id="exampleFormControlInput1">
                    @foreach($categories as $category)
                        <option value="{{$category -> id}}">{{$category -> name}}</option>
                    @endforeach()
                </select>
                @error('category_id')<p class="text text-danger">{{$message}}</p>@enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Фото</label>
                <input value="{{$order->photo_new}}" name="photo_new" class="form-control"  type="file" id="formFileMultiple">
                @error('photo_new')<p class="text text-danger">{{$message}}</p>@enderror
            </div>
            <button class="w-40 btn btn-lg btn-success">Изменить</button>
            <a type="" class="w-40 btn btn-lg btn-danger" href="{{route('acc')}}">Отменить</a>
        </form>
    </div>
@endsection
