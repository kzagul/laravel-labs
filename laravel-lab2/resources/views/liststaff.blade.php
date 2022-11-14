@extends('layouts.app')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="leftcol">
        <h1>{{$header}}</h1>
        <div class="staff">
            @foreach($data as $item)
                <div>
                    <a href="/staff/{{$item['staff']}}">
                        {{$item['staff']}}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
