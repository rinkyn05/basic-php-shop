<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop Demo - Rinkyn Codes</title>
    <!-- Enlace a Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Estilos básicos para el menú */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #333;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .logo img {
            width: 175px;
        }

        .menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .menu>li {
            margin-left: 20px;
            position: relative;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            display: block;
        }

        .menu a:hover,
        .menu a.active {
            background-color: #555;
            border-radius: 4px;
        }

        /* Submenú */
        .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #444;
            list-style: none;
            padding: 0;
            margin: 0;
            min-width: 150px;
        }

        .submenu li {
            width: 100%;
        }

        .submenu a {
            padding: 10px 15px;
            color: white;
        }

        .submenu a:hover {
            background-color: #555;
        }

        .menu>li:hover .submenu {
            display: block;
        }

        /* Iconos */
        .icon {
            margin-left: 25px;
            font-size: 20px;
        }

        /* Estilos para el icono de "hamburguesa" */
        .menu-toggle {
            display: none;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .menu {
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: -100%;
                width: 100%;
                background-color: #333;
                transition: left 0.3s ease;
            }

            .menu.active {
                left: 0;
            }

            .menu>li {
                margin: 0;
            }

            .menu a {
                padding: 15px;
                border-top: 1px solid #444;
            }

            .menu-toggle {
                display: block;
            }

            /* Mostrar iconos de búsqueda y carrito en pantallas pequeñas */
            .header .icons {
                display: flex;
                align-items: center;
            }

            .header .icons a {
                color: white;
                margin-left: 25px;
                font-size: 20px;
            }

            /* Estilos para la barra superior en móviles */
            .top-bar {
                display: none;
            }
        }

        /* Estilos para la barra superior */
        .top-bar {
            background-color: #444;
            padding: 5px 20px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .top-bar a {
            color: white;
            margin-left: 15px;
            font-size: 20px;
            text-decoration: none;
        }

        .top-bar a:hover {
            color: #ddd;
        }
    </style>
</head>

<body>
    <!-- Barra superior con iconos de redes sociales -->
    <div class="top-bar">
        <a href="mailto:contacto@rinkyn2005@gmail.com"><i class="fa fa-envelope"></i></a>
        <a href="https://www.facebook.com/rinkyn05" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://api.whatsapp.com/send?phone=18296801061" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <a href="https://github.com/rinkyn05" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://api.whatsapp.com/send?phone=8498835985" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>
    <div class="header">
        <!-- Icono de "hamburguesa" para mostrar/ocultar el menú en pantallas pequeñas -->
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo BASE_URL; ?>/index.php"><img src="<?php echo BASE_URL; ?>/multimedia/Logo.png" alt="Logo"></a>
        </div>
        <!-- Menú principal -->
        <ul class="menu" id="menu">
            <li><a href="<?php echo BASE_URL; ?>/index.php" <?php if ($active_page == 'inicio') echo 'class="active"'; ?>>Inicio</a></li>
            <li><a href="<?php echo BASE_URL; ?>/productos/productos.php" <?php if ($active_page == 'productos') echo 'class="active"'; ?>>Productos</a></li>
            <li>
                <a href="<?php echo BASE_URL; ?>/blog/blog.php" <?php if ($active_page == 'blog') echo 'class="active"'; ?>>Blog</a>
                <ul class="submenu">
                    <li><a href="#">Submenú 1</a></li>
                    <li><a href="#">Submenú 2</a></li>
                </ul>
            </li>
            <li><a href="<?php echo BASE_URL; ?>/paginas/categorias.php" <?php if ($active_page == 'categorias') echo 'class="active"'; ?>>Categorias</a></li>
            <li><a href="<?php echo BASE_URL; ?>/paginas/nosotros.php" <?php if ($active_page == 'nosotros') echo 'class="active"'; ?>>Nosotros</a></li>
            <li><a href="<?php echo BASE_URL; ?>/paginas/contacto.php" <?php if ($active_page == 'contacto') echo 'class="active"'; ?>>Contacto</a></li>
        </ul>
        <!-- Iconos de búsqueda y carrito -->
        <div class="icons">
            <a href="#"><i class="fa fa-search icon"></i></a>
            <a href="#"><i class="fa fa-shopping-cart icon"></i></a>
        </div>
    </div>
    <div class="content">
        <!-- Contenido de la página -->
    </div>
    <script>
        // Script para mostrar/ocultar el menú en pantallas pequeñas
        const menuToggle = document.getElementById('mobile-menu');
        const menu = document.getElementById('menu');
        menuToggle.addEventListener('click', function() {
            menu.classList.toggle('active');
        });
    </script>