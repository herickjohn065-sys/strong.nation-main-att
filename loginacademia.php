<?php
$conn = new mysqli("localhost", "root", "", "academia_db");
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM academia WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $cliente = $result->fetch_assoc();

    if (password_verify($senha, $cliente['senha'])) {

        header("Location: academiaHome.html");
        exit;
    } else {
        echo "Senha incorreta!";
    }
} else {
    echo "Usuário não encontrado!";
}

$conn->close();
?>