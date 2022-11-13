@extends('layouts.app')
@section('content')
    <div class="leftcol"><!--**************Основное содержание страницы************-->
        <h1>Программист</h1>
        <p class="pinline second">
            Иванов Иван<br>
            Телефон: 111111
        </p>
        <p class="pinline third">
            Стаж:
            10 лет
        </p>
        <p class="pinline second">
            Петров Петр
            <br>
            Телефон: 2222222
        </p>
        <p class="pinline third">
            Стаж:
            7 лет
        </p>
        <p class="pinline second">
            Калугин Алексей
            <br>
            Телефон: 333333
        </p>
        <p class="pinline third">
            Стаж:
            9 лет
        </p>
    </div>
    <div class="rightcol"><!--*******************Навигационное меню*******************-->
        <ul class="menu">
            <li><a href="/resumeL">Вакансии</a></li>
            <li><a href="/resumeL/show">Резюме по профессиям</a></li>
            <li><a href="/resumeL/show">Резюме по возрасту</a></li>
            <li><a href="/resumeL/show">Избранное резюме</a></li>
        </ul>
    </div>
@endsection
