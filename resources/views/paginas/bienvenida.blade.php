@extends('layouts.app')

@section('content')
<h1>Bienvenida</h1>
<p>
    Hola {{$nombre}} {{$apellido}}
    <br>
    nombre completo: {{$nombre_completo}}
</p>
    @endsection