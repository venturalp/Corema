<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

//send email
    if (mail("venturalp@gmail.com", "Testando envio de email" .$email, $message))
        echo "Email enviado com sucesso!";
    else
        echo "Erro ao enviar email, tente novamente.";
}
?>
