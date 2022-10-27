
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Главная страница')</title>
    <link rel="stylesheet" href="/resources/css/app.css">
    <link rel="stylesheet" href="/resources/bootstrap/css/bootstrap.css">
    <script src="/resources/bootstrap/js/bootstrap.js"></script>

</head>
<body>
@yield('header')
<div class="container">
    {{--    Navbar   --}}
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="https://www.dota2.com/home" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="/resources/assets/icons8-news-500.svg" width="25%" height="25%" alt="">
        </a>


        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('/')}}" class="nav-link px-2 link-dark">Главная страница</a></li>
            @auth()
                <li><a href="{{route('add')}}" class="nav-link px-2 link-dark">Добавление поста</a></li>
                <li><a href="{{ route('acc') }}" class="nav-link px-2 link-dark">Личный кабинет</a></li>
            @if(\Illuminate\Support\Facades\Auth::user()->isAdmin)
                <li><a href="{{route('admin')}}" class="nav-link px-2 link-dark">Панель администратора</a></li>
                @endif
            @endauth
        </ul>

        <div class="col-md-3 text-end">
            @guest()
                <a type="button" class="btn btn-outline-primary me-2" href="{{ route('auth') }}">Login</a>
                <a type="button" class="btn btn-primary" href="{{route('reg')}}">Sign-up</a>
            @endguest
            @auth()
                <a type="button" class="btn btn-danger" href="{{route('logout')}}">Exit</a>
            @endauth
        </div>
    </header>
</div>
{{--    Navbar   --}}
@yield('content')
@yield('footer')
{{--Footer--}}
<footer class="bg-secondary fixed-bottom d-flex flex-wrap justify-content-between align-items-center py-3  border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="{{route('/')}}" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <span class="mb-3 mb-md-0 text-light">&copy; 2022 Rusanov, Dev </span>
    </div>
</footer>
{{--Footer--}}
</body>
</html>
