<?php
$conn = new mysqli("localhost", "root", "", "academia_db");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO academia (nome, cnpj, telefone, email, senha) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome, $cnpj, $telefone, $email, $senhaHash);

    if ($stmt->execute()) {
        header("Location: academialogin.html");
        exit;
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
