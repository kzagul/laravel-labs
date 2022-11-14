@extends('layouts.app')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="leftcol">
        <div class="pinline1">
            <img class="pic" src="{{ asset('images/' . $data->image)}}">
        </div>
        <p class="pinline second">
            {{$data->FIO}}
            <br>
            Телефон:
            {{$data->phone}}
        </p>
        <p class="pinline third">
            Должность:
            {{$data->staff_id}}
            <br>
            Стаж:
            {{$data->stage}}
        </p>
    </div>
@endsection
