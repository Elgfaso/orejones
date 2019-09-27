<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body class="body_ac">
    <!-- NAVBAR -->
@include('layouts/navbar')
    <!-- FIN NAVBAR -->
    
    <!-- CONTENIDO -->
    <br><br>
    <center><h1><i> Crea una discusión </i></h1></center>
    <div class="row mr-auto">
        
        <div class="col-2 contenido_izq_foro">
        <ul>
            <ul><li><img src="images/foro/bienvenida.png" height="30px" width="30px" alt="Bienvenida"><h5>&nbsp -Bienvenida</h5></li>
                <li class="categorias_foro"><a href="#">-Reglas del foro</a></li>
                <li class="categorias_foro"><a href="#">-Presentaciones</a></li>
                <li class="categorias_foro"><a href="#">-Avisos</a></li>
            </ul>
            <ul> <li><img src="images/foro/general.png" height="30px" width="30px" alt="Bienvenida"><h5>&nbsp -General</h5></li>
                <li class="categorias_foro"><a href="#">-General</a></li>
                <li class="categorias_foro"><a href="#">-Noticias</a></li>
                <li class="categorias_foro"><a href="#">-Dudas</a></li>
            </ul>
            <ul> <li><img src="images/foro/alimentacion.png" height="30px" width="30px" alt="Bienvenida"><h5>&nbsp -Ayuda</h5></li>
                <li class="categorias_foro"><a href="#">-Alimentacion</a></li>
                <li class="categorias_foro"><a href="#">-Salud</a></li>
                <li class="categorias_foro"><a href="#">-Comportamiento</a></li>
                <li class="categorias_foro"><a href="#">-Tips</a></li>
            </ul>
            <ul> <li><img src="images/foro/diversion.png" height="30px" width="30px" alt="Bienvenida"><h5>&nbsp -Diversion</h5></li>
                <li class="categorias_foro"><a href="#">-Anecdotas</a></li>
                <li class="categorias_foro"><a href="#">-Chistes</a></li>
                <li class="categorias_foro"><a href="#">-Arte</a></li>
                <li class="categorias_foro"><a href="#">-Curiosidades</a></li>
            </ul>

        </ul>
        </div>
        <div class="col-8 contenido_der_foro_p">
            <div class="formulario_foro">
                <form action="">
                    <label for="">Titulo</label>
                    <input type="text" name="" id="">
                    <br><br>
                    <label for="">Categoria</label>
                    <br>
                    <!--<select>
                        <option value="volvo">Alimentacion</option>
                        <option value="saab">Diversion</option>
                        <option value="mercedes">Salud</option>
                        <option value="audi">General</option>
                    </select>-->
                    <div class="dropdown">
                        <button class="dropbtn">Categoria ↓</button>
                        <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        </div>
                      </div>
                    <br><br>
                        <label for="">Mensaje</label><br>
                        <textarea rows="4" cols="50">
                            Descripcion
                        </textarea>
                        <label for="">Foto</label>
                        <input type="file">
                        <br><br><br>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Crear Discusión">
                </form>
                
            </div>
        </div>
    </div>
    <!-- FIN CONTENIDO -->
    <!-- FOOTER -->
    @include('layouts/footer')
    <!-- FIN FOOTER -->
    

    <!-- BOOTSTRAP JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
</body>
</html>