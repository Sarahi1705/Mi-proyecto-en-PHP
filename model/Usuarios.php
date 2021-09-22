<?php
include ('conectaDB.php');
class Usuario {
public $id_usuario;
public $Correo;
public $Contraseña;
public function __construct($id_usuario, $Correo, $Contraseña) {
$this->id = $id_usuario;
$this->correo = $Correo;
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
$listaUsarios = [];
while ($usuario = mysqli_fetch_array($resultado)) {
$listaUsuarios[] = new Usuario ($usuario['id_usuario'], $usuario['Correo'], $usuario['Contraseña']);
}



$mysqli->close();
return $listaUsarios;
}
}
?>