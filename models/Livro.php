<?php
require_once __DIR__ . "/../config/database.php";

function listarLivros(){
    $pdo = getConnection();
    $sql = "SELECT * FROM livros";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function adicionarLivro($titulo, $autor){
    $pdo = getConnection();
    $sql = "INSERT INTO livros (titulo, autor) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$titulo, $autor]);
}

function buscarLivro($id){
    $pdo = getConnection();
    $sql = "SELECT * FROM livros WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function atualizarLivro($id, $titulo, $autor){
    $pdo = getConnection();
    $sql = "UPDATE livros SET titulo = ?, autor = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$titulo, $autor, $id]);
}

function excluirLivro($id){
    $pdo = getConnection();
    $sql = "DELETE FROM livros WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}