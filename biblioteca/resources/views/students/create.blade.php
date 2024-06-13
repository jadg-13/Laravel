@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Estudiante</h2>
        </div>
        <div class="col-md-8">
            <form action="{{route('students.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="cif">CIF</label>
                    <input type="text" name="cif" id="cif" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="last_name">Apellido</label>
                    <input type="text" name="last_name" id="last_name" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="email">Correo</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="phone">Telefono</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection