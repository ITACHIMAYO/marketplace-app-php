<?php 
    include('Conexion.php');

    $_POST["parametros"];

    $buscardor=mysqli_query($conexion,"SELECT * FROM producto WHERE nombre LIKE LOWER('%".$_POST["parametros"]."%')"); 
    while($producto = mysqli_fetch_assoc($buscardor)){

   
   
           echo '<div class="cuadro">'.
            '<a href="#">'.
            '<div class="imgcover"><img src="data:image/*;base64,'.base64_encode($producto['image']).'"alt=""></div>'.
            '<br><br>'.
            '<h6>$'.$producto['precio'] .'</h6>'.
            '<div class="namePro">'.$producto['nombre'] .'</div>'.
            '<div class="ubiPro">'.$producto['ubicacion'].'</div>'.'<br>'.      
            '</a>'.
            '</div>';
    }
?>