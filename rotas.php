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

    case "/funcionario/alterar-senha":
        FuncionarioController::alterarSenha();
    break;

    // Rotas para reclamações
    case "/reclamacoes":
        ReclamacaoController::index();
    break;

    case "/responder":
        ReclamacaoController::responder();
    break; 
    
    // Rotas para resposta
    case "/resposta/save":
        RespostaController::save();
    break;
    
    case "/ver_resposta":
        RespostaController::ver($_GET['id']);
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

    case "/esquecia-a-senha":
        LoginController::esqueciSenha();
    break;

    case "/enviar-nova-senha":
        LoginController::enviarNovaSenha();
    break;

    // Home
    case '/home':
        HomeController::ViewHome();
    break;

    // Outros
    case '/estatisticas':
        EstatisticaController::index();
    break;

    case '/historico':
       ReclamacaoController::historico();
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