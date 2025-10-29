<?php
require_once __DIR__ . "/../models/Livro.php";

function index(){
    $livros = listarLivros();
    require __DIR__ . "/../views/livros_listar.php";
}

function deletar(){
    if (!empyt($_GET['id'])) {
        excluirLivro($id);
    }
    header("Location: index.php");
    exit();
}