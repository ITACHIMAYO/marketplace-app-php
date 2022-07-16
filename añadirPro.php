<?php include('Conexion.php') ?>
<?php
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $target_dir = "imagenes/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

     $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    $ubicacion = $_POST["ubicacion"];

    

    $query = 'INSERT INTO producto
    VALUES(NULL, 
    "'.$nombre.'", 
    "'. $descripcion. '",
    "'. $precio. '",
    "'. $image. '",
    "'. $ubicacion. '"
    )';

    mysqli_query($conexion, $query);

    
     

    header("Location: index.php");
?>