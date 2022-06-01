<?php

require 'app.php';

function incluirTemplate( string $nombre, bool $inicio = false ){ // $inicio = false se asigna por defecto si la clase inicio no esta presente, agrega la clase inicio a la pagina si esta presente
    
    include TEMPLATES_URL."/${nombre}.php";
}