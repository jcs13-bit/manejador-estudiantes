@extends('layout')

@section('content')
<div class="container">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-10 d-flex justify-content-end">
                <a href="{{route('estudiantes.create')}}" class="btn btn-primary btn-block" >Nuevo</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estudiantes</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th>Nota 3</th>
                                <th>Promedio</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estudiantes as $estudiante)
                                <tr>
                                    <td>{{ $estudiante->nombre }}</td>
                                    <td>{{ $estudiante->nota_1 }}</td>
                                    <td>{{ $estudiante->nota_2 }}</td>
                                    <td>{{ $estudiante->nota_3 }}</td>
                                    <td>{{ $estudiante->promedio }}</td>
                                    <td><a href="{{route('estudiantes.delete', $estudiante->id)}}"  class="btn btn-danger btn-sm">Eliminar</a></td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection