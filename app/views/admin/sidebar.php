<head>
    <link rel="stylesheet" href="../../../public/css/sidebar.css">
    <link rel="stylesheet" href="../../../public/css/reset.css">
</head>
<div class="sidebar">
    <button class="sidebar-button" id="sidebar-button" onclick="openSidebar()"><i class="fa-solid fa-bars "></i><i class="fa-solid fa-gear "></i></button>
    <nav class="sidebar-links sidebar-links-active" id="sidebar-links">
        <a href="/admin" class="sidebar-link">
            <div class="sidebar-link-icon"><i class="fa-solid fa-sliders"></i></div>
            <div class="sidebar-link-content sidebar-link-content-active">Dashboard</div>
        </a>

        <a href="/admin/posts" class="sidebar-link">
            <div class="sidebar-link-icon"><i class="fa-solid fa-rectangle-list"></i></div>
            <div class="sidebar-link-content sidebar-link-content-active">Lista de Posts</div>
        </a>

        <a href="/admin/users" class="sidebar-link">
            <div class="sidebar-link-icon"><i class="fa-solid fa-users"></i></div>
            <div class="sidebar-link-content sidebar-link-content-active">Lista de Usuários</div>
        </a>

    </nav>
</div>

<script src="https://kit.fontawesome.com/5d993ad3fb.js" crossorigin="anonymous"></script>
<script src="../../../public/js/sidebar.js"></script>