<?php
$caminhoBanco = __DIR__ . '/banco/loja.db';

// Verifica se o ficheiro da base de dados realmente existe
if (!file_exists($caminhoBanco)) {
    die("Banco nao encontrado em banco/loja.db. Confira o nome do arquivo e a pasta.");
}

try {
    // Cria a conexão PDO com o SQLite
    $pdo = new PDO("sqlite:" . $caminhoBanco);
    
    // Configura o PDO para lançar exceções em erros e retornar arrays associativos
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $erro) {
    die("Erro na conexão: " . $erro->getMessage());
}
?>