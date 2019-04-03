@extends('layout/plantilla')

@section('titulo','Login')

@section('contenido')
<center>
<h1>University Lab</h1><br><br>
    <form method="POST" action=" {{route('validar')}} ">
        @csrf
            <input type="text" name="user" placeholder="Usuario"><br><br>
            <input type="password" name="pass" placeholder="Contraseña"><br><br>
            <button>Ingresar</button>
    </form>
</center>
@endsection