<?php

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With'); 
    header('Content-Type: application/json; charset=utf-8');  

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