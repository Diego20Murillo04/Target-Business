<?php


$name = $_POST["fullname"];

$email = $_POST["email"];

$subjet = $_POST["subject"];

$phone = $_POST["number"];

$message = $_POST["message"];

$para = "servicioalcliente.digitalmarket@gmail.com";

        $cabeceras  = "MIME-Version: 1.0\r\n";
        $cabeceras .= 'To: target bussines <'.$para.">\r\n";
        $cabeceras .= 'From: ' .$email. "\r\n";
        $cabeceras .= 'Reply-To: ' .$email. "\r\n";
        $cabeceras .= 'Content-type: text/html; charset= utf-8';
        
$mensaje =$name. "<br>" .$email. "<br>" .$phone. "<br>" .$message;
        
if (mail($para, $subjet, $mensaje, $cabeceras)){
    echo "<script>alert('El mensaje ha sido enviado.');
    location.href='index.html';
    </script>";
    
} else {
    echo "<script>alert('El mensaje no se pudo enviar.);
    location.href='index.html';
    </script>";
}


?>