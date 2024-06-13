@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Listado de Estudiante</h2>
        <a href="{{route('students.create')}}" class="btn btn-outline-primary">Crear Nuevo Registro</a>
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
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                     
                            
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary">Ver</a>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-secondary">Editar</a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
