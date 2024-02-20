<?php
if(isset($_POST["submit-form"])){
    $solicitud=$_POST["solicitud"];
    $nOrden=$_POST["orden"];
    $company=$_POST["company"];
    $nombres=$_POST["apellido"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $adress=$_POST["direccion"];
    $provincia=$_POST["provincia"];
    $distrito=$_POST["distrito"];
    $texto=$_POST["obs"];

    $ip = $_SERVER["REMOTE_ADDR"];  // Obtener la IP del visitante
    $captcha = $_POST["g-recaptcha-response"];
    $secretkey = "6Ldfb3UpAAAAACTSqfMarTTWqX8oyRFb0ZH6MUzW";

    $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&respuesta=$captcha&remoteip=$ip");
    $atributos = json_decode($respuesta, TRUE);

    

    
    $destinatario="contacto@algperu.com";
    $asunto="Mensaje from: LIBRO DE RECLAMACIONES";

    $contenido="Solicitud: $solicitud \n"; 
    $contenido.="Numero de Orden: $nOrden \n";  
    $contenido.="Compañia: $company \n"; 
    $contenido.="Nombres y Apellidos: $nombres \n";  
    $contenido.="Correo Electronico: $email \n";
    $contenido.="Telefono: $phone \n";
    $contenido.="Dirección: $adress \n";
    $contenido.="Provincia: $provincia \n";
    $contenido.="Distrito: $distrito \n";
    $contenido.="Observaciones: $texto"; 

    $header="From: Libro de Reclamaciones ALGPeru";

    $mail=mail($destinatario,$asunto,$contenido,$header);

    if($mail){
        echo "<script>alert('El correo se envió correctamente');</script>";
    } else{
        echo "<script>alert('El correo no se envió');</script>";
    }

}

?>