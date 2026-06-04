<?php
include '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = $conn->prepare("SELECT * FROM usuarios WHERE BINARY nome = ?");
    $sql->bind_param("s", $nome);
    $sql->execute();
    $resultado = $sql->get_result();
    $usuario = $resultado->fetch_assoc();

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        echo "Login realizado com sucesso!";
    } else {
        echo "Nome ou senha incorretos!";
    }
}
?>