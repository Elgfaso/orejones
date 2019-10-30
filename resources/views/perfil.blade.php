<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Perfil</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body class="body_perfil">
     <!-- NAVBAR -->
@include('layouts/navbar')
        <!-- FIN NAVBAR -->

        <!-- CONTENIDO -->
        <div class="row mr-auto">
            <div class="col-3 contenido_izq_perfil">
                
                <img src="images/iconos/Conejo.png" alt="foto perfil" height="250px" width="250px">
                
            </div>
            <div class="col-7 contenido_centro_perfil">
                @if ($user != null)
                    <h1> Bienvenido(a) {{$user->nickname_u}}</h1>
                @endif
            
               
                <h2>Mis Datos</h2>
                <hr>
                <div class="row">
                <button class="eliminar">Eliminar perfil <img src="images/iconos/eliminar.png" alt="" height="25px" width="25px"></button>
                <button class="editar">Editar <img src="images/iconos/editar.png" alt="" height="25px" width="25px"></button>
                </div>
                <br>
                <div class="row">
                    <div class="col-3 mis_datos">
                        <label for="">
                            <strong>Nombre</strong>
                        </label>
                    </div>
                    <div class="col-6"><input type="text" ></div>
                </div>
                
                <div class="row">
                    <div class="col-3 mis_datos">
                        <label for="">
                            <strong>Correo</strong>
                        </label>
                    </div>
                    <div class="col-6"><input type="text" ></div>
                </div>

                 <div class="row">
                    <div class="col-3 mis_datos">
                        <label for="">
                            <strong>Telefono</strong>
                        </label>
                    </div>
                    <div class="col-6"><input type="text" ></div>
                </div>

                <div class="row">
                    <div class="col-3 mis_datos">
                        <label for="">
                            <strong>Pais</strong>
                         </label>
                    </div>
                    <div class="col-6">
                        <select name="" id="">
                            <option value="">México</option>
                            <option value="">Estados Unidos</option>
                            <option value="">Canada</option>
                            <option value="">España</option>
                            <option value="">Japon</option>
                        </select>
                    </div>
                </div>
                <hr>
                <h2>Mis posts</h2>
            <br>
            <h4>Vaya! Parece que no tiene ningun post</h4>
            <hr>
            <h2>Enviar un mensaje</h2>
            <form action="">
                <label for="">Nombre usuario (destinatario)</label>
                <input type="text" name="" id="">
                <label for="">Titulo</label>
                <input type="text" name="" id="">
                <label for="">Mensaje</label>
                <textarea name="" id="" cols="100" rows="10"></textarea>
                <br><br>    
                <input type="submit" class="btn btn-success" value="Enviar mensaje">
            </form>
            </div>
            
            
            <div class="col-1"></div>
        </div>
        <!-- FIN CONTENIDO -->
         <!-- FOOTER -->
        @include('layouts/footer')
        <!-- FIN FOOTER -->

        <script src="js/jquery-3.4.1.min.js"></script>
</body>
</html>