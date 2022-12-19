<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel=stylesheet href="{{asset('css/style.css')}}" type='text/css'>
    <title>{{$title }}</title>
</head>
<body>
<div id="app">
    <div class="header"> Вакансии и резюме
{{--        <div id="logo"> </div>--}}
    </div>

    @yield('content')

    <div class="rightcol">
        <ul class="menu">
            <h3 class="h3-m">Разделы</h3>
            <li><a href="/vacancies">Вакансии</a></li>
            <li><a href="/staff">Профессии</a></li>
            <li><a href="/resume/all">Резюме</a></li>
            <br><br>
            <h3 class="h3-m">Запросы</h3>
            <li><a href="/query/peoplestage/">Фамилии со стажем от 5 до 15 лет</a></li>
            <li><a href="/query/programmers/">Фамилии и стаж с профессией программист</a></li>
            <li><a href="/query/count/">Общее число резюме</a></li>
            <li><a href="/query/resumestaff/">Профессии, представители которых имеются в резюме</a></li>

{{--            <li><a href="/resumes/">Резюме по возрасту</a></li>--}}
{{--            <li><a href="/resumes/">Избранное резюме</a></li>--}}
        </ul>
    </div>


    <div class="footer">&copy; Copyright 2017</div>
</div>
</body>
</html>
