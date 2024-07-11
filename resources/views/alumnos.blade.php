@extends('layout')

@section('title', 'Listado de Alumnos')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Listado de Alumnos</h2>

    @if ($alumnos->count() > 0)
        <div class="row">
            <div class="col-md-8">
                <ul class="list-group">
                    @foreach ($alumnos as $alumno)
                        <li class="list-group-item">
                            <a href="{{ route('alumnos.show', $alumno->id) }}">{{ $alumno->nombre }}</a>
                            <span class="float-end text-muted">{{ $alumno->created_at->format('d/m/Y') }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-4">
            {{ $alumnos->links('pagination::bootstrap-4') }}
        </div>
    @else
        <p>No existe ningún alumno que mostrar.</p>
    @endif
</div>
@endsection
