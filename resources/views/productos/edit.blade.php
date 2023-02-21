@extends("layouts.plantilla")

@section("cabezera")

@endsection


@section("contenido")

<div class="container-fluid ">

    <div class="row">
        <div class="col-md-12 mx-auto bg-light border border-1 w-25 rounded text-center p-3">
            <h5>ACTUALIZAR REGISTROS REGISTROS</h5>
            <!-- <form method="post"  action="/productos/{{$producto->id}}"> -->

            {!! Form::model($producto , ['route' => ['productos.update' , $producto->id] , 'method' => 'PUT' ]) !!}

                <input hidden value="{{$producto->id}}" type="text">

                <label for="">Nombre Articulo</label>
                <input type="text" value="{{$producto->nombreArticulo}}" class="form-control" name="nombreArticulo"> <br>

                <label for="">Seccion</label>
                <input type="text" class="form-control" value="{{$producto->seccion}}" name="seccion"> <br>

                <label for="">precio</label>
                <input type="text" class="form-control" value="{{$producto->precio}}" name="precio"> <br>

                <label for="">fecha</label>
                <input type="date" class="form-control" value="{{$producto->fecha}}" name="fecha"> <br>

                <label for="">paisOrigen</label>
                <input type="text" class="form-control" value="{{$producto->paisOrigen}}" name="paisOrigen"> <br>


                <input class="btn btn-success w-25" type="submit" name="enviar" value="enviar">

            {!! Form::close() !!}
        </div>
    </div>


</div>


@endsection

@section("pie")

@endsection
