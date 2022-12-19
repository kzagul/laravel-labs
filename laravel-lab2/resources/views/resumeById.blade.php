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
            {{$data->FIO}}<br>
            Телефон:{{$data->phone}}
        </p>
        <p class="pinline third">
            Должность:{{$data->staff_id}}<br>
            Стаж:{{$data->stage}}
        </p>
        <div>
            <a href="{{ route('UpdateResumeForm',['id'=>$data->id]) }}" >
                <button class="btn btn-change" type="submit">Изменить</button>
            </a>
            <form action="{{ route('DeleteResume',['person'=>$data->id]) }}" method="POST">
                <input type=hidden name="_method" value="DELETE">
                <button class="btn btn-delete" type="submit">Удалить</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
