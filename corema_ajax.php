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
            echo "failed";
    }

    if ($_POST['op'] == "orcamento")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $message = "Nome: " . $name . "\nTelefone: " . $telefone. "\n\nMensagem: " . $_POST['message'];
        $subject = "Orçamento - " . $_POST['subjetc'];
        $headers = 'From: Guilherme<' . $email . ">\r\n" . 'Reply-To: ' . $email . "\r\n";


        //send email
        if (mail($to, $subject, $message, $headers))
            echo "Email enviado com sucesso!";
        else
            echo "failed";
    }

    if ($_POST['op'] == "pesquisa-marca")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $marca = $_POST['marca'];
        $ramo = $_POST['ramo'];
        $message = "Nome: " . $name . "\nTelefone: ". $telefone . "\nMarca: " . $marca . "\nRamo: " . $ramo;
        $subject = 'Pesquise sua marca - Corema';
        $headers = 'From: Guilherme<' . $email . ">\r\n" . 'Reply-To: ' . $email . "\r\n";


        //send email
        if (mail($to, $subject, $message, $headers))
            echo "Email enviado com sucesso!";
        else
            echo "failed";
    }

//    if ($_POST['op'] == "contato")
//    {
//    }
}
else{
    return "erro";
}
?>
