<?php
$conn = new mysqli("localhost", "root", "", "academia_db");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Criptografa a senha antes de salvar
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Usando prepared statement para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO clientes (nome, cpf, telefone, email, senha) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome, $cpf, $telefone, $email, $senhaHash);

    if ($stmt->execute()) {
        // Cadastro feito com sucesso → redireciona para login
        header("Location: clientelogin.html");
        exit;
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
