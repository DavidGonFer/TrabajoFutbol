<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('../resources/css/css.css')}}">

    
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('../resources/img//logoHead.ico')}}" />
    <title>MasterManager</title>
</head>

<body class=" bg-transparent ">
    <nav class="navbar bg-success navbar-expand* navbar-light d-flex">

        <img src="../img/logoHeader.png" alt="Logo de futbol" class="pl-2 float-right">
        <a class="nav-item nav-link" type="button" href="../index.html">
            <h1 id="masterM">MasterManager</h1>
        </a>

        <button class="navbar-toggler d-block ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div><div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="btn-group dropright">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown"
                        aria-expanded="false">
                        Equipo
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{'equipos/create'}}">Crear Equipo</a></li>
                        <li><a class="dropdown-item" href="{{'equipos'}}">Visualizar Equipos</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                        aria-expanded="false">
                        Jugadores
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="{{'jugadores/create'}}">Crear Jugador</a></li>
                        <li><a class="dropdown-item" href="{{'jugadores'}}">Visualizar los Jugadores</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown"
                        aria-expanded="false">
                        Entrenamientos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <li><a class="dropdown-item" href="{{'entrenamientos/create'}}">Crear Entrenamiento</a></li>
                        <li><a class="dropdown-item" href="{{'entrenamientos'}}">Visualizar los Entrenamientos</a></li>
                    </ul>
                </div>


                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown"
                        aria-expanded="false">
                        Asistencias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <li><a class="dropdown-item" href="{{'asistencias/create'}}">Crear Asistencias</a></li>
                        <li><a class="dropdown-item" href="{{'asistencias'}}">Visualizar los Entrenamientos</a></li>
                    </ul>
                </div>


                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown"
                        aria-expanded="false">
                        Partido
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                        <li><a class="dropdown-item" href="{{'partidos/create'}}">Crear Partido</a></li>
                        <li><a class="dropdown-item" href="{{'partidos'}}">Visualizar los Partidos</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </nav>

                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown"
                        aria-expanded="false">
                        Convocatorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                        <li><a class="dropdown-item" href="{{'convocatorias/create'}}">Crear Convocatoria</a></li>
                        <li><a class="dropdown-item" href="{{'convocatorias'}}">Visualizar las Convocatorias</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </nav>





    <section class="mx-auto">

            
            <div id="datos">
                <h4>Jugadores/s:</h4>
                <div class="grid-containerjug">
                @foreach($jugadores as $jugador)
                <div class="grid-itemjug">
                    <form action='{{url("jugadores/$jugador->id")}}' method="POST">
                    @csrf
                    <p><strong>Nombre:</strong> {{$jugador['nombre']}} <strong>Apellido:</strong> {{$jugador['apellidos']}}</p>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger float-right" value="Eliminar">
                    <a class="btn btn-warning float-right mx-1" href={{url("jugadores/$jugador->id/edit")}}>Editar</a>
                   
                </form>
                </div>
                @endforeach  
                </div>
                <br>
            </div>
            


    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>