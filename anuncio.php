<?php 
require 'includes/funciones.php';
incluirTemplate('header'); 
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta frente al bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img src="build/img/destacada.jpg" alt="imagen de la propiedad" loading="lazy">
    </picture>
    <div class="resumen-propiedad">
        <p class="precio">$3.000.000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                <p>3</p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                <p>3</p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                <p>4</p>
            </li>

        </ul>
        <p>
            Ahí va el Capitán Beto por el espacio Con su nave de fibra hecha en Haedo Ayer colectivero Hoy amo entre los amos del aire Ya lleva 15 años en su periplo Su equipo es tan precario como su destino Sin embargo, un anillo extraño Ahuyenta sus peligros en
            el cosmos Ahí va el Capitán Beto por el espacio La foto de Carlitos sobre el comando Y un banderín de River Plate Y la triste estampita de un santo
        </p>
        <p>
            ¿Dónde está el lugar al que todos llaman cielo? Si nadie viene hasta aquí a cebarme unos amargos, como en mi viejo umbral ¿Por qué habré venido hasta aquí, si no puedo más de soledad? Ya no puedo más de soledad Su anillo lo inmuniza en los peligros Pero
            no lo protege de la tristeza Surcando la galaxia del Hombre Ahí va el Capitán Beto, el errante ¿Dónde habrá una ciudad en la que alguien silbe un tango? ¿Dónde están, dónde están los camiones de basura, mi vieja y el café? Si esto sigue así
            como así, ni una triste sombra quedará Ni una triste sombra quedará Ni una triste sombra quedará
        </p>
        <p>Ahí va el Capitán Beto por el espacio Regando los malvones de su cabina Sin brújula y sin radio Jamás podrá volver a la Tierra Tardaron muchos años hasta encontrarlo El anillo de Beto llevaba inscripto un signo del alma</p>
    </div>
</main>

<?php 

incluirTemplate('footer'); 
?>