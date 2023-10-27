@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('formularioclase.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombres:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido">Edad:</label>
            <input type="number" id="edad" name="edad" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-danger">Guardar</button>
    </form>
</div>
@endsection