@extends('layouts.info')
@section('titulo')
    Cuidados
@stop

@section('contenido')
<div class="row info_contenido">
    <div class="col-7 info_izq">
        <h1>Cuidados en los conejos</h1>

        <div class="lista_alimentacion">
        <ul class="">
           <li><a href="#Introduccion">Conejo como mascota</a> </li>
          <li> <a href="#Jaula">Jaula del conejo</a> </li>
           <li><a href="#Higiene">Higiene</a> </li>
          <li> <a href="#Actividad">Actividad Física</a> </li>
          
        </ul>
        </div>
        
        <br>
        <!---->
        <div>
            <strong><h4 id="Introduccion">El conejo como mascota</h4></strong>
            <p>En multitud de casos, y por desconocimiento, muchos propietarios de conejos creen que se trata de un roedor como 
                cualquier otro, que requiere una jaula, comida y poco más. El conejo es una especie del orden lagomorpho y cuenta 
                con algunas diferencias físicas y de comportamiento que hacen que requiera unos cuidados especiales a diferencia
                de hámsters o cobayas.</p>

            <p>Además de algunas diferencias evidentes, hemos de tener en cuenta que el conejo es un animal que cuando está en 
            estado libre corre durante todo el día, escarba y disfruta del olor de plantas y flores. Además se trata de un animal
            muy inteligente que reconoce a su dueño así como su nombre y aprende a realizar diversos ejercicios a cambio de 
            trocitos de fruta o verdura.
            </p>
            <p>El conejo también es un animal social que necesita atención y cariño por parte de sus propietarios. 
            Si le cuidas y le dedicas el tiempo suficiente, tendrás a tu lado un increíble amigo de orejas largas y pelo suave.
            </p>
        </div>

        <br><hr><br>
        <div>
            <strong><h4 id="Jaula">Jaula del conejo</h4></strong>
            <p>La jaula será el nido de tu conejo, donde va a dormir y pasar la mayor parte del tiempo. Por tanto, 
            te recomendamos que le proporciones una jaula lo más espaciosa posible para que pueda moverse cuanto más mejor. 
            El tamaño irá directamente relacionado con su calidad de vida y por ese motivo te aconsejamos contar con una de 
            70 x 50 x 50 centímetros como mínimo. Situada siempre en un entorno sin corrientes ni sol directo.</p>
            <p>Es cierto que en el mercado encontrarás jaulas incluso más pequeñas, pero no te recomendamos que cuentes con un 
            espacio tan reducido porque puede generarle ansiedad. Existen personas que hasta les dedican habitaciones enteras 
            por sus necesidades genéticas de espacio.</p>
            <p>Los conejos son animales sociales y si te planteas tener una pareja de amigos necesitarás un espacio de, al menos, 
            4 metros cuadrados (como recomiendan asociaciones animalistas).</p>
            <p>Dentro de la jaula contaremos con:</p>
            <ul class="lista_cuidado">
                <li>
                <strong>Bandeja o esquinero</strong>
                para que puedan hacer sus necesidades y mantener un entorno limpio e higiénico. Nunca utilizaremos arena de gato 
                o similar (puede causar infecciones) así que podemos adquirir viruta prensada que está disponible en cualquier 
                tienda de mascotas. Su limpieza será diaria con un jabón neutro.
                </li>
                <br>
                <li>
                    <strong>Biberón</strong>
                de al menos 1/2 litro. También podemos utilizar un bebedero que sea un pequeño cuenco con agua, aunque es menos 
                recomendable pues se ensuciará a menudo y deberemos limpiarlo con más frecuencia. Siempre tendrá agua en 
                abundancia.    
                </li>
                <br>
                <li>
                    <strong>Dispensador o cuenco</strong>
                para ubicarles el pienso, el heno y las raciones diarias de fruta y verduras.
                </li>
                <br>
                <li>
                    <strong>Cama, toalla de algodón o trapo</strong>
                son algunos de los elementos donde va a descansar el conejo por la noche aunque es cierto que muchos no 
                entienden la función de "madriguera" que les queremos proporcionar y acaban por hacer las necesidades ahí.
                </li>
                <br>
                <li>
                    <strong>Maderas para roer.</strong>
                Nunca deben ser tratadas, pues podrían astillarse y crear un problema serio en los intestinos del conejo. 
                Podemos optar por maderas de árboles frutales como por ejemplo de manzano, naranja, etc., o bien adquirir madera 
                de pino sin tratar.
                </li>
                
            </ul>
        </div>
        <br><hr><br>
        <div>
            <strong><h4 id="Higiene">Higiene</h4></strong>
            <p>Los conejos son mamíferos muy limpios que se asean a sí mismos. No es nada recomendable bañarlos a menos que se 
        ensucien de forma excesiva, sino pueden perder la capa de protección natural de la piel. Bañaremos al conejo como mucho 
        una o dos veces al año. Las suciedades que podamos observar las intentaremos eliminar con toallitas húmedas de bebé.</p>
        <p>Si en un caso excepcional nuestro conejo se ha ensuciado mucho sigue los pasos siguientes:</p>
        <ol class="lista_cuidado2">
            <li>Busca un sitio tranquilo para lavar a tu conejo, recuerda que son muy sensibles.</li>
            <li>Nunca lo pongas boca arriba, les genera estrés.</li>
            <li>Llena una pica o un recipiente con agua templada, que sea agradable para él.</li>
            <li>Utiliza sencillamente agua para lavarle, en caso de que la suciedad no salga puedes utilizar un champú con pH neutro.</li>
            <li>Aclara y seca.</li>
        </ol>    
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