<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Biblioteca digital</title>
</head>

<body>
    <style>
        body{
            background-color: #1b1a1ef4;
        }
    </style>
    <header>
        <nav class="navbar bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-white fs-2">
                    <img src="{{asset('storage/uploads/libreria.jpg')}}" alt="" width="50px" class="navbar-brand">

                    Sistema de biblioteca.</a>
                <form action="{{route('empleado.index')}}" class="d-flex" role="search" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="texto" value="{{$texto}}">
                    <button class="btn btn-outline-success" type="submit" value="Buscar">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <main class="d-flex flex-nowrap">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 25%;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Elementos:</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        Listar Libros
                    </a>
                </li>
                <li>
                    <a href="{{url('empleado/administrar')}}" class="nav-link text-white">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2" />
                        </svg>
                        Administrar Libro
                    </a>
                </li>
                <li>
                    <a href="{{url('empleado/create')}}" class="btn bg-success mt-4 text-white">Nuevo Libro</a>
                </li>
                
            </ul>
            
            <hr>
            
        </div>
        <div class="b-example-divider b-example-vr"></div>


        @if(Session::has('mensaje'))
            {{Session::get('mensaje')}}
        @endif

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 75%;">
            <table class="table table-dark table-hover mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Fecha de publicación</th>
                        <th scope="col">Editorial</th>
                        <th scope="col">Portada</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                    <tr">
                        <th scope="row" >{{$empleado->id}}</th>
                        <td>{{$empleado->nombre}}</td>
                        <td>{{$empleado->autor}}</td>
                        <td>{{$empleado->fecha}}</td>
                        <td>{{$empleado->editorial}}</td>


                        <td><img src="{{asset('storage').'/'.$empleado->portada}}" alt="" width="30%"></td>
                        <td class="">
                           
                        </td>
                    </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>
            
        </div>
        </div>


        </div>
    </main>
    <div class="b-example-divider"></div>



    <div class="b-example-divider"></div>

    <div class="container bg-dark">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-link px-2 text-white">UPB</li>
                <li class="nav-link px-2 text-white">IS</li>
                <li class="nav-link px-2 text-white">Prog. Cliente-Servidor</li>
                <li class="nav-link px-2 text-white">Gabriel Aparicio</li>
                <li class="nav-link px-2 text-white">
                    
                        <div id="current_date">
                            <script>
                                date = new Date();
                                year = date.getFullYear();
                                month = date.getMonth() + 1;
                                day = date.getDate();
                                document.getElementById("current_date").innerHTML ="Fecha: "+ day + "/" + month + "/" + year;
                            </script>
                        </div>
                    </li>
            </ul>
            <p class="text-center text-white">Ingenieria en Software</p>
        </footer>
    </div>
</body>

</html>