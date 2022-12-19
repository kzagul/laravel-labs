@extends('layouts.app')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="leftcol">
        <h1> {{$title}}</h1>
        <button class="btn btn-add" >
            <a href="/res/add"> Добавить резюме </a>
        </button>
        <div class="card-resume-grid">
            @foreach ($data as $item)
                <div class="card-resume">
                    <div>
                        <div class="pinline second card-resume-list">
                            <div>{{ $item['FIO'] }}</div>
                            <div>Телефон: {{ $item['phone'] }}</div>
                            <div> Стаж: {{$item['stage']}}</div>
                        </div>
                    </div>
                    <p class="pinline third">
                        <button class="btn btn-add">
                            <a href="/resume/{{$item['id']}}">Посмотреть</a>
                        </button>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
