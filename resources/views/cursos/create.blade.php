@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')

    <h1>En esta página podrás crear un curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Description:
            <br>
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>

@endsection