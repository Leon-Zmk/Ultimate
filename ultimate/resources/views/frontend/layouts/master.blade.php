<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset("customcss/app.css")}}">
    <title>@yield("title")</title>
    <style>

    </style>

</head>
<body>

    @include('frontend.layouts.header')


    @yield("contents")


    @include('frontend.layouts.footer')


    @stack('js')
    
</body>
</html>