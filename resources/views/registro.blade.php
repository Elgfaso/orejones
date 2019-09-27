<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">  
    
    <title>Registro</title>
</head>
<body class="body_registro">

<div>
<!--<img style="margin-left:auto; margin-right:auto; display:block" src="../images/Conejo4.png" alt="Imagen logo conejo"height="100px" width="115px">-->
</div>
<div class="row registro mr-auto">
    <div class="col-4"></div>

    <div class="col-4 registro_form">
       <a href="/"><img class="image" src="../images/Conejo4.png" alt="Imagen logo conejo"height="100px" width="120px"></a>
       <strong>CREAR CUENTA</strong>
        <form method="post" class="formulario">
            <label class="">Usuario</label>
            <input id="usuario"type="text" placeholder="Juan123" />
            <label class="">Correo electronico</label>
            <input id="correo"type="text" placeholder="juan@example.com" />
            <label class="">Contraseña</label>
            <input id="usuario"type="password" placeholder="juan456" />
            <small>Mínimo 6 caracteres</small><br>
            <label class="password">Confirmar contraseña</label>
            <input id="confirma_password" type="password" placeholder="juan456" />
            <br>
            <br>
            <input id="enviar" name="Crear cuenta" value="Crear cuenta" type="submit" />
            <br>
            <br>
            
            <small>Al crear una cuenta aceptas las <a href="#">Condiciones de Uso</a> y el <a href="#">Aviso de Privacidad</a></small>
            
        </form>
    </div>

    <div class="col-4"></div>
    
</div>

<!-- FOOTER -->
@include('layouts.footer')
<!-- FIN FOOTER -->

<!-- BOOTSTRAP JS -->
<script src="{{ secure_asset('js/jquery-3.4.1.min.js')}}"></script>

</body>
</html>