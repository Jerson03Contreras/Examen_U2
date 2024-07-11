@extends('layout')

@section('title', 'Detalles del Alumno | ' . $alumno->nombre)

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Detalles del Alumno</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Nombre:</strong> {{ $alumno->nombre }}
                    </div>
                    <div class="mb-3">
                        <strong>Curso:</strong> {{ $alumno->curso }}
                    </div>
                    <div class="mb-3">
                        <strong>Nota 1:</strong> {{ $alumno->nota_1 }}
                    </div>
                    <div class="mb-3">
                        <strong>Nota 2:</strong> {{ $alumno->nota_2 }}
                    </div>
                    <div class="mb-3">
                        <strong>Promedio:</strong> {{ $alumno->promedio }}
                    </div>
                    <div class="mb-3">
                        <strong>Condición:</strong> {{ $alumno->condicion }}
                    </div>
                    <div class="mb-3">
                        <strong>Registrado:</strong> {{ $alumno->created_at->format('d/m/Y H:i:s') }} ({{ $alumno->created_at->diffForHumans() }})
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
