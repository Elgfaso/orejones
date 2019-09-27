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
<body class="body_admin">
    <!-- NAVBAR -->
@include('layouts/navbar')
    <!-- FIN NAVBAR -->
    
    <!-- CONTENIDO -->
    <br><br>
    <h1><i> Pagina admin </i></h1>
    <div class="row mr-auto">
        <div class="col-5 parte_izq_admin">
            <form action="">
                <label for="">Busqueda (Usuario o post)</label>
                <input type="text" name="" id="">
                <label for="">Filtrar busqueda</label>
                <div class="">
                        <select name="" id="">
                            <option value="">Categoria</option>
                            <option value="">Fecha</option>
                            <option value="">Likes</option>
                            <option value="">Comentarios</option>
                            
                        </select>
                    </div>
                    <input type="submit" class="btn btn-success" value="Buscar">
            </form>
            <br>
            <h1>No se encontraron resultados!</h1>

        </div>
        <div class="col-5"><br>

            <h3>Ultimos Post Publicados</h3>
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre post</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Fecha</th>
                            
                          </tr>
                        </thead>
                        <tbody class="">
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>sdfsd</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>assdf</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>ajskdj</td>
                            <td>assdf</td>
                          </tr>
                        </tbody>
                      </table>
                    <br>
                      <hr>

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