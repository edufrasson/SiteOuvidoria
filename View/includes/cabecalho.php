<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler text-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="./../../View/img/logo.png" alt="mdo" width="52" height="52" class="d-inline-block align-text-top">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/reclamacoes">Reclamações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/cidadao/listar">Cidadãos</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-decoration-none text-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Funcionário
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="nav-link text-dark" href="/funcionario/listar">Ver Funcionários</a></li>
                            <li><a class="nav-link text-dark" href="/funcionario/form">Cadastrar Funcionários</a></li>
                        </ul>
                    </div>
                </li>                       
            </ul>
            
        </div>
        <!-- Dropdown do User -->
        <div class="navbar-brand dropdown text-end p-2 ">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="iconify" data-icon="bx:user" data-width="32" data-height="32"></span>
               <?= $_SESSION['usuario']->nome ?>
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="/meu_perfil">Perfil</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/logout?sair=true">Sair</a></li>
            </ul>
        </div>
    </div>
</nav>