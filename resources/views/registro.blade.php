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
<div class="row mr-auto registro">
    <div class="col-4"></div>

    <div class="col-4 registro_form">
       <a href="/"><img class="image" src="../images/Conejo4.png" alt="Imagen logo conejo"height="100px" width="120px"></a>
       <br>
       <h1>CREAR CUENTA</h1>
    <form action="{{ action('UsuarioController@guardar_usuario') }}" method="POST" class="formulario">

        {{ csrf_field() }}
            <label for="nickname" class="">Usuario</label>
            <input id="nickname" name="nickname" type="text" placeholder="Juan123" autofocus maxlength="16" pattern="[A-Za-z0-9 ]+" />
            @if ($errors->has('nickname'))
            <small class="form-text text-danger">{{ $errors->first('nickname') }}</small>
            @endif
            <small>Máximo 16 caracteres</small><br>
            <label for="correo" class="">Correo electronico</label>
            <input id="correo" name="correo" type="email" placeholder="juan@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
            @if ($errors->has('correo'))
            <small class="form-text text-danger">{{ $errors->first('correo') }}</small>
            @endif
            <label for="password" class="">Contraseña</label>
            <input id="password" name="password" type="password" placeholder="juan456"  maxlength="16"  pattern="[A-Za-z0-9 ]+"/>
            @if ($errors->has('password'))
            <small class="form-text text-danger">{{ $errors->first('password') }}</small>
            @endif
            <small>Máximo 16 caracteres</small><br>
            <label for="password_confirme" class="password">Confirmar contraseña</label>
            <input id="password_confirme" name="password_confirme" type="password" placeholder="juan456" maxlength="16"  pattern="[A-Za-z0-9 ]+"/>
            @if ($errors->has('password_confirme'))
            <small class="form-text text-danger">{{ $errors->first('password_confirme') }}</small>
            @endif
            <br>
            <br>
            <input id="enviar" name="Crear cuenta" value="Crear cuenta" type="submit" />
            <br>
            <br>
            
            <small>Al crear una cuenta aceptas las <a href="ayuda" target="_blank">Condiciones de Uso</a> y el <a href="ayuda" target="_blank">Aviso de Privacidad</a></small>
            
        </form>
    </div>

    <div class="col-4"></div>
    
</div>

<!-- FOOTER -->
@include('layouts.footer')
<!-- FIN FOOTER -->

<!-- BOOTSTRAP JS -->
<script src="js/jquery-3.4.1.min.js"></script>

</body>
</html>