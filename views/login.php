<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Iniciar sesión</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</head>

<body>
    <!--inicio del encabezado-->

    


      
    <div class="row">
        <div class="col s7">
            <div class="card  blue lighten-5">
                <div class="card-content center">
                    <h3>Inicie sesión</h3>
                    <div class="carousel" id="demo-carousel">
                        <a class="carousel-item" href="#one!"><img src="Img/1.jpg"></a>
                        <a class="carousel-item" href="#two!"><img src="Img/2.jpg"></a>
                        <a class="carousel-item" href="#three!"><img src="Img/3.jpg"></a>
                        <a class="carousel-item" href="#four!"><img src="Img/4.png"></a>
                        <a class="carousel-item" href="#five!"><img src="Img/5.jpg"></a>
                      </div>
                    </div>
  
               
              </div>
        </div>
        

        <div class="col s5 lime lighten-4 center"> 

            <span class="offset-m3 center">
            <?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>
<h3>No tiene permisos para entrar a la página <h3>
<?php
}else {
?>
<br />
<br />
           
    <form action="./controller/login.php" method="post"> 
        <div class="row card-panel z-depth-8">

        <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input
        type="text"
        placeholder="Ingresa tu nombre"
        id="usuario"
        name="usuario"
        class="validate"
        required
        />
        <label for="usuario">Usuario:</label>
        </div>
        <div class="input-field col s12">
        <i class="material-icons prefix">lock</i>
        <input
        type="password"
        id="password"
        name="password"
        class="validate"
        required
        />
        <label for="password">Contraseña</label>
        </div>
        <button class="btn blue right">
        <i class="material-icons left">check</i>
        Iniciar
        </button>
        </div>
        </form>
        <?php }?>
    </span>

    <img src="Img/niña.png" width="250" height="273" />
    </div>
   
</div>

<!--Pie de pagina-->

   

<script>
 
    $(document).ready(function(){
     
          $('#demo-carousel').carousel();
     
        });
     
    </script>
        

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</body>
</html>