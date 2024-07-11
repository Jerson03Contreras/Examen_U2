@extends('layout')

@section('title', 'Crear Alumno')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Crear nuevo Alumno</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('alumnos.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}">
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="curso" class="form-label">Curso</label>
                            <input type="text" class="form-control @error('curso') is-invalid @enderror" id="curso" name="curso" value="{{ old('curso') }}">
                            @error('curso')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nota_1" class="form-label">Nota 1</label>
                                <input type="number" step="0.01" class="form-control @error('nota_1') is-invalid @enderror" id="nota_1" name="nota_1" value="{{ old('nota_1') }}">
                                @error('nota_1')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nota_2" class="form-label">Nota 2</label>
                                <input type="number" step="0.01" class="form-control @error('nota_2') is-invalid @enderror" id="nota_2" name="nota_2" value="{{ old('nota_2') }}">
                                @error('nota_2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_reg" class="form-label">Fecha de Registro</label>
                            <input type="date" class="form-control @error('fecha_reg') is-invalid @enderror" id="fecha_reg" name="fecha_reg" value="{{ old('fecha_reg') }}">
                            @error('fecha_reg')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
