<?php session_start();

    include('Conexion.php');
    $query = "SELECT * FROM producto";

    $resultado = mysqli_query($conexion, $query);

    mysqli_num_rows($resultado);

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CajaEnvioInicio</title>
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
     <i class='bx bx-user'>Usuario</i>
     </a>
   
</header>

<nav  class="sidebarIndex">
 
    <div class="sidebar">
      <div class="m-2">
          <li class="search-box">
              <i class='bx bx-search-alt icon'></i>
              <input type="search" placeholder="Search.." id="buscar" name="buscar" onkeyup="searchItems($('#buscar').val())" aria-label="Search">
          </li>
    <div class="menu">
          <div class="m-2">
          <li class="nav-link">
                        <a href="perfil.php">
                            <i class='bx bxs-user icon'></i>
                            <span class="text nav-text">Perfil</span>
                        </a>
                  </li>
               </div>   
               <div class="m-2">
                  <li class="nav-link">
                      <a href="#">
                         <i class='bx bxs-conversation icon'></i>
                         <span class="text nav-text">Mensajes</span>
                     </a>
                  </li>
             </div>
             <div class="m-2">
                  <li class="nav-link">
                      <a href="#">
                         <i class='bx bx-highlight icon'></i>
                         <span class="text nav-text">Publicaciones</span>
                     </a>
                  </li>
             </div>
             <div class="m-2">
                  <li class="nav-link">
                      <a href="#">
                         <i class='bx bxs-bookmark-heart icon'></i>
                         <span class="text nav-text">Lista de deseos</span>
                     </a>
                  </li>
             </div>
            </div>
      </div>
   </div>
<!----AGREGAR PRODCUTO--------------------------------------------------------------->


    <div class="sidebarVender">
        <form action="añadirPro.php" method="POST" enctype="multipart/form-data">
            <div class="m-3">
                <h2>vender</h2>
            </div>
            <div class="menu">
            <div class="m-1">
                <li class="vendercolor">
                  <label class="m-2" for="">Nombre producto</label>
                  <input type="text" REQUIRED name="nombre" id="" placeholder="30 caracteres....">
                </li>
            </div>
            <div class="m-1">
               <li class="vendercolor">
                  <label class="m-2" for="">Descripción</label>
                  <input type="text" name="descripcion" id="">
               </li>
            </div>
            <div class="m-1">
                <li class="vendercolor">
                  <label class="m-2" for="">Precio del producto</label>
                  <input type="number" REQUIRED name="precio" id="">
                </li>
            </div>
           
            <div class="m-1">
                <li class="vendercolor">
                  <label class="m-2" for="">Ubicacion</label>
                  <input type="text" REQUIRED name="ubicacion" id="">
                </li>
            </div><br>

            <div class="m-1">
                <label  class="subirImg" for="imginput">
                   Subir Imagen   <i class='bx bxs-upvote'></i>
                </label>
                <input id="imginput" hidden class="agregarImage" type="file" REQUIRED name="image" id="">
            </div><br>

            <div class="m-2">
                <input class="btn  btn-outline-success" type="submit" value="Añadir producto">
            </div><br>
          </div>
        </form>
   </div>
</nav>

<!----NAV MOVIL--------------------------------------------------------------->
<main>
<div class="container" id="default">
     <div class="row contenido">
         <?php
        while($producto = mysqli_fetch_assoc($resultado)) {
         echo '<div class="cuadro">';
         echo '<a href="#">';
         echo '<div class="imgcover"><img src="data:image/*;base64,'.base64_encode($producto['image']).'"alt=""></div>';
            echo '<br><br>';
            echo '<h6>$'.$producto['precio'] .'</h6>';
            echo '<div class="iconOpcion"><i class="bx bx-dots-horizontal-rounded"></i></div>';
            echo '<div class="namePro">'.$producto['nombre'] .'</div>';
            echo '<div class="ubiPro">'.$producto['ubicacion'].'</div>';        
            echo '</a>';
           echo '</div>';
        }?>
    </div>
</div>

<div class="container" id="busqueda">

     <div class="row contenido" id="datos_buscador">
        


    </div>
</div>
</main>

<script>
    const searchItems = (parametros) => {
        parametros 
        ? $('#default').hide() && $('#busqueda').show()
        : $('#default').show() && $('#busqueda').hide()

        $.ajax({
        data: { parametros: parametros },
        type: 'POST',
        url: 'buscador.php',
        success: function(data) {
            console.log(data)
                      
            document.getElementById("datos_buscador").innerHTML = data;
        }
        })
    }
        buscar_ahora();
    
</script>
</body>
 
</html>