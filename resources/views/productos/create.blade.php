@extends("layouts.plantilla")

@section("cabezera")

@endsection

@section("contenido")

<div class="container-fluid ">

    <div class="row">
        <div class="col-md-12 mx-auto bg-light border border-1 w-25 rounded text-center p-3">
            <h5>INSERTAR REGISTROS</h5>
            <!-- <form method="POST"  action="/productos"> -->
            {!! Form::open(['url' => '/productos' , 'method' => 'post' , 'files'=>true]) !!}

                {!! Form::label('nombreArticulo', 'nombreArticulo') !!}
                {!! Form::text('nombreArticulo' , '' , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::label('seccion', 'seccion') !!}
                {!! Form::text('seccion' , '' , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::label('precio', 'precio') !!}
                {!! Form::text('precio' , '' , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::label('fecha', 'fecha') !!}
                {!! Form::date('fecha' , \Carbon\Carbon::now() , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::label('paisOrigen', 'paisOrigen') !!}
                {!! Form::text('paisOrigen' , '' , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::file('foto' , ['class' => 'form-control' ] )  !!} <br>


                {!! Form::submit('Insertar Registro' , ['class' => 'btn btn-success' ] )  !!}
                
            {!! Form::close() !!}

            @if(count($errors)>0)

                @foreach($errors->all() as $error)

                    <ul>
                        <li>{{$error}}</li>
                    </ul>


                @endforeach

            @endif


        </div>
    </div>


</div>


@endsection

@section("pie")

@endsection
