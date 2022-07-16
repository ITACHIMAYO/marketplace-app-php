<?php include('Conexion.php') ?>
<?php
    $target_dir = "imagenes/";
    $target_file = $target_dir . basename($_FILES["usuario_img"]["name"]);

     $usuario_img = addslashes(file_get_contents($_FILES["usuario_img"]["tmp_name"]));

    

    $query = 'INSERT INTO clientes
    VALUES(NULL, 
    "'. $usuario_img. '"
    
    )';

    mysqli_query($conexion, $query);

    
     

    header("Location: perfil.php");
?>