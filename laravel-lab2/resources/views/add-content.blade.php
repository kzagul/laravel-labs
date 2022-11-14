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
    </div>
@endsection
