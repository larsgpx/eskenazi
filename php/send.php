<?php 
if(isset($_POST['submit'])){
    $to = "larsgpx@gmail.com"; // this is your Email address
    // $from = $_POST['email']; // this is the sender's Email address
    $from = "no-reply@drjaimeeskenazi.com";
    $name = $_POST['name'];
    $razon = $_POST['razon'];
    $ruc = $_POST['ruc'];
    $phone = $_POST['phone'];
    $dni = $_POST['dni'];
    $subject = $name . "te ha contactado desde la web";
    $subject2 = "Copia de contacto desde web";
    $message = $name . " Escribió lo siguiente:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Correo enviado.Gracias " . $name ." , te contactaremos a la brevedad posible";    
    }
?>
