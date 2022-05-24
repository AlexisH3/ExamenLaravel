@extends('layouts.plantilla')

@section('title','Registro')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">   
@endsection
    
@section('content')
<div class="contenedor">
    <h1>Registro</h1>
    <form action="{{route('registro.store')}}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre">
        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>            
        @enderror
        <input type="text" name="usuario" placeholder="Usuario">
        @error('usuario')
        <br>
        <small>*{{$message}}</small>
        <br>            
        @enderror
        <input type="email" name="email" placeholder="Email">
        @error('email')
        <br>
        <small>*{{$message}}</small>
        <br>            
        @enderror
        <input type="password" name="password" placeholder="Contraseña">
        @error('password')
        <br>
        <small>*{{$message}}</small>
        <br>            
        @enderror
        <input type="text" name="tipoUsuario" placeholder="Tipo de Usuario">
        @error('tipoUsuario')
        <br>
        <small>*{{$message}}</small>
        <br>            
        @enderror
        <input type="text" name="sexo" placeholder="Sexo">
        @error('sexo')
        <br>
        <small>*{{$message}}</small>
        <br>            
        @enderror

        <br>
        <a href="{{route('login')}}">Volver a inicio</a>
        <button type="submit">Registrarse</button>
    </form>
</div>
    
@endsection