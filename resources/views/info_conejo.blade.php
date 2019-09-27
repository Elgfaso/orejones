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
    <title>Conejo</title>
</head>
<body>
    <!-- NAVBAR -->
    @include('layouts/navbar')
    <!-- FIN NAVBAR -->

    <!-- VENTANA MODAL PARA LOGIN -->

    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
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
    <div class="row info_contenido">
        <div class="col-7 info_izq">
            <h1>Titulo Categoria</h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur eaque porro rem provident placeat dolorem atque 
                impedit? Porro ad fugiat quas qui id cupiditate incidunt debitis dolor ipsa placeat.</h4><br><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea in tempore non aut porro ullam iure, libero numquam delectus 
                distinctio nobis repudiandae earum natus laborum placeat! Sunt quo obcaecati doloremque.</p><br><br>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur eaque porro rem provident placeat dolorem atque 
                        impedit? Porro ad fugiat quas qui id cupiditate incidunt debitis dolor ipsa placeat.</h4>
        </div>
        <div class="col-4 info_der">
            <img src="images/index/Conejos_bebes.jpg" alt="">

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