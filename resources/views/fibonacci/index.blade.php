@extends('layout.app')

@section('content')
    <div class="container mt-4 text-center">
        <form action="{{ route('fibonacci.store') }}" method="POST">
            @csrf
            <div>
                <label for="num">Numero de fibonacci</label>
                <input type="test" class="form-control" id="num" name="num" placeholder="ejemplo 50">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Generar serie fibonacci
                </button>
            </div>
        </form>
    </div>
@endsection
