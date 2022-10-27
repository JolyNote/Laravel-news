@extends('welcome')
@section('title', 'Регистрация')
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
                        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                        <div class="form-floating">
                            <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Name">
                            <label for="floatingInput">Name</label>
                            @error('name')<p class="text text-danger">{{$message}}</p>@enderror
                        </div>
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
                        <div class="form-floating">
                            <input name="password_confirmation" type="password" class="form-control" id="floatingPassword" placeholder="RepeatPassword">
                            <label for="floatingPassword">Repeat Password</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input name="success" type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    </form>
                </main>
            </div>
            <div class="col"></div>
        </div>
    </div>

@endsection
