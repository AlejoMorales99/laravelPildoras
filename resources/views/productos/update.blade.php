@extends("layouts.plantilla")

@section("cabezera")


@section("contenido")

    <form method="POST" action="">
        <input type="text" name="nombreArticulo" >
        <input type="submit" name="enviar" value="enviar" >
    </form>
@endsection

@section("pie")
