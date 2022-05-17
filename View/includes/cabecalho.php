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
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/reclamacoes">Reclamações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Suporte Técnico</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/funcionario/listar">Ver Funcionários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/funcionario/form">Cadastrar Funcionários</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">                
            </form>
        </div>
        <!-- Dropdown do User -->
        <div class="navbar-brand dropdown text-end p-2 ">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
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