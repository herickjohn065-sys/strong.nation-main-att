<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar = $_POST['confirmar_senha'];
    $pass=$senha;
$md5=md5($pass);
$hash = password_hash($pass, PASSWORD_DEFAULT);
echo "<hr>";
echo "Senha: $senha";
echo "<br>Pass: $pass";
echo "<br>MD5: $md5";
echo "<br>hash: $hash";
    
    if ($senha === $confirmar) {
    
        header('Location: clienteHome.html');
        exit();
    } else {
        echo "Senhas não conferem!";
    }
}
?>