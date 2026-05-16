<?php

include("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO clientes
(nome, cpf, telefone, email, senha)
VALUES
('$nome', '$cpf', '$telefone', '$email', '$senhaCriptografada')";

if ($conexao->query($sql) === TRUE) {

    header("Location: clienteHome.html");
    exit();

} else {

    echo "Erro: " . $conexao->error;

}

$conexao->close();

?>