
<?php

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';


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
   
    case "alumnos":
                    include_once './model/Alumnos.php';
                    $sqlAlumnos = alumnos::consultar();
                    include_once './views/viewAlumnos.php';
                    break;
    case "bienvenido":
        require_once('./views/bienvenido.php');
        break;
    case "logout":
            $session_destroy = session_destroy();
            header("location: ./index.php?menu=home");
            break;
    case "deletealumno":
                $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
               require_once ('./model/Alumnos.php');
                $sqlAlumnos = alumnos::delete($_idalumno);
                header("location: ./index.php?menu=alumnos");
                break;
    case "editalumno":
                    $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
                    require_once ('./model/Alumnos.php');
                    $sqlAlumnos = alumnos::consultarAlumno($_idalumno);
                    include_once './views/Editar.php';
                    
                break;
    case "editar":
                    require_once('./views/Editar.php');
                break; 
    
      
 default:
        require_once('./views/Home.php');
}


?>

