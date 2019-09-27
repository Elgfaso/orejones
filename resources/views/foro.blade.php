<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body class="body_foro">
    <!-- NAVBAR -->
@include('layouts/navbar')
    <!-- FIN NAVBAR -->
    
    <!-- CONTENIDO -->
    <br><br>
    <center><h1>Bienvenido al foro de Orejones</h1></center>
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
        <div class="col-8 contenido_der_foro">
           
            <table class="tabla_foro">
                <tr>
                    <th>
                        Tema/Autor
                    </th>
                    <th>
                        Puntuación
                    </th>
                    <th>
                        Fecha
                    </th>
                    
                    <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                            <td>Germany</td>
                          </tr>
                          <tr>
                            <td>Berglunds snabbköp</td>
                            <td>Christina Berglund</td>
                            <td>Sweden</td>
                          </tr>
                          <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                            <td>Mexico</td>
                          </tr>
                          <tr>
                            <td>Ernst Handel</td>
                            <td>Roland Mendel</td>
                            <td>Austria</td>
                          </tr>
                          <tr>
                            <td>Island Trading</td>
                            <td>Helen Bennett</td>
                            <td>UK</td>
                          </tr>
                          <tr>
                            <td>Königlich Essen</td>
                            <td>Philip Cramer</td>
                            <td>Germany</td>
                          </tr>
                          <tr>
                            <td>Laughing Bacchus Winecellars</td>
                            <td>Yoshi Tannamuri</td>
                            <td>Canada</td>
                          </tr>
                          <tr>
                            <td>Magazzini Alimentari Riuniti</td>
                            <td>Giovanni Rovelli</td>
                            <td>Italy</td>
                          </tr>
                          <tr>
                            <td>North/South</td>
                            <td>Simon Crowther</td>
                            <td>UK</td>
                          </tr>
                          <tr>
                            <td>Paris spécialités</td>
                            <td>Marie Bertrand</td>
                            <td>France</td>
                          </tr>
                </tr>
            </table>
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