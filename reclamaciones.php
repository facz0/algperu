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
    
    $destinatario="cesarti2022@gmail.com";
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