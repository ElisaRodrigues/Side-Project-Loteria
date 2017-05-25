<?php

define('MEGASENA',1);
define('QUINA',2);
define('LOTOMANIA',3);
define('LOTOFACIL',4);

$nome = $_GET['nome'];
$jogoSelecionado = $_GET['jogo-selecionado'];

switch ($jogoSelecionado){
    case MEGASENA:
        echo "carregar regras mega";
        break;

    case QUINA:
        echo "carregar regras quina";
        break;

    case LOTOMANIA:
        echo "carregar regras lotomania";
        break;

    case LOTOFACIL:
        echo "carregar regras lotofacil";
        break;

    default:
        echo "opção invalida";
        break;
}
