<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <link rel=stylesheet href="{{asset('css/style.css')}}" type='text/css'>
    <title>{{$title }}</title>

    {{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
{{--    <link rel=stylesheet href="{{asset('css/style.css')}}" type='text/css'>--}}


{{--    <style>--}}
{{--        body{--}}
{{--            background-color: #000000;--}}
{{--            color: white;--}}
{{--        }--}}
{{--        header{--}}
{{--            width:100%;--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            align-self: center;--}}
{{--        }--}}
{{--        .lay-row{--}}
{{--            display: flex;--}}
{{--            flex-direction: row;--}}
{{--        }--}}

{{--        .footer{--}}
{{--            width:100%;--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            align-self: center;--}}
{{--        }--}}
{{--        .title{--}}
{{--            display: flex;--}}
{{--            width: 100%;--}}
{{--        }--}}
{{--        .data{--}}
{{--            display:flex;--}}
{{--            flex-direction: row;--}}
{{--            gap: 30px;--}}
{{--            flex-wrap: wrap;--}}
{{--        }--}}
{{--        .data_block{--}}
{{--            display: flex;--}}
{{--            flex-direction: column;--}}
{{--            border: dashed red;--}}
{{--            /*width: max-content;*/--}}
{{--            min-width: 400px;--}}
{{--            padding: 20px;--}}
{{--            gap: 10px--}}
{{--        }--}}
{{--        .data_item{--}}
{{--            display: flex;--}}
{{--        }--}}
{{--        .data_item__bold{--}}
{{--            font-weight: bold;--}}
{{--        }--}}
{{--        .data_item__image{--}}
{{--            width: 150px;--}}
{{--            height: auto;--}}
{{--            padding: 10px;--}}
{{--        }--}}
{{--    </style>--}}
{{--    @vite(['resources/js/app.js'])--}}

</head>
<body>
<div id="app">
    <div class="header">
        {{$title }}
        <div id="logo"></div>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    <div class="footer">&copy; Copyright 2017</div>
</div>
</body>
</html>
