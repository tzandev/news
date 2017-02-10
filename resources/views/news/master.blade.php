<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #5bc0de">
    {{csrf_field()}}
    <a href="/news" style="text-decoration: none; font-size: 30px">Home</a>
    <div>@yield('header')</div>
    <hr>
    <div>@yield('content')</div>
    <hr>
    <div>@yield('footer')</div>
</body>
</html>