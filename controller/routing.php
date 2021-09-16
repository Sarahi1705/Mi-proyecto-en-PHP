
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
// $var_getMenu = $_GET['menu'];

switch ($var_getMenu) {
    case "inicio":
        require_once('./views/Home.php');
        break;
    case "acercade":
        require_once('./views/Acercade.php');
        break;
    case "bienvenida":
        require_once('./views/Bienvenida.php');
        break;
    case "login":
        require_once('./views/login.php');
        break;
    case "registrarse":
        require_once('./views/Registrarse.php');
        break;
    
    default:
        require_once('./views/Home.php');
}


?>

