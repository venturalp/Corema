<?php
if($_POST){
    $to = 'venturalp@gmail.com';

    if ($_POST['op'] == "contato")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = "Nome: " . $name . "\n\nMensagem: " . $_POST['message'];
        $subject = 'Contato - Corema';
        $headers = 'From: Guilherme<' . $email . ">\r\n" . 'Reply-To: ' . $email . "\r\n";


        //send email
        if (mail($to, $subject, $message, $headers))
            echo "Email enviado com sucesso!";
        else
            echo "Erro ao enviar email, tente novamente.";
    }

    if ($_POST['op'] == "orcamento")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = "Nome: " . $name . "\n\nMensagem: " . $_POST['message'];
        $subject = "Orçamento - " . $_POST['subjetc'];
        $headers = 'From: Guilherme<' . $email . ">\r\n" . 'Reply-To: ' . $email . "\r\n";


        //send email
        if (mail($to, $subject, $message, $headers))
            echo "Email enviado com sucesso!";
        else
            echo "Erro ao enviar email, tente novamente.";
    }

    if ($_POST['op'] == "pesquisa-marca")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $marca = $_POST['marca'];
        $ramo = $_POST['ramo'];
        $message = "Nome: " . $name . "\nMarca: " . $marca . "\nRamo: " . $ramo;
        $subject = 'Pesquise sua marca - Corema';
        $headers = 'From: Guilherme<' . $email . ">\r\n" . 'Reply-To: ' . $email . "\r\n";


        //send email
        if (mail($to, $subject, $message, $headers))
            echo "Email enviado com sucesso!";
        else
            echo "Erro ao enviar email, tente novamente.";
    }

//    if ($_POST['op'] == "contato")
//    {
//    }
}
else{
    return "erro";
}
?>
