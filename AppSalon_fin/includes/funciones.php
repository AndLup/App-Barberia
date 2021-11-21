<?php

function obtenerServicios(): array {
    try {
        //Importar una conexion
        require 'database.php';

        $sql = "SELECT * FROM Servicios";

        $consulta = mysqli_query($db, $sql);

        //Crear arreglo para colocar los resultados
        $servicios = [];

        $i = 0;

        while($row = mysqli_fetch_assoc($consulta)){
            $servicios[$i]['Id'] = $row['Id'];
            $servicios[$i]['Nombre'] = $row['Nombre'];
            $servicios[$i]['Precio'] = $row['Precio'];

            $i++;
        }

        // echo "<pre>";
        //     var_dump(($servicios));
        // echo "</pre>";


        return $servicios;

        //Escribir codigo SQL

        //Obtener los resultados
    } catch (\Throwable $th) {
        
        var_dump($th);
    }
}

obtenerServicios();
