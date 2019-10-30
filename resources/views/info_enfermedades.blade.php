@extends('layouts.info')
@section('titulo')
    Enfermedades
@stop

@section('contenido')
<div class="row info_contenido">
        <div class="col-7 info_izq">
            <h1>Enfermedades en los conejos</h1>
    
            <div class="lista_alimentacion">
            <ul class="">
               <li><a href="#Sintomas">Sintomas</a> </li>
              <li> <a href="#Dientes">Dientes demasiado largos</a> </li>
               <li><a href="#Pasteurella">Pasteurella</a> </li>
              <li> <a href="#Patas">Problemas en las patas</a> </li>
              <li> <a href="#Acaros">Ácaros en los oídos</a> </li>
              <li> <a href="#Patas">Records</a> </li>
              <li> <a href="#Patas">Visión</a> </li>
              
            </ul>
            </div>
        

            <br>
            <!---->
            <div>
                    <strong><h4 id="Sintomas">Sintomas</h4></strong>
                <h5>Si observas un comportamiento extraño en tu conejo o algún cambio en su cuerpo, presta especial atención 
                a los síntomas para diagnosticar posibles problemas de salud o enfermedades. Algunos de los síntomas que pueden 
                indicar que un conejo está enfermo son: </h5>
                <ul class="container">
                    <li>Come menos o tiene dificultad para comer.</li>
                    <li>Está más delgado.</li>
                    <li>Tiene pérdidas de pelo o calvas que no están relacionadas con la muda.</li>
                    <li>Bultos en la piel.</li>
                    <li>Inflamación en las mamas.</li>
                    <li>Diarrea o heces demasiado blandas que persisten en el tiempo.</li>
                    <li>Ronquidos, estornudos, tos, mocos o dificultad para respirar.</li>
                    <li>Ojos llorosos, rojos o irritados.</li>
                    <li>Cabeza inclinada hacia un lado.</li>
                </ul>
                <h5>Algunas de las causas por las que aparecen determinadas enfermedades de los conejos son una mala 
                alimentación o comida en mal estado, una jaula inadecuada, heridas mal curadas, una higiene incorrecta, estrés 
                o temperaturas excesivas. Otras, pueden prevenirse a través de la vacunación.</h5>
            </div>
    
            <br><hr><br>
            <div>
                <strong><h4 id="Dientes">Dientes demasiado largos</h4></strong>
                <p>¡Los dientes de los conejos crecen sin parar! Por eso necesitan roer a menudo para ir desgastándolos; si no, 
                crecerán más de la cuenta hasta el punto de hacerle daño y dificultarle la vida.</p>
                <p>Las puntas de los incisivos pueden hacerle heridas y en casos graves, incluso crecen por fuera de la boca 
                y le impiden abrirla y comer. Si un conejo deja de comer porque le resulta imposible, ¡morirá!</p>
                <p>Por eso, si tienes un conejo, asegúrate de que come siempre suficiente fibra y que roe frecuentemente 
                madera no tratada o corcho.</p>
            </div>
            <br><hr><br>
            <div>
                <strong><h4 id="Pasteurella">Pasteurella</h4></strong>
             <p>Es una de las enfermedades de los conejos más comunes. La pasteurella  se caracteriza por ojos llorosos, 
            secreción nasal, ojos llorosos, estornudos y patas enmarañadas. Es una infección bacteriana y suele aparecer en 
            situaciones de estrés o después.</p>
            <p>Se puede tratar con antibióticos, pero no siempre funcionan, porque hay riesgo de que se haga crónica. 
            Además, es muy contagiosa. Lo mejor para prevenirla es ofrecerle al conejo un ambiente libre de estrés y muy limpio.</p>
            </div>
            <br><hr><br>
            <div>
                <strong><h4 id="Patas">Problemas en las patas</h4></strong>
             <p>Es más habitual en conejos grandes, pero realmente cualquier conejo puede tener problemas en las patas si 
            no vive en las condiciones adecuadas.</p>
            <p>Por ejemplo, los conejos que viven en jaula con suelo de rejilla acaban teniendo úlceras y otras lesiones en 
            las patas por la presión constante que ejercen las barras. Los tableros o nidos evitan este problema.</p>
            </div>
            <br><hr><br>
            <div>
                <strong><h4 id="Acaros">Ácaros en los oídos</h4></strong>
             <p>Si tu conejo tiene costras en el oído, se rasca y no para de agitar la cabeza, es muy probable que tenga ácaros 
            en los oídos. A veces, además de todo esto, también pierden pelo.</p>
            <p>Si tu conejo tiene ácaros en los oídos, debes llevarlo al veterinario cuanto antes. Si no se le pone pronto 
                tratamiento, corre riesgo de sufrir graves infecciones.</p>
            </div>
            <br><hr><br>
            <div>
                <strong><h4 id="Dientes">Records</h4></strong>
             <p>Un conejo corriendo puede alcanzar una velocidad de 55 km/h. En cuanto al salto más alto, ha llegado a medir un metro y 
            el salto más largo hasta 3 metros. El conejo más grande del mundo, mide 1.23 cm y pesa casi 20 kilos, por supuesto está en 
            el libro Guinness de los Récords. La camada más grande fue de 24 crías y se dio en dos ocasiones.</p>
            </div>
            <br><hr><br>
            <div>
                <strong><h4 id="Dientes">Visión</h4></strong>
             <p>Los conejos sin girar la cabeza pueden ver por detrás, su visión puede alcanzar casi los 360 grados. 
            Pero su campo visual tiene un punto ciego justo delante de su cara. Es por eso que esta carencia la suplen con unos 
            pelitos que tienen en el morro que son capaces de detectar cualquier cosa.</p>
            </div>
            
        </div>
        <div class="col-4 info_der">
            <img src="images/Conejo4.png" height="350px" width="250px" alt="">
            <br>
            <img src="images/info/cuidados/conejo_mascota.jpg" height="400px" width="250px" alt="">
            <img src="images/info/cuidados/jaula.jpg" height="400px" width="250px" alt="">
            <img src="images/info/cuidados/esquinero.jpg" height="350px" width="250px" alt="">
            <img src="images/info/cuidados/bebedero.jpg" height="500px" width="250px" alt="">
    
        </div>
    </div>

    
@stop