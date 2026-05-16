<?php

include("conexao.php");

$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO academias
(nome, cnpj, telefone, email, senha)
VALUES
('$nome', '$cnpj', '$telefone', '$email', '$senhaCriptografada')";

if ($conexao->query($sql) === TRUE) {

    header("Location: academiaHome.html");
    exit();

} else {

    echo "Erro: " . $conexao->error;

}

$conexao->close();

?>