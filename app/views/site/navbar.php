<?php
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/nav-footer.css">
    <link rel="stylesheet" href="../../../public/css/reset.css">
</head>

<body>
    <header>
        <nav class="navbar" id="navbar">
            <div class="navbar-col-left">
                <div class="navbar-menu">
                    <button class="navbar-menu-button" id="navbar-menu-button" onclick="openMenu()">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
                <div class="navbar-links" id="navbar-links">
                    <a href="/" class="navbar-link">
                        <div class="navbar-link-icon"></div>
                        <div class="navbar-link-text">Homepage</div>
                    </a>

                    <a href="/postagens" class="navbar-link">
                        <div class="navbar-link-icon"></div>
                        <div class="navbar-link-text">Todos os Posts</div>
                    </a>

                </div>
            </div>

            <a href="/" id="navbar-logo">
                <div class="navbar-logo-shadow"></div>
            </a>

            <div class="navbar-col-right">
                <a href="<?= isset($_SESSION['logado']) ? '/admin' : '/login'; ?>" class="navbar-link navbar-button">
                    <i class="fa-solid fa-<?= isset($_SESSION['logado']) ? 'table-columns' : 'user'; ?>"></i>
                    <div class="navbar-link-text"><?= isset($_SESSION['logado']) ? 'Dashboard' : 'Minha Conta'; ?></div>
                </a>
            </div>
        </nav>
    </header>
    <script src="../../../public/js/navbar.js"></script>
    <script src="https://kit.fontawesome.com/5d993ad3fb.js" crossorigin="anonymous"></script>