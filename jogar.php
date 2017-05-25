<?php

define('MEGASENA',1);
define('QUINA',2);
define('LOTOMANIA',3);
define('LOTOFACIL',4);

$nome = $_GET['nome'];
$jogoSelecionado = $_GET['jogoSelecionado'];

function regrasDoJogo($jogoSelecionado){

    $regras = [
            'mega'      =>['min_dezenas'=>6, 'max_dezenas'=>15,'possibilidades'=>60],
            'quina'     =>['min_dezenas'=>5, 'max_dezenas'=>15,'possibilidades'=>80],
            'mania'     =>['min_dezenas'=>50, 'max_dezenas'=>50,'possibilidades'=>100],
            'facil'     =>['min_dezenas'=>15, 'max_dezenas'=>18,'possibilidades'=>25]
    ];
    return $regras['mega'];
}

switch ($jogoSelecionado){
    case MEGASENA:
        $regras = regrasDoJogo(MEGASENA);
        print_r($regras);
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
