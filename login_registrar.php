<?php include("Conexion.php");

$nombre = $_POST["usuario"];
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];
$email = $_POST["email"];

// login
if(isset($_POST["btningresar"])){

    $query = mysqli_query($conexion,"SELECT * FROM clientes WHERE usuario = '$nombre' AND contraseña = '$pass'");
     $nr = mysqli_num_rows($query);

     if($nr==1){

        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

        $payload = json_encode(['user_id' => 123]);
    
        // Encode Header to Base64Url String
        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

        // Encode Payload to Base64Url String
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'skysthelimit', true);
        
        // Encode Signature to Base64Url String
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
        
        // Create JWT
        $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

        setcookie('login_access', $jwt, time() + (86400 * 30), "/"); // 86400 = 1 day
        
        header("Location: principal.php");

     }else{
         
        header("Location: index.php");

     }
}


//Registrar
if(isset($_POST["btnregistrar"])){

if($pass==$cpass){

    $sql= "SELECT * FROM clientes WHERE correo='$email'"; 

    $result= mysqli_query($conexion, $sql);

    
     
    if(mysqli_num_rows($result)==0){

    $sligrabar = "INSERT INTO clientes(usuario,correo,contraseña) VALUES ('$nombre','$email','$pass')";

    if(mysqli_query($conexion,$sligrabar)){
        
        header("Location: index.php");

    }else{
        header("Location: registrar.php");
        echo"<script>alert('ERROR INTENTALO DE NUEVO')</script>";
    }

}else{echo"<script>alert('correo ya existe')</script>";
   

}
}else{
    
    echo"<script>alert('la Contraseña no coinciden ')</script>";
    
}
}

?>