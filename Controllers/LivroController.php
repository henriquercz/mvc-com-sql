<?php
require_once __DIR__ . "/../models/Livro.php";

function index(){
    $livros = listarLivros();
    require __DIR__ . "/../views/livros_listar.php";
}