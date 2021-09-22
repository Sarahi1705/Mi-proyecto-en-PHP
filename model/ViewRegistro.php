<?php
// Realizar Conexion a BD
include ('conexion.php');
// Realizar consulta SQL
$consulta = "select * from registro";
echo ('<br>');
echo ($consulta);
$resultado = mysqli_query($conexion, $consulta);
if (!$resultado){
echo 'No pudo seleccionar la base de datos';
exit;
}
// Recorer la tabla de 1 a 1
// 1er Recorrido
echo ('<br>');
echo ('Primer recorrido');
// Imprimir Resultados
while ($filasql= mysqli_fetch_array($resultado)) {
// Imprimir por Indice del Arreglo
echo '<br>';
echo $filasql[0].' ';
echo $filasql[1].' ';
echo $filasql[2].' ';
echo $filasql[3].' ';
echo $filasql[4].' ';
echo $filasql[5].' ';

echo '-';
// Imprimir por Arreglo Asociado
echo $filasql['id_usuario'].' ';
echo $filasql['Nombre'].' ';
echo $filasql['Apellido_Paterno'].' ';
echo $filasql['Apellido_Materno'].' ';
echo $filasql['Ingresa_Correo'].' ';
echo $filasql['Contraseña'].' ';
}
mysqli_close($conexion);
?>