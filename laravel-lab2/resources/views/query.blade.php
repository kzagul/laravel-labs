@extends('layouts.app')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="leftcol">
        <h1>{{$header}}</h1>
        <table>
            @foreach($data as $item)
                <tr>
                    @foreach($item as $key => $value)
                        <td><h3>{{$value}}</h3></td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
@endsection
