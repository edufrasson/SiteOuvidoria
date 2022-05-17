<?php

switch($uri_parse){

    // Entidade Funcionário
    case "/funcionario/form":
        FuncionarioController::form();
    break;
    
    case "/funcionario/listar":
        FuncionarioController::listarFuncionario();
    break;

    case "/funcionario/salvar":
        FuncionarioController::save();
    break;

    case "/funcionario/delete":
        FuncionarioController::delete();
    break;

    case '/meu_perfil':
        FuncionarioController::myAccount();
    break;

    case "/reclamacoes":
        ReclamacaoController::index();
    break;
    
    // Login
    case '/login':
        LoginController::form();
    break;

    case "/login/processa":
        LoginController::processar();
    break;

    case "/logout":
        LoginController::logout();
    break;

    // Home
    case '/home':
        HomeController::ViewHome();
    break;

    // Outros
    case '/estatisticas':
        include 'View/modules/Estatisticas/Estatisticas.php';
    break;

    case '/historico':
        include 'View/modules/Historico/Historico.php';
    break; 

    case '/responder/denuncia':
        include 'View/modules/Respostas/ResponderDenuncia.php';
    break;

    case '/responder/sugestao':
        include 'View/modules/Respostas/ResponderSugestao.php';
    break;

    default:
        header("Location: /login");
    break;
    }