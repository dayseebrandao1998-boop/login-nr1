<?php
// Arquivo: banco.php

// O caminho agora aponta para a pasta do volume que você configurou no Coolify.
$caminhoBanco = '/var/www/html/database/usuarios.sqlite';

try {
    // Faz a conexão usando o caminho absoluto
    $db = new PDO('sqlite:' . $caminhoBanco);
    
    // Configura o PDO para sempre lançar exceções em caso de erro
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Se a conexão falhar, exibe o erro em JSON (pois pode ser chamado por APIs)
    echo json_encode(["sucesso" => false, "erro" => "Erro na conexão com o banco: " . $e->getMessage()]);
    exit;
}
?>
