<?php 
require '../../includes/funciones.php'; // ../../ sale de las carpetas propiedades y admin para entrar entrar en includes
incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <form action="formulario">
            <fieldset>
                <legend>información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Ttiulo de Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" placeholder="Precio de Propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png"> <!--//accept especifica los formatos a aceptar -->

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" cols="30" rows="10"></textarea>

            </fieldset>
        </form>

        <fieldset>
            <legend>informacion de Propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ej: 3">

        </fieldset>
    </main>

    <?php 

incluirTemplate('footer');  ?>