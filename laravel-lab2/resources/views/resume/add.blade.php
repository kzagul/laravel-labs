@extends('layouts.app')
@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="leftcol">
        <h1>{{$header}}</h1>
        <form class="form-inputs" method="POST" action="">
            <div class="form-div">ФИО <input name="FIO" required></div>
            <div>Телефон <input name="phone" type="tel" pattern="[0-9]{1}[0-9]{3}[0-9]{3}[0-9]{4}" required></div>
            <div>Фото <input name="image" value="ava1.jpg"></div>
            <div>Профессия
                <select name="staff_id">
                    @foreach($staff as $elem)
                        <option value="{{$elem['id']}}">{{$elem['staff']}}</option>
                    @endforeach
                </select>
            </div>

            <div>Стаж <input name="stage" min="0" type="number" required></div>
            <button class="add_btn" type="submit">Добавить резюме</button>
            {{ csrf_field() }}
        </form>
    </div>
@endsection
