<?php
$host = "autorack.proxy.rlwy.net";
$usuario = "root";
$senha = "FsXXVBvaTnynQCLgEyaYhdRfZWNALQrU";
$banco = "railway";
$porta = 27459;

$conn = mysqli_connect($host, $usuario, $senha, $banco, $porta);

if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>