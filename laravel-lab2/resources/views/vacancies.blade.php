@extends('layouts.app')
{{--@section('title')--}}
{{--    {{$title}}--}}
{{--@endsection--}}
@section('content')
    <div class="leftcol">
        <h1>{{$title}}</h1>
        <div>
            @foreach ($data as $item)
                <div>
                    <p class="pinline second">
                        Должность: {{ $item['staff'] }}<br>
                        Название фирмы : {{ $item['name'] }}
                    </p>
                    <p class="pinline third">
                        Адрес: {{ $item['address'] }}
{{--                        <button>--}}
{{--                            <a href="/vacancy/{{$item['id']}}">Посмотреть</a>--}}
{{--                        </button>--}}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
