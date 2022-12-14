<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
@include('include.header')

{{--прописываем условие - если мы на главной то откроется файл hero --}}
@if(Request::is('/'))
    @include('include.hero')
@endif

<div class="container mt-5">
    @include('include.messages')


    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
            @include('include.aside')
        </div>

        @if(Request::is('/'))
            {{--если мы на главной странице то выйдем меню--}}
            @include('include.menu.menu-list')
        @endif

    </div>
</div>

@include('include.footer')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
