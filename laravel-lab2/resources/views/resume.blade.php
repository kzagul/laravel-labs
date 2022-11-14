@extends('layouts.app')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="leftcol">
        <h1> {{$title}}</h1>
        <div>
            @foreach ($data as $item)
                <div>
{{--                    <div class="pinline1">--}}
{{--                        <img class="pic" src="{{ asset('images/' . $data['image'])}}">--}}
{{--                    </div>--}}
                    <p class="pinline second">
                        {{ $item['FIO'] }}
                        <br>
                        Телефон: {{ $item['phone'] }}
                    </p>
                    <p class="pinline third">
                        Стаж: {{$item['stage']}}
                        <button>
                            <a href="/resume/{{$item['id']}}">Посмотреть</a>
                        </button>
                    </p>
                </div>
            @endforeach
        </div>
{{--        <p class="pinline second">--}}
{{--            Иванов Иван<br>--}}
{{--            Телефон: 111111--}}
{{--        </p>--}}
{{--        <p class="pinline third">--}}
{{--            Стаж:--}}
{{--            10 лет--}}
{{--        </p>--}}
{{--        <p class="pinline second">--}}
{{--            Петров Петр--}}
{{--            <br>--}}
{{--            Телефон: 2222222--}}
{{--        </p>--}}
{{--        <p class="pinline third">--}}
{{--            Стаж:--}}
{{--            7 лет--}}
{{--        </p>--}}
{{--        <p class="pinline second">--}}
{{--            Калугин Алексей--}}
{{--            <br>--}}
{{--            Телефон: 333333--}}
{{--        </p>--}}
{{--        <p class="pinline third">--}}
{{--            Стаж:--}}
{{--            9 лет--}}
{{--        </p>--}}
    </div>
@endsection
