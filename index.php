<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


include 'Controller/JogadoresController.php';
include 'Controller/PartidasController.php';

switch($uri_parse)
{
    ## ROTAS PARA JOGADOR
    case '/jogadores':
        JogadoresController::index();
    break;

    case '/jogadores/cadastrar':
        JogadoresController::form();
    break;

    case '/jogadores/save':
        JogadoresController::save();
    break;

    case '/jogadores/delete':
        JogadoresController::delete();
    break;

    ## ROTAS PARA PARTIDAS
    case '/partidas':
        PartidasController::index();
    break;

    case '/partidas/cadastrar':
        PartidasController::form();
    break;

    case '/partidas/save':
        PartidasController::save();
    break;

    case '/partidas/delete':
        PartidasController::delete();
    break;

    default:
        echo "erro 404";
    break;
}