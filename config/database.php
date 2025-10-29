<?php

function getConnection(){
    $host = "localhost";
    $db = "biblioteca";
    $user = "root";
    $pass = "root";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e){
        die("Erro de Conexão: " . $e->getMessage());
    }
}