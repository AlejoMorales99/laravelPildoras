<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}"/>
    <title>Document</title>
</head>

<body>

    <div class="cabezera container-fluid ">

        @yield("cabezera")
        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="collapse navbar-collapse  navbar-nav" id="navbarNavAltMarkup">

                <a class="navbar-brand" href="/">Inicio</a>
                <a class="nav-link active" aria-current="page" href="productos/create">Crear Producto</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                
            </div>

            <div>
                <img class=" w-50 rounded float-end" src="/images/descarga.jpg" alt="">
            </div>

        </nav>

    </div>
    <hr>

    <div class="contenido">
        @yield("contenido")
    </div>


    <div class="pie">
        @yield("pie")


        Pildoras Informaticas. Cursos de informatica. Todos los derechos reservados

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
