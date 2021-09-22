<?php
include ('conectaDB.php');
class Registro {
public $id_usuario;
public $Nombre;
public $Apellido_Paterno;
public $Apellido_Materno;
public $Ingresa_Correo;
public $Contraseña;

public function __construct($id_usuario, $Nombre, $Apellido_Paterno, $Apellido_Materno, $Ingresa_Correo, $Contraseña) {
$this->id = $id_usuario;
$this->nombre = $Nombre;
$this->apellido_paterno = $Apellido_Paterno;
$this->apellido_materno = $Apellido_Materno;
$this->ingresa_correo = $Ingresa_Correo;
$this->contraseña = $Contraseña;
}
public static function consultar() {
$mysqli = conectaDB::dbmysql();
$consulta = "select * from usuarios";
echo ('<br>');
// echo ($consulta);
$resultado = mysqli_query($mysqli, $consulta);
if (!$resultado) {
echo 'No pudo Realizar la consulta a la base de datos';
exit;
}
$listaRegistro = [];
while ($registro = mysqli_fetch_array($resultado)) {
$listaRegistro[] = new Registro ($registro['id_usuario'], $registro['Nombre'], $registro['Apellido_Paterno'], $registro['Apellido_Materno'], $registro['Ingresa_Correo'], $registro['Contraseña']);
}



$mysqli->close();
return $listaRegistro;
}
}
?>