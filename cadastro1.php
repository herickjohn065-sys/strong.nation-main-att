<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senhacriptografada = md5($senha);

    header("Location: clienteHome.html");
    exit();

    }
    
    else {
        echo "coloque uma senha";
        }
    
?>