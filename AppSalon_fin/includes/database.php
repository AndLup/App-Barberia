<?php

$db = mysqli_connect('localhost', 'root', 'FullStackMz90', 'appsalon');

if(!$db){
    echo 'Error en la conexión';
    exit;
}else{
    echo 'Conexión exitosa';
}