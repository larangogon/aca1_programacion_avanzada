@extends('layout.app')

@section('content')
    <h2 class="my-3 text-center">Numero fibonacci: {{$num}}</h2>
    <div style="width:100%; display:flex; flex-wrap:wrap; justify-content: center ">
        @foreach($fibonacci as $item)
            <div style="width:calc(10% - 30px); margin: 15px; background-color: #f3f3f3; text-align: center">{{$item}}</div>
        @endforeach
    </div>
@endsection
