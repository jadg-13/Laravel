@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Estudiante</h2>

        {{-- editar estudiante --}}
        <form action="{{ route('students.update') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="cif">CIF</label>
                <input type="text" name="cif" id="cif" class="form-control" value="{{ $student->cif }}">
            </div>
            <div class="form-group mt-3">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}">
            </div>
            <div class="form-group mt-3">
                <label for="last_name">Apellido</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $student->last_name }}">
            </div>
            <div class="form-group mt-3">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}">
            </div>
            <div class="form-group mt-3">
                <label for="phone">Telefono</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $student->phone }}">
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
        </form>

    </div>
@endsection
