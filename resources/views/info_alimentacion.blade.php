@extends('layouts.info')
@section('titulo')
        Alimentación
@stop
@section('contenido')
    <div class="row info_contenido">
        <div class="col-7 info_izq">
            <h1>Alimentación en los conejos</h1>

            <div class="lista_alimentacion">
            <ul class="">
               <li><a href="#Introduccion">Introducción</a> </li>
              <li> <a href="#Dieta">Base de la dieta</a> </li>
               <li><a href="#Heno">Heno</a> </li>
              <li> <a href="#Verduras">Verduras</a> </li>
               <li><a href="#Frutas">Frutas</a> </li>
              <li> <a href="#Pienso">Pienso</a> </li>
            </ul>
            </div>
            
            <br>
            <!---->
            <div>
           <strong><h4 id="Introduccion">Introducción</h4></strong> 
            <p>Dos de los principales problemas de salud en conejos son los problemas del tracto intestinal y los problemas de 
            dientes y muelas. Ambos pueden evitarse en gran medida proporcionando a nuestro conejo una alimentación correcta.</p>
            <br>
            <p>Los conejos tienen un sistema digestivo muy delicado que puede verse alterado fácilmente por la proliferación de 
            bacterias dañinas debido a alimentos altos en azúcares o por un aporte insuficiente de fibra. Los cólicos y otros 
            problemas digestivos son una de las principales causas de muerte en conejos en cautividad, no así en la naturaleza.
            Una dieta correcta, ejercicio e hidratación ayudarán a mantener el riesgo de cólicos a raya.</p>
            <p>
            Los problemas de dientes y muelas no siempre resultan evidentes. Muchos conejos van viendo deteriorarse su dentadura, 
            tanto en la parte externa, como en las raíces sin dar síntomas visibles. Por desgracia muchas veces, cuando nos damos 
            cuenta, el problema está avanzado y es de difícil solución. Una vez más la alimentación adecuada, en especial el 
            consumo de grandes cantidades de heno, juega un papel fundamental en la prevención de estos problemas.
            </p>
            </div>
            <br>
            <hr>
            <br>
            <!---->
            <div>
            <h4 id="Dieta">Dieta</h4>
            <p>Los conejos son animales estrictamente herbívoros y su alimentación se convierte en un factor esencial para que nuestra mascota goce de una buena salud.
                <br>
                La correcta alimentación de un conejo debe incluir los siguientes ingredientes:
            </p>
            <ul class="container">
                <li>80% Heno</li>
                <li>15% Verdura de hoja o hierbas silvestres</li>
                <li>5% Pienso</li>
            </ul>
            <p>La dieta debe ser lo más variada posible, tanto respecto a los henos, el alimento fresco y el pienso. Esto nos 
                asegurará, por un lado una variedad de nutrientes necesaria, y por otro, hará la vida de nuestro conejo más 
                interesante, ya que la variedad en la comida constituye uno de los pilares del enriquecimiento ambiental.
            </p>
            </div>
            <br><hr><br>
            <!---->
            <div>
                <h4 id="Heno">Heno</h4>
                <p>La dieta debe ser muy rica en fibra por lo tanto un 80% de su alimentación diaria debe ser heno. Podemos 
                diferenciar dos tipos de heno, de gramíneas (mezcla de hierbas secas y flores) o de leguminosas (alfalfa, trébol, 
                soja, etc.). Lo ideal sería aportarle ambos siendo siempre mayor la proporción de heno de gramíneas. <br>
                La cantidad de heno diaria será proporcional al volumen corporal del conejo.</p>
                <br>
                <p>No es necesario cambiarlo a diario, iremos añadiendo pequeñas cantidades de modo que siempre tenga heno limpio 
                a libre disposición. <br>
                Podemos colocarlo en un pesebre enganchado a la jaula, bolas colgadas o en el suelo limpio de la jaula.</p>
            </div>
            <br><hr><br>
            <!---->
            <div>
                <h4 id="Verduras">Verduras</h4>
                <p>Estas son tan importantes como el heno en mantener el intestino saludable. Pruebe el brócoli, lechuga Romaine, 
                kale, perejil, zanahorias con sus hojas, endibia, escarola, eneldo, menta, albahaca, cilantro, culantro, espinaca,
                tomate, y apio. Experimente y vea cuales son los favoritos de su conejo! Los bebitos no deben comer verduras hasta
                tener alrededor de 3 meses. Introduzca los vegetales poco a poco, empezando con la zanahoria y la lechuga romaine. 
                Un conejo adulto de 5 lbs. debe recibir por lo menos 4 tazas rebozantes de verduras frescas y variadas (por lo menos 
                3 diferentes clases) diario.
            </p>
            </div>
            <br><hr><br>
            <!---->
            <div>
                <h4 id="Frutas">Frutas</h4>
                <p>Estas se consideran unas comiditas especiales, y se deben dar en cantidades muy limitadas. No se debe dar más 
                de 4 cucharadas diarias para un conejo de 5 lbs. Buenas opciones son manzanas, mango, melocotón (durazno), papaya,
                piña, albaricoque, bayas . . . cualquier fruta le sería bueno para su conejito. Los platanitos (bananas, guineos) 
                se deben dar rara vez. Lo que no exagere.
                </p>
            </div>
            <br><hr><br>
            <!---->
            <div>
                <h4 id="Pienso">Pienso</h4>
                <p>El pienso adecuado es tipo pellets (hierba prensada), no debemos usar piensos de cereales y semillas que tienen diferentes formas y colores ya que nuestra mascota puede seleccionar las partes que más le gustan, casi siempre las más grasas y estas son por otro lado las menos adecuadas para su digestión.
                        <br>
                        La cantidad de pienso diaria será de 1 ó 2 cucharadas soperas, en el caso de animales jóvenes dar menos cantidad.
                        <br>
                        <strong>No se debe usar un comedero para el pienso, lo mejor es mezclarlo con el heno.</strong>
                </p>
            </div>
            <br><br>
        </div>
        <div class="col-4 info_der">
            <img src="images/Conejo4.png" height="350px" width="250px" alt="">
            <br>
            <img src="images/index/Conejos_bebes.jpg" height="400px" width="250px" alt="">
            <img src="images/info/alimentacion/Dieta.jpg" height="400px" width="250px" alt="">
            <img src="images/info/alimentacion/Heno.jpg" height="350px" width="250px" alt="">
            <img src="images/info/alimentacion/Verdura.jpg" height="500px" width="250px" alt="">
           
            <img src="images/info/alimentacion/Pienso.jpg" height="400px" width="250px" alt="">


        </div>
    </div>
   
@stop