

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CajaEnvioPerfil</title>
    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

     <!-- importante -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    

<header>
    <a href="principal.php">
       <img class="LogoImg"  src="Img/CAJA2.png" alt="logo"></a>
    </a>
     <a class="cerrarSesion"href="index.php">
     <i class='bx bx-user'></i>
     </a>
   
</header>

<main>
<div class="container">
<form action="perfil_confi.php" method="POST" enctype="multipart/form-data">
    <div class="perfil">
    </div>
    <div class="perfilContenido">
        <div class="imgPerfil">
            <img class="fotoPerfil"  src="Img/loli.jpg" alt="logo">
            <input class='bx bx-camera icon' type="file" name="usuario_img">
            <span class="UsuarioPerfil">usuario</span>
        </div>
     </div>   
    </form>
</div>
</main>

</body>
</html>