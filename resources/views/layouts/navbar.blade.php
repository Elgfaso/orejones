 <!-- NAVBAR -->
 <div class="navBar">
    <ul>
    <li><a href="/" class="prueba"><img src="images/Conejo4.png" alt="Imagen logo conejo"height="100px" width="115px"></a></li>
    <li><a href="/"><img  class="logo_nav iconos" src="images/iconos/home.png" alt="Home" height="60px" width="60px">Inicio</a></li>
    <li class="drop_navbar"><a href="/" class="dropbtn_navbar"><img  class="logo_nav iconos" src="images/iconos/conejo.png" alt="Conejo" height="60px" width="60px">Conejos</a>
        <div class="drop_content_navbar">
            <a href="alimentacion">Alimentación</a>
            <a href="cuidados">Cuidados</a>
            <a href="curiosidades">Curiosidades</a>
            <a href="enfermedades">Enfermedades</a>
            <a href="historia">Historia</a>
            <a href="razas">Razas</a>
        </div>
    </li>
    <li class="drop_navbar"><a href="foro" class="dropbtn_navbar"><img  class="logo_nav iconos" src="images/iconos/blog.png" alt="Blog" height="60px" width="60px">Foro</a></li>
    <li class="drop_navbar"><a href="ayuda" class="dropbtn_navbar"><img  class="logo_nav iconos" src="images/iconos/ayuda.png" alt="Ayuda" height="60px" width="60px">Ayuda</a>
        <div class="drop_content_navbar">
            <a href="ayuda">Atención y ayuda</a>
            <a href="ayuda">Explicación de la página</a>
        </div>
    </li>
    @if ($user == null)
         <li class="derecha_nav drop_navbar"><a href="#" class="dropbtn_navbar"><img  class="logo_nav" src="images/iconos/registro.png" alt="Registrarse" height="60px" width="60px">Registro</a>
        <div class="drop_content_navbar">
            <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Iniciar Sesión</a>
            <a href="registro">Registrarse</a>
        </div>
    </li>
    @else
        <li class="derecha_nav drop_navbar"><a href="/" class="dropbtn_navbar"><img  class="logo_nav" src="images/iconos/registro.png" alt="Registrarse" height="60px" width="60px">Cerrar Sesión</a></li>
    @endif
   
    
  
    
    </ul>
    </div>
    <!-- FIN NAVBAR -->