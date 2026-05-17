<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['Nome'];
    $cpf = $_POST['CPF'];
    $telefone = $_POST['Telefone'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
  

    if ($senha === $confirmar) {

        header("Location: clienteHome.html");
        exit();

    } else {

        echo "Senhas não conferem!";

    }
}
?>