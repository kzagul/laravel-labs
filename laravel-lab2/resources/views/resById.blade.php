@extends('layouts.app')
@section('content')
    <div class="leftcol"><!--**************Основное содержание страницы************-->
        <div class="pinline1">
            <img class="pic" src="{{ asset('images/' . $data->Image)}}">
        </div>
        <p class="pinline second">
            {{$data->FIO}}
            <br>
            Телефон:
            {{$data->Phone}}
        </p>
        <p class="pinline third">
            {{$data->Staff}}
            <br>
            Стаж:
            {{$data->Stage}}
        </p>
    </div>
    <div class="rightcol"><!--*******************Навигационное меню*******************-->
        <ul class="menu">
            <li><a href="/resume/vacancy">Вакансии</a></li>
            <li><a href="/resumeL/show">Резюме по профессиям</a></li>
            <li><a href="/resumeL/show">Избранное резюме</a></li>
        </ul>
    </div>
@endsection
