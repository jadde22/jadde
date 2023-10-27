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
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Raza</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Tamaño</th>
                                    <th scope="col" style="width: 150px;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- FILAS DE LA TABLA -->
                                @foreach ($formulario as $formul)
                                <tr>
                                    <td>{{ $formul->id }}</td>
                                    <td>{{ $formul->nombre }}</td> 
                                    <td>{{ $formul->raza }}</td> 
                                    <td>{{ $formul->color }}</td>
                                    <td>{{ $formul->tamaño }}</td> 
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
