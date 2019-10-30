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
    <title>Inicio</title>
</head>
<body>
    <!-- NAVBAR -->
    @include('layouts/navbar')
    <!-- FIN NAVBAR -->

    <!-- VENTANA MODAL PARA LOGIN -->

    <div id="id01" class="modal">
  
    <form class="modal-content animate" action="{{ action('UsuarioController@logear')}}" method="POST">
        {{ csrf_field() }}
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/Conejo4.png" alt="Avatar" class="avatar" heigth="50px" width="200px">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

    <!-- FIN VENTANA MODAL PARA LOGIN -->
<div class="separador_b"></div>

    <!-- CONTENIDO -->
<div class="row mr-auto">
    <div class="col-7">
        <div class="imagen_izq">
            <img class="" src="images/index/Conejos_bebes.jpg" alt="Imagen logo conejo"height="550px" width="800px">
        </div>
    </div>
    <div class="col-5 div_h1">
    <h1><i>Orejones</i><h1>
        <div class="separador_b"></div>
    <h4>Hola y bienvenido a ¡Orejones!</h4>
    <br>
    <h5>La página donde encontraras toda la información mas importante para tus conejo mascota.</h5>
    <br>
    <h5>Aqui podras informarte desde la <strong>alimentación</strong> que debe tener tu pequeño orejon hasta su <strong>historia</strong>
    de como evoluciono este animal hasta ser uno doméstico.</h5>
    <br>
    <h5>Diviertete explorando las distintas secciones de la página que tenemos para ti.</h5>
    <br>
    <h5>
        Asombrate con las curiosidades que tienen estos pequeños animales e informate de los cuidados necesarios que debes seguir
        en caso de que quieras tener uno como mascota.
    </h5>
    </div>
</div>

<div class="separador_largo_v"></div>

<div class="row mr-auto ">
    <div class="col-5 abajo">
        <h1><i>Orejones</i><h1>
        <div class="separador_b"></div>
        <h5>Y no solo encontraras muchisima información sobre conejos si no que tambien tenemos un foro para todos los amantes
            de estas pequeñas mascotas.
        </h5>
        <br>
        <h5>
            En el foro podras ver los posts de los demas usuarios que han hecho, ademas de que si te registras, tu tambien podras postear
            y hacer mas grande la comunidad de esta página.
        </h5>
        <br>
        <h5>
            El foro cuenta con muchas secciones tanto para dudas sobre algun cuidado, alimento, enfermedad que podria tenero necesitar tu conejo
            , asi como posts divertidos y graciosos donde veras a los usuarios subir imágenes o videos de sus conejitos haciendo algo gracioso o simplemente
            para mostrar su belleza.
        </h5>
        <br>
        <h5>Asi que vamos, da clic para ir al foro o si lo prefieres puedes registrarte.</h5>
        <button onclick ="location.href='foro'">Ir al foro</button>
        <button  onclick ="location.href='registro'">Ir a registrarme</button>

    </div>

    <div class="col-7">
        <div class="imagen_der">
            <img class="" style="" src="images/index/Conejos_bebes.jpg" alt="Imagen logo conejo"height="550px" width="800px">
        </div>
    </div>
</div>


    <!-- FIN CONTENIDO -->

<div class="separador_b"></div>

<!-- FOOTER -->
@include('layouts/footer')
<span class="ir-arriba icon-arrow-up2">↑</span>
<!-- FIN FOOTER -->
<!-- BOOTSTRAP JS -->
<script src="js/jquery-3.4.1.min.js"></script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(document).ready(function(){
 
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 200 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
 
});
</script>
</body>
</html>