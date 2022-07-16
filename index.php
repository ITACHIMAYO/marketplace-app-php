<?php include("Conexion.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CajaEnvioLogin</title>
    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="fondoSesion">

<div class="container">
    <div class="row cuadroSesionRow">

      <div class="cuadroSesion">
       <form action="login_registrar.php" method="POST">

       <img class="LogoImgS"  src="Img/CAJA2.png" alt="logo">
  
            <h5>Iniciar Sesion</h5>
           <div class="m-2">
               <input type="text"  placeholder="&#128273; Usuario" name="usuario" REQUIRED>
            </div>
            <div class="m-2">
               <input type="password"  placeholder="&#128274; Contraseña" name="pass" REQUIRED>
            </div>
            <div class="m-2 btnSesion">
               <input type="submit" name="btningresar" value="Ingresar"><br>
            </div>
               <a class="crear_a" href="registrar.php">Registrarte</a>
        </form>
      </div>
    </div>
</div>
</body>
</html>