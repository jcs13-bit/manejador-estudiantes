@extends('layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresar Datos del Estudiante</div>

                <div class="card-body">
                    <form method="POST" action="{{route('estudiantes.store')}}">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre del Estudiante</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"  value="{{ old('name', $estudiante->nombre) }}" required>
                            @error('nombre')
                                <span class="role-alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nota1">Nota 1</label>
                            <input type="number" class="form-control" id="nota_1" name="nota_1" value="{{ old('name', $estudiante->nota_1) }}"  step="0.01" min="1" max="5" required>
                            @error('nota_1')
                                <span class="role-alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nota2">Nota 2</label>
                            <input type="number" class="form-control" id="nota_2" name="nota_2" value="{{ old('name', $estudiante->nota_2) }}" step="0.01" min="1" max="5" required>
                            @error('nota_2')
                                <span class="role-alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nota3">Nota 3</label>
                            <input type="number" class="form-control" id="nota_3" name="nota_3" value="{{ old('name', $estudiante->nota_3) }}" step="0.01" min="1" max="5" required>
                            @error('nota_3')
                                <span class="role-alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nota3">Promedio</label>
                            <input type="imput" class="form-control" id="promedio" value="{{ old('name', $estudiante->promedio) }}" name="promedio"  readonly required>
                            @error('promedio')
                                <span class="role-alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary mt-3">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/promedio.js') }}"></script>
@endsection