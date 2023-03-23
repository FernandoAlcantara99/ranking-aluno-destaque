<?php
// Configurações de conexão com o banco de dados
$host = "localhost";
$user = "usuario";
$pass = "senha";
$dbname = "nome_do_banco";

// Conexão com o banco de dados
$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
	die("Conexão falhou: " . mysqli_connect_error());
}
?>
