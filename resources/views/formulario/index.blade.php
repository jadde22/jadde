@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('formulario.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombres:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido">Raza:</label>
            <input type="text" id="raza" name="raza" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="edad">Color:</label>
            <input type="text" id="color" name="color" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="edad">Tamaño por metro:</label>
            <input type="number" id="tamaño" name="tamaño" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-danger">Guardar</button>
    </form>
</div>
@endsection