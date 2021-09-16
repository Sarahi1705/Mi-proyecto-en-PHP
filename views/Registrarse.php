<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrarse</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</head>

<body>
    <!--inicio del encabezado-->

    


      
    <div class="row">
    <div class="col s4 pink lighten-5"> 
            <span class="offset-m3 center">
           <form action="index.html" method="get">
        <div class="row card-panel z-depth-8">
        <div class="input-field col s12">
        <i class="material-icons prefix">person_add</i>
        <input
        type="text"
        placeholder="Ingresa tu nombre"
        id="Nombre"
        name="Nombre"
        class="validate"
        required
        />
        <label for="Nombre">Nombre</label>
        </div>
        <div class="input-field col s12">
            <i class="material-icons prefix">assignment</i>
            <input
            type="text"
            placeholder="Ingresa tu apellido paterno"
            id="ApellidoPaterno"
            name="ApellidoPaterno"
            class="validate"
            required
            />
            <label for="ApellidoPaterno">Apellido paterno</label>
        </div>
        <div class="input-field col s12">
            <i class="material-icons prefix">assignment</i>
            <input
            type="text"
            placeholder="Ingresa tu apellido materno"
            id="ApellidoMaterno"
            name="ApellidoMaterno"
            class="validate"
            required
            />
            <label for="ApellidoMaterno">Apellido materno</label>
        </div>
        <div class="input-field col s12">
            <i class="material-icons prefix">mail</i>
            <input
            type="text"
            placeholder="Ejm. al060884@uacam.mx"
            id="email"
            name="email"
            class="validate"
            required
            />
            <label for="email">Ingresa un correo</label>
        </div>
        <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input
            type="password"
            placeholder="Escribe una Contraseña"
            id="pswd"
            name="pswd"
            class="validate"
            required
            />
            <label for="password">Contraseña</label>
        </div>
        <div class="input-field col s12">
        <i class="material-icons prefix">lock</i>
        <input
        type="password"
        id="pswd"
        name="pswd"
        class="validate"
        required
        />
        <label for="pswd">Confirma la Contraseña</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
            <i class="material-icons right">send</i>
          </button>
        </div>
        </form>
    </span>
    </div>
    <div class="col s8">
        <div class="card  cyan lighten-5">
            <div class="card-content center">
                <h3>Registrarse</h3>
                <p>
                    Al registrarte en este blog sabras mas sobre la vida de sarahi =)
                </p>

                <div class="carousel" id="demo-carousel">
                    <a class="carousel-item" href="#six!"><img src="Img/6.jpg"></a>
                    <a class="carousel-item" href="#seven!"><img src="Img/7.jpg"></a>
                    <a class="carousel-item" href="#eight!"><img src="Img/8.jpg"></a>
                    <a class="carousel-item" href="#nine!"><img src="Img/9.jpg"></a>
                    <a class="carousel-item" href="#ten!"><img src="Img/10.png"></a>
                  </div>
                  <p>
                   Carousel de paisajes naturales 
                </p>

                </div>

           
          </div>

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