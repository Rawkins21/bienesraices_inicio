<?php 
// Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

//imprime en la pagina la informacion enviada al servidor. superglobal $_POST
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
// echo"<pre>";
// var_dump($_POST);
// echo"</pre>";

$titulo = $_POST['titulo'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$habitaciones = $_POST['habitaciones'];
$wc = $_POST['wc'];
$estacionamiento = $_POST['estacionamiento'];
$vendedor = $_POST['vendedor'];

//insertar en la base de datos
$query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorid) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedor')";

// echo $query;

$resultado = mysqli_query($db, $query);


// comprobar si se escribio correctamente la db
// if($resultado){
//     echo "Insertado Correctamente";
// }

}



require '../../includes/funciones.php'; // ../../ sale de las carpetas propiedades y admin para entrar entrar en includes
incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Ttiulo de Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio de Propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png"> <!--//accept especifica los formatos que puede aceptar -->

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" cols="30" rows="10" name="descripcion"></textarea>

            </fieldset>
        

            <fieldset>
            <legend>informacion de Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" placeholder="Ej: 3" min="1" max="9" name="wc">

            <label for="estacionamiento">Estracionamiento:</label>
            <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1" max="9" name="estacionamiento">

         </fieldset>

         <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">

                <option value="1">Mariano</option>
                <option value="2">Gordon</option>

            </select>
        
         </fieldset>
       
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

    <?php 

incluirTemplate('footer');  ?>