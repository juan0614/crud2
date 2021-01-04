<?php
$link = mysqli_connect("localhost:3306", "root", "katavigaming5");

mysqli_select_db($link, "prueba");

$tildes = $link->query("SET NAMES 'utf8'");

mysqli_query($link, "INSERT INTO registro VALUES ('nombre', 'apellido', 'cedula')");

mysqli_close($link);

echo 'Los datos han sido insertados en la base de datos';

?>