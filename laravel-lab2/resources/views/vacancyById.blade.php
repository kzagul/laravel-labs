@extends('layouts.app')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="leftcol">
        <h1>Вакансии</h1>
        <div>
            <p class="pinline second">
                Должность: {{ $data->staff}}<br>
                Название фирмы : {{ $data->name }}
            </p>
            <p class="pinline third">
                Адрес: {{ $data->address}}
            </p>
        </div>
    </div>
@endsection
