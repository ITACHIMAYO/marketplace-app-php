<?php include('Conexion.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">
</head>
<body>

<?php
        while($producto = mysqli_fetch_assoc($resultado)) {
         echo '<div class="cuadro">';
            echo $producto['nombre'] . '<br>';
            echo $producto['descripcion'] . '<br>';
            echo $producto['precio'] . '<br>';
            echo $producto['ubicacion'].'<br>';        
            echo '<img src="data:image/*;base64,'.base64_encode($producto['image']).'"alt="">';
            echo '<br>';
           echo '</div>';
           
        }

               
      ?>

      
</body>
</html>