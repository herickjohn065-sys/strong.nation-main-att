<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['Nome'];
    $cpf = $_POST['CNPJ'];
    $telefone = $_POST['Telefone'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
   

    if ($senha === $confirmar) {

        header("Location: academiaHome.html");
        exit();

    } else {

        echo "Senhas não conferem!";

    }
}
?>