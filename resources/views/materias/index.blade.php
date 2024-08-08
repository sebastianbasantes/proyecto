@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Materias</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('materias.create') }}"> Crear Nueva Materia</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Horario</th>
            <th>Semestre</th>
            <th>Profesor</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($materias as $materia)
        <tr>
            <td>{{ $materia->id }}</td>
            <td>{{ $materia->nombre }}</td>
            <td>{{ $materia->horario }}</td>
            <td>{{ $materia->semestre }}</td>
            <td>{{ $materia->profesor }}</td>
            <td>
                <form action="{{ route('materias.destroy', $materia->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('materias.show', $materia->id) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('materias.edit', $materia->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
