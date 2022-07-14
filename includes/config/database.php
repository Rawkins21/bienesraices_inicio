<?php

function conectarDB(){
    $db = mysqli_connect('localhost', 'root', '1991', 'bienes_raices');

    //  if($db) { 
    //      echo "se conecto";
    //  } else{
    //      echo "no se conecto";
    //   } comprobar si se conecto a la base de datos
    return $db;
}

