<html><head><meta charset="utf-8"> </head><body>
<?php

include "databaseconnect.php";
include "conection.php";

$resultados

if ($resultados !=NULL)

{

echo "- nombre: ".$resultados['nombre']."<br/> ";

echo "- apellidos: ".$resultados['apellidos']."<br/>";

echo "- cedula: ".$resultados['cedula']."<br/>";

echo "**********************************<br/>";

}

else
    {
    echo "<br/>No hay más datos!!! <br/>";
    }

$link = mysqli_connect("localhost:3306", "root", "katavigaming5");

mysqli_select_db($link, "prueba");

$tildes = $link->query("SET NAMES 'utf8'");

$result = mysqli_query($link, "SELECT * FROM registro");

while ($fila = mysqli_fetch_array($result)){ mostrarDatos($fila); }

mysqli_free_result($result); mysqli_close($link);

?>
</body></html>
