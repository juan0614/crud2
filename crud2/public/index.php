<?php

define('HOST','localhost:3306');
define('USUARIO','root');
define('CLAVE','katavigaming5');
define('BASE','prueba');

echo "Ingresar cedula: \n";
$cedula = trim(fgets(STDIN));
echo "Ingresar nombre: \n";
$nombre = trim(fgets(STDIN));
echo "Ingresar apellido: \n";
$apellido = trim(fgets(STDIN));

$link = mysqli_connect(HOST,USUARIO,CLAVE);
mysqli_select_db($link,BASE);
mysqli_query($link,"INSERT INTO registro (nombre,apellido,cedula) VALUES('$nombre','$apellido','$cedula')");
do
    {
    echo "Insercion realizada correctamente. Deseas revisar la tabla? (S/N)";
    $revisar = strtolower(trim(fgets(STDIN)));
    }
while($revisar != 's' && $revisar !='n');
if($revisar == 's')
{
    $rs = mysqli_query($link,"SELECT * FROM registro;");
    echo "Cedula, Nombre, Apellido\n";
    while (($fila = mysqli_fetch_assoc($rs)))
    {
        echo "$fila[cedula], $fila[nombre], $fila[apellido]\n";
    }
}
else
    {
    die('Hasta luego');
}