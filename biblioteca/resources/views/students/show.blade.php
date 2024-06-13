@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header +">
                Estudiante
                <a href="{{route('students.index')}}">Regresar</a>
            </div>
            <div class="card-body">
                <h5 class="card-title text-success">{{ $student->name ." ". $student->last_name }}</h5>
                <p class="card-text">CIF: {{ $student->cif }}</p>
                <p class="card-text">Email: {{ $student->email }}</p>
                <p class="card-text">Phone: {{ $student->phone }}</p>

            </div>
        </div>
    </div>
@endsection
