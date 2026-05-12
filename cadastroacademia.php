<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['Nome'];
    $cpf = $_POST['CNPJ'];
    $telefone = $_POST['Telefone'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    $senhacriptografada = md5($senha);

    header("Location: academiaHome.html");
    exit();

    }
    
    else {
        echo "coloque uma senha";
        }
    
?>