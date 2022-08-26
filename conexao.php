<?php

    $banco = 'crud-angular-php';
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';

    try {
        
        $pdo = new PDO("mysql:dbname=$banco;host=$host", "$usuario", "$senha");

    } catch (Exception $e) {
        
        echo "Erro ao conectar com o banco de dados: ".$e->getMessage();

    }

?>