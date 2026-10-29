<?php
// Exibe os erros PHP caso algo falhe
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexao.php';

echo "<h1>Conexão realizada com sucesso!</h1>";
?>