@extends('welcome')
@section('title', 'Добавление')
@section('content')
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        @error('success')<p class="alert alert-danger">{{$message}}</p>@enderror
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <h3>Добавление поста</h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Название</label>
                <input name="news" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                @error('news')<p class="text text-danger">{{$message}}</p>@enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                <textarea name="description" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('description')<p class="text text-danger">{{$message}}</p>@enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Категории</label>
                <select name="category_id" type="select" class="form-control" id="exampleFormControlInput1">
                    <option selected value="Выберите категорию\"></option>
                    @foreach($categories as $category)
                        <option value="{{$category -> id}}">{{$category -> name}}</option>
                    @endforeach()
                </select>
                @error('category_id')<p class="text text-danger">{{$message}}</p>@enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Фото</label>
                <input name="photo" class="form-control"  type="file" id="formFileMultiple">
                @error('photo')<p class="text text-danger">{{$message}}</p>@enderror
            </div>
            <button class="w-40 btn btn-lg btn-primary">Добавить</button>
        </form>
    </div>
@endsection
