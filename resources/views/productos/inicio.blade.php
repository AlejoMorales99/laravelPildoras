@extends("layouts.plantilla")

@section("cabezera")

@endsection


@section("contenido")



<div class="container-fluid ">

    <div class="row">
        <div class="text-center" >
            <h5>REGISTROS</h5>
        </div>

        <div class="col-md-12 mx-auto bg-light border border-1 w-75 rounded text-center p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre Articulo</th>
                        <th scope="col">seccion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">paisOrigen</th>
                        <th scope="col">imagen</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($productos as $producto)

                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->nombreArticulo}}</td>
                        <td>{{$producto->seccion}}</td>
                        <td>{{$producto->precio}}</td>
                        <td>{{$producto->fecha}}</td>
                        <td>{{$producto->paisOrigen}}</td>
                        <td> <img width="100"  src="images/{{$producto->ruta}}" alt=""> </td>
                        <td> <a href="{{route('productos.edit' , $producto->id )}}" class="btn btn-primary">Actualizar</a> </td>
                        <td>
                            {!! Form::model($producto , ['route' => ['productos.update' , $producto->id] , 'method' => 'DELETE'])!!}
                                <input class="btn btn-danger" type="submit" value="Eliminar">
                            {!! Form::close() !!}
                        </td>

                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>


</div>


@endsection

@section("pie")

@endsection
