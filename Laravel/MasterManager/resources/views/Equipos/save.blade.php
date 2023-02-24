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
    <nav class="navbar  navbar-expand* navbar-dark d-flex">

        <img  src="{{asset('../resources/img/logoHeader.png')}}" alt="Logo de futbol" class="pl-2 float-right">
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





    <section class="mx-auto" id="sectionCrear">
        <div id="formularioCrear"><!--Div obligatorio-->
            <h4>Crear Equipo:</h4>
            <form action='{{url("equipos/$equipo->id")}}' method="POST" enctype="multipart/form-data">
                @csrf
                @if($equipo->id)
                <input type="hidden" name="_method" value="PUT">
                @endif
                <label for="club">Cod_Partido: </label><br>
                <input type="text" id="club" class="form-control" name="cod_equipo" value="{{$equipo->cod_equipo}}"><br>
                @error('cod_equipo')
                <p class="error-message">{{ $message }}</p>
                @enderror

                <label for="club">Club: </label><br>
                <input type="text" id="club" class="form-control" name="club" value="{{$equipo->club}}"><br>
                @error('club')
                <p class="error-message">{{ $message }}</p>
                @enderror

                <label for="deporte">Deporte: </label><br>
                <input type="text" id="deporte" class="form-control" name="deporte" value="{{$equipo->deporte}}"><br>
                @error('deporte')
                <p class="error-message">{{ $message }}</p>
                @enderror

                <label for="name3">Temporada: </label><br>
                <input type="text" id="tempo" class="form-control" name="temporada" value="{{$equipo->temporada}}"><br>
                @error('temporada')
                <p class="error-message">{{ $message }}</p>
            @enderror

                <label for="name3">Categoria: </label><br>
                <input type="text" id="tempo" class="form-control"  name="categoria" value="{{$equipo->categoria}}"><br>
                @error('categoria')
                <p class="error-message">{{ $message }}</p>
                 @enderror

                <label for="formFile" class="form-label">Logo:</label>
                <input class="form-control pb-1" id="formFile" type="file" name="archivo" required><br>
                <input class="btn btn-sucess"  type="submit" value="Enviar"><br>
                <button type="submit" class="btn btn-success mb-2" value="Guardar">Crear nuevo equipo</button>
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

</html>