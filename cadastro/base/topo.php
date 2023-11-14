<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="index.php">Cadastrinho</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="?conteudo=cidade_listar">Cidade</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?conteudo=cliente_listar">Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?conteudo=produto_listar">Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?conteudo=usuario_listar">Usuário</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['login']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="sair.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>