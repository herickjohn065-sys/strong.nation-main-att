<?php

include("conexao.php");

<<<<<<< HEAD
    $nome = $_POST['Nome'];
    $cpf = $_POST['CNPJ'];
    $telefone = $_POST['Telefone'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
   

    if ($senha === $confirmar) {
=======
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
>>>>>>> f31f587b8a6e32413276fce8fed4eafc35fc8eef

        header("Location: academiaHome.html");
        exit();

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