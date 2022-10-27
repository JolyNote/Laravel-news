@extends('welcome')
@section('title', 'Авторизация')
@section('content')
    <style>
        .form-signin {
            max-width: 330px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <main class="form-signin w-100 m-auto shadow-lg p-3 mb-5 bg-white rounded">
                    @error('success')<p class="alert alert-danger">{{$message}}</p>@enderror
                    <form method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal">Please log in</h1>
                        <div class="form-floating">
                            <input name="login" type="text" class="form-control" id="floatingInput" placeholder="Login">
                            <label for="floatingInput">Login</label>
                            @error('login')<p class="text text-danger">{{$message}}</p>@enderror
                        </div>
                        <div class="form-floating">
                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @error('password')<p class="text text-danger">{{$message}}</p>@enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                    </form>
                </main>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
