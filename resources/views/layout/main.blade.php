<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <title>title</title>
</head>
<style>
    body{
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    .content{
        flex-grow: 1;
    }
    .footer{
        flex-grow: 0;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Web archive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
{{--        <div class="collapse navbar-collapse" id="navbarColor01">--}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('armoire.create')}}">Создать шкаф</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Создать ячейку</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Создать папку</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Создать файл</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
    </div>
</nav>
<div class="content">
    @yield('content')
</div>
<footer class="navbar footer bg-dark">
    <div class="container">
        <span class="text-muted">Арслан Муразиков &copy;<?= date('Y'); ?></span>
    </div>
</footer>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>
