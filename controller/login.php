<?php
if (filter_input_array(INPUT_POST)) {
$_usuario = trim(filter_input(INPUT_POST, 'usuario'));
$_pswd = trim(filter_input(INPUT_POST, 'password'));
include_once '../model/Alumnos.php';
$loginok = alumnos::login($_usuario, $_pswd);
echo '<br> LoginOk = ';
print_r($loginok);
if ($loginok){
header("location: ../index.php?menu=bienvenido");
} else{
echo 'Usuario No Existe o password Incorrecto';
}
}
?>