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
    <title>@yield('titulo')</title>
</head>
<body>
    @section('header')
        @include('layouts.navbar')
    @show

    <div class="container-fluid">
        @yield('contenido')
    </div>

    @section('footer')
        @include('layouts.footer')
    @show
    <span class="ir-arriba icon-arrow-up2">↑</span>
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