<?php

switch($uri_parse){

    // Entidade Funcionário
    case "/funcionario/form":
        FuncionarioController::formFuncionario();
    break;
    
    case "/funcionario/listar":
        FuncionarioController::listarFuncionario();
    break;

    case "/funcionario/salvar":
        FuncionarioController::salvarFuncionario();
    break;

    case "/funcionario/delete":
        FuncionarioController::deleteFuncionario();
    break;

    // Outros
    case '/home':
        include 'View/modules/Home/Home.php';
    break;

    case '/login':
        include 'View/modules/Login/Login.php';
    break;

    case '/estatisticas':
        include 'View/modules/Estatisticas/Estatisticas.php';
    break;

    case '/historico':
        include 'View/modules/Historico/Historico.php';
    break;
    case '/meu_perfil':
        include 'View/modules/MeuPerfil/MeuPerfil.php';
    break;

    case '/responder/denuncia':
        include 'View/modules/Respostas/ResponderDenuncia.php';
    break;

    case '/responder/sugestao':
        include 'View/modules/Respostas/ResponderSugestao.php';
    break;

    default:
        header("Location: /home");
    break;
    }