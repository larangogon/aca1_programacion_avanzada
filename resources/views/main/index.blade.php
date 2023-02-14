@extends('layout.app')

@section('content')
    <div class="container mt-4 text-center">
        <a class="btn btn-primary" href="">Todos los eventos</a>
        <a class="btn btn-danger" href="">Todos los usuarios</a>
    </div>
    <div class="row ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form-component></form-component>
@endsection
