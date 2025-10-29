<?php

require_once __DIR__ . "/controllers/LivroController.php";

$acao = $_GET['acao'] ?? 'index';

switch($acao){
    case 'index':
        index();
        break;
    default:
        echo "Ação não encontrada!";
}