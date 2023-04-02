@extends('layouts.app')
@section('contenido')
    <link href="css/login.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        body{
            margin: 0;
            background: url(img/fondo.jpeg);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
    <form class="formulario" action="{{route('login.store')}}" method="POST">
        @csrf
        @method('POST')
        <center><img src="img/login4.png" height="80" width="80"></center>
        <h1>LOGIN</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="email" autocomplete="off" name="email" placeholder="email" required>
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" autocomplete="off" name="password" placeholder="password" required>
            </div>
            @error('message')
            <p class="alert alert-danger">{{$message ?? null}}</p>
            @enderror
            <br>
            <button type="submit" name="accion" id="ingresar" value="Ingresar">INGRESAR</button><br><br>
        </div>
    </form>


@endsection
