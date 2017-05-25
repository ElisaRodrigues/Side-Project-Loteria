<?php

define('MEGASENA',1);
define('QUINA',2);
define('LOTOMANIA',3);
define('LOTOFACIL',4);

$nome = $_GET['nome'];
$jogoSelecionado = $_GET['jogoSelecionado'];

function regrasDoJogo($jogoSelecionado){

    $regras = [
            'mega'   =>['min_dezenas'=>6,  'max_dezenas'=>15, 'possibilidades'=>60],
            'quina'  =>['min_dezenas'=>5,  'max_dezenas'=>15, 'possibilidades'=>80],
            'mania'  =>['min_dezenas'=>50, 'max_dezenas'=>50, 'possibilidades'=>100],
            'facil'  =>['min_dezenas'=>15, 'max_dezenas'=>18, 'possibilidades'=>25]
    ];
    return $regras;
}

switch ($jogoSelecionado){
    case MEGASENA:
        $regras = regrasDoJogo(MEGASENA);
        print_r($regras);
        break;

    case QUINA:
        $regras = regrasDoJogo(QUINA);
        print_r($regras);
        break;

    case LOTOMANIA:
        $regras = regrasDoJogo(LOTOMANIA);
        print_r($regras);
        break;

    case LOTOFACIL:
        $regras = regrasDoJogo(LOTOFACIL);
        print_r($regras);
        break;

    default:
        echo "opção invalida";
        break;
}

    //TUDO PRONT! INCLUIR A TELA DE APOSTAS
    require 'tela_apostas.html';
