@extends('app.layout')

@section('content')

<div class="container">
    <h2>Listado de Estudiante</h2>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>CIF</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->cif }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        {{-- <a href="{{ route('students.show', $student->id) }}">Ver</a>
                        <a href="{{ route('students.edit', $student->id) }}">Editar</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection