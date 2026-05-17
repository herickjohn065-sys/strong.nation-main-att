<?php

<<<<<<< HEAD
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['Nome'];
    $cpf = $_POST['CPF'];
    $telefone = $_POST['Telefone'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
  

    if ($senha === $confirmar) {

        header("Location: clienteHome.html");
        exit();
=======
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
>>>>>>> f31f587b8a6e32413276fce8fed4eafc35fc8eef

    } else {

        echo "Senhas não conferem!";

<<<<<<< HEAD
    }
}
=======
} else {

    echo "Erro: " . $conexao->error;

}

$conexao->close();

>>>>>>> f31f587b8a6e32413276fce8fed4eafc35fc8eef
?>