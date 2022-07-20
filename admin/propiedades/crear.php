<?php 
// Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

// Arreglo con mensajes de errores
$errores = [];

//Ejecutar el codigo despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
//imprime en la pagina la informacion enviada al servidor. superglobal $_POST
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

// Validador
if(!$titulo){
    $errores[]= "Debes añadir un titulo"; // añade este mensaje al arreglo automaticamente
}

if(!$precio){
    $errores[]= "El precio es obligatorio"; // añade este mensaje al arreglo automaticamente
}

if(strlen($descripcion) <50){
    $errores[]= "la descripcion es obligatoria y con al menos 50 caracteres"; // añade este mensaje al arreglo automaticamente
}

if(!$habitaciones){
    $errores[]= "El número de habitaciones es obligatorio"; // añade este mensaje al arreglo automaticamente
}

if(!$wc){
    $errores[]= "El número de baños es obligatorio"; // añade este mensaje al arreglo automaticamente
}

if(!$estacionamiento){
    $errores[]= "El número de lugares de estacionamiento es obligatorio"; // añade este mensaje al arreglo automaticamente
}

if(!$vendedor){
    $errores[]= "Elige un vendedor"; // añade este mensaje al arreglo automaticamente
}

//  echo"<pre>";
//  var_dump($errores);
//  echo"</pre>";

// exit; // previene que se ejecute la insercion a la base de datos

//Revisar que el arreglo de $errores este vacio

if(empty($errores)){
    //insertar en la base de datos
$query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorid) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedor')";

// echo $query;

$resultado = mysqli_query($db, $query);


// comprobar si se escribio correctamente la db
// if($resultado){
//     echo "Insertado Correctamente";
// }
}



}



require '../../includes/funciones.php'; // ../../ sale de las carpetas propiedades y admin para entrar entrar en includes
incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>
        <?php endforeach; ?>
        
        
            
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
                <option value="">-- Seleccione --</option>
                <option value="1">Mariano</option>
                <option value="2">Gordon</option>

            </select>
        
         </fieldset>
       
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

    <?php 

incluirTemplate('footer');  ?>