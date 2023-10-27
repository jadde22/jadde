@extends('layouts.app')

@section('content')

<!-- listado -->
        <div class="card">
            <div class="card-body">
                <div class="live-preview">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-nowrap table-striped-columns mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Curso</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Institución</th>
                                    <th scope="col" style="width: 150px;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- FILAS DE LA TABLA -->
                                @foreach ($profesores as $profesor)
                                <tr>
                                    <td>{{ $profesor->id }}</td>
                                    <td>{{ $profesor->nombre }}</td> 
                                    <td>{{ $profesor->apellido }}</td> 
                                    <td>{{ $profesor->curso }}</td> 
                                    <td>{{ $profesor->area }}</td> 
                                    <td>{{ $profesor->institucion }}</td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- listado -->



@endsection
