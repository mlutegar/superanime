<link rel="stylesheet" href="css/style.css">

<header>
    <img class="logo" src="img/logo.png">
    <nav class="navbar">
        <ul class="nav_links">
            <li><a href="home.php">HOME</a></li>
            <li><a href="vitrine.php">MANGAS</a></li>
            <li><a href="contato.php">CONTATO</a></li>
            <?php if(!array_key_exists('login', $_SESSION) || empty(isset($_SESSION['login']))) : ?>
                <li><a class="cta" href="login.php">LOGAR (ADMIN)</a></li>    
            <?php else: ?>   
                <li>
                    <div class="dropdown">
                        <a class="cta dropbtn" href="admin.php">ADMIN (LOGADO)
                            <i class="fa fa-caret-down"></i>
                        </a>    
                        <div class="dropdown-content">
                            <a href="admin.php">ADMIN (LOGADO)</a>
                            <a href="formulario-cadastro-manga.php">Adicionar</a>
                            <a href="listagem-de-mangas.php">Listagem</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                    </div>
                </li>   
            <?php endif; ?>
        </ul>
    </nav>

    <div>
        <form id="formSearchTitulo" class="d-flex" role="search" method="post" action="localiza-manga.php">
            <input id="searchTitulo" class="form-control me-2" size="21" name="titulo" type="search" placeholder="Procurar" aria-label="Search">
        </form>
    </div>

</header>