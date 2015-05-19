<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to      = 'venturalp@gmail.com';
    $subject = 'Contato - Corema';
    $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n";


//send email
    if (mail($to, $subject, $message . "\nUsuário: " . $name , &headers))
        echo "Email enviado com sucesso!";
    else
        echo "Erro ao enviar email, tente novamente.";
}
?>
