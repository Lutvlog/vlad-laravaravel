<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_block')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><!--подключаем j query-->
    <script src="{{ url('js/script.js') }}"></script>
    <script src="{{ url('js/slick.min.js') }}"></script>

</head>
<body>
@include('inc.header')

@yield('content')

@include('inc.footer')
</body>

</html>
