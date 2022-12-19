@extends('layouts.app')
@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="leftcol">
        <h1>{{$header}}</h1>
        <form class="form-inputs" method="POST" action="{{ route('UpdateResume',['person'=>$resume->id]) }}">
            <input type=hidden name="_method" value="PUT">
            <div>ФИО <input name="FIO" value="{{$resume->FIO}}"></div>
            <div>Телефон <input name="phone" value="{{$resume->phone}}"></div>
            <div>Фото <input name="image" value="{{$resume->image}}"></div>
            <div>Профессия
                <select name="staff_id">
                    @foreach($staff as $elem)
                        @if($resume->staff_id ==$elem['id'])
                            <option value="{{$elem['id']}}" selected>{{$elem['staff']}}</option>
                        @else
                            <option value="{{$elem['id']}}">{{$elem['staff']}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div>Стаж <input name="stage" min="0" type="number" value="{{$resume->stage}}"></div>
            <button class="add_btn" type="submit">Обновить резюме</button>
            {{ csrf_field() }}
        </form>
    </div>
@endsection
