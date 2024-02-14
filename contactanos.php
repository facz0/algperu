<?php
if(isset($_POST["submit-form"])) { 
    $nombres=$_POST["username"];
    $email=$_POST["email"];
    $company=$_POST["company"];
    $phone=$_POST["phone"];
    $message=$_POST["message"];

    $destinatario = "cesarti2022@gmail.com";
    $asunto = "Mensaje from: CONTACTANOS";

    $contenido="Nombres y Apellidos: $nombres \n";
    $contenido.="Correo Electronico: $email \n";
    $contenido.="Compañía: $company \n";
    $contenido.="Telefono: $phone \n";
    $contenido.="Mensaje: $message";

    $mail=mail($destinatario,$asunto,$contenido);

    if($mail){
        echo "<script>alert('El correo se envió correctamente')</script>";
    } else {
        echo  "<script>alert('No se pudo enviar el correo, intentelo más tarde')</script>";
    }
}

?>