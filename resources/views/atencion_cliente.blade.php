<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atencion a clientes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body class="body_ac">
    <!-- NAVBAR -->
    @include('layouts/navbar');
    <!-- FIN NAVBAR -->
    
    <!-- CONTENIDO -->
    <div><h2 class="titulo">Atencion y ayuda</h2></div>
    <hr>
    <div class="separador-largo-b"></div>
    <div class="row mr-auto contenido_ac">
        
        <div class="col-2 contenido_izq_ac">
        
        <a href="#"><i class="fa fa-fw fa-home"></i> Politica de privacidad</a>
        <a href="#"><i class="fa fa-fw fa-home"></i> Condiciones de uso</a>
        <a href="#"><i class="fa fa-fw fa-home"></i> Contacto</a>
        
        </div>
        <div class="col-1"></div>
        <div class="col-6 contenido_der_ac">
            <center><h2>Bienvenido al centro de ayuda y dudas</h2></center>
          
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed iste magni, perferendis placeat quia exercitationem, eos,
                 odio ea reprehenderit illum vitae quas molestiae quae reiciendis. Ad ab nostrum impedit iste.</p>
        </div>
    </div>

    <!-- FOOTER -->
    @include('layouts/footer')
    <!-- FIN FOOTER -->
    

    <!-- BOOTSTRAP JS -->
<script src="js/jquery-3.4.1.min.js"></script>
</body>
</html> 