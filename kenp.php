<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLATAFORMAS TECNOLOGICAS</title>
    <!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLATAFORMAS TECNOLOGICAS</title>
    <style>
        /* Variables para los temas */
        :root[data-theme="light"] {
            --bg-color: #ffffff;
            --text-color: #333333;
            --nav-bg: #333333;
            --nav-text: #ffffff;
            --submenu-bg: #444444;
            --hover-color: #ffd700;
            --border-color: #ffd700;
            --section-bg: #ffffff;
            --footer-bg: #333333;
            --footer-text: #ffffff;
            --card-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        :root[data-theme="dark"] {
            --bg-color: #1a1a1a;
            --text-color: #ffffff;
            --nav-bg: #2d2d2d;
            --nav-text: #ffffff;
            --submenu-bg: #3d3d3d;
            --hover-color: #ffd700;
            --border-color: #ffd700;
            --section-bg: #2d2d2d;
            --footer-bg: #2d2d2d;
            --footer-text: #ffffff;
            --card-shadow: 0 2px 4px rgba(255,255,255,0.1);
        }

        /* Estilos generales actualizados */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--bg-color);
            transition: all 0.3s ease;
        }

        /* Botón de cambio de tema */
        .theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            padding: 10px 20px;
            border-radius: 20px;
            border: 2px solid var(--border-color);
            background-color: var(--nav-bg);
            color: var(--nav-text);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            background-color: var(--hover-color);
            color: var(--text-color);
        }

        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }

        /* Banner actualizado */
       
  .banner {
    background-image: url('imagenes/aaaa.jpg');
    background-size: cover;
    background-position: center;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
    position: relative;
  }

  .banner::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.3);
    z-index: 1;
  }

  .banner h1 {
    font-size: 3em;
    color: white;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    position: relative;
    z-index: 2;
  }

  /* Media queries for responsiveness */
  @media screen and (max-width: 768px) {
    .banner {
      height: 200px; /* Reduce height for smaller screens */
    }

    .banner h1 {
      font-size: 2em; /* Reduce font size for smaller screens */
    }
  }

  @media screen and (max-width: 480px) {
    .banner {
      height: 150px; /* Further reduce height for mobile screens */
    }

    .banner h1 {
      font-size: 1.5em; /* Further reduce font size for mobile screens */
    }
  }
`
        /* Navegación actualizada */
        nav {
            background-color: var(--nav-bg);
            padding: 1em 0;
            transition: all 0.3s ease;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: none;
            flex-direction: column;
            align-items: start;
        }

        nav ul.show {
            display: flex;
        }

        nav ul li a {
            color: var(--nav-text);
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: bold;
            padding: 10px 15px;
            display: block;
        }

        nav ul li a:hover {
            color: var(--hover-color);
        }

        .submenu {
            background-color: var(--submenu-bg);
            transition: all 0.3s ease;
        }

        /* Contenido principal actualizado */
        main {
            padding: 2em 0;
        }

        section {
            background-color: var(--section-bg);
            padding: 20px;
            border-radius: 8px;
            box-shadow: var(--card-shadow);
            margin-bottom: 2em;
            transition: all 0.3s ease;
        }

        h2 {
            color: var(--text-color);
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 0.5em;
        }

        /* Footer actualizado */
        footer {
            background-color: var(--footer-bg);
            color: var(--footer-text);
            text-align: center;
            padding: 1em 0;
            margin-top: 2em;
            transition: all 0.3s ease;
        }

        footer a {
            color: var(--hover-color);
            text-decoration: none;
        }

        /* Media queries */
        @media screen and (max-width: 768px) {
            .container {
                width: 95%;
            }
            .banner h1 {
                font-size: 2em;
            }
            .theme-toggle {
                top: 10px;
                right: 10px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Botón de cambio de tema -->
    <button class="theme-toggle" onclick="toggleTheme()">
        <span id="theme-icon">🌙</span> 
        <span id="theme-text">Modo Oscuro</span>
    </button>

    <?php
    $menuItems = [
        ['name' => 'Inicio', 'href' => '#inicio'],
        [
            'name' => 'Primer Corte',
            'href' => '#',  // Cambiado a # para que solo despliegue el menú
            'submenu' => [
                ['name' => 'Sistemas Operativos', 'href' => 'sistemas_operativos.php'],
                ['name' => 'Gestión de Procesos', 'href' => 'gestion_procesos.php'],
                ['name' => 'Planificación y Sincronización', 'href' => 'planificacion_sincronizacion.php'],
                ['name' => 'Procesos en Sistemas Operativos', 'href' => 'procesos.php'],
                ['name' => 'Hilos', 'href' => 'hilos.php'],
            ],
        ],
        [
            'name' => 'Segundo Corte',
            'href' => '#',  // Cambiado a # para que solo despliegue el menú
            'submenu' => [
                ['name' => 'Gestión de Memoria', 'href' => 'gestion_memoria.php'],
                ['name' => 'Sistemas RAID', 'href' => 'sistemas_raid.php'],
                ['name' => 'Tópicos Avanzados en Sistemas Operativos', 'href' => 'topicos_avanzados.php'],
            ],
        ],
        ['name' => 'Contacto', 'href' => '#contacto'],
    ];
    ?>
    <header>
        <div class="banner">
            <h1></h1>
        </div>
        <nav>
            <div class="container">
                <div class="menu-icon" onclick="toggleMenu()" aria-label="Abrir menú">&#9776;</div>
                <ul id="menu">
                    <?php foreach ($menuItems as $item): ?>
                        <li>
                            <a href="<?php echo $item['href']; ?>" <?php echo isset($item['submenu']) ? 'class="has-submenu"' : ''; ?>>
                                <?php echo $item['name']; ?>
                            </a>
                            <?php if (isset($item['submenu'])): ?>
                                <div class="submenu">
                                    <?php foreach ($item['submenu'] as $subItem): ?>
                                        <a href="<?php echo $subItem['href']; ?>" class="submenu-link">
                                            <?php echo $subItem['name']; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <section id="inicio">
                <h2>Bienvenido a nuestra página de inicio</h2>
                <p>Esta es la página principal de nuestro sitio web sobre Sistemas Operativos.</p>
            </section>
            <section id="contacto">
                <h2>Contacto</h2>
                <p>Póngase en contacto con nosotros para más información.</p>
            </section>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Mi Sitio Web. Todos los derechos reservados.</p>
            <p>Contacto: <a href="mailto:info@misitio.com">kevi.kc7@gmail.com</a> | Teléfono: (315) 633-5331</p>
            <p>Síguenos en: 
                <a href="https://www.facebook.com/pedro.nieto.562" aria-label="Facebook">Facebook</a> | 
                <a href="#" aria-label="Twitter">Twitter</a> | 
                <a href="https://www.instagram.com/kevincruz.21/" aria-label="Instagram">Instagram</a>
            </p>
        </div>
    </footer>

    <script>
        // Función para cambiar el tema
        function toggleTheme() {
            const html = document.documentElement;
            const themeIcon = document.getElementById('theme-icon');
            const themeText = document.getElementById('theme-text');
            
            if (html.getAttribute('data-theme') === 'light') {
                html.setAttribute('data-theme', 'dark');
                themeIcon.textContent = '☀';
                themeText.textContent = 'Modo Claro';
                localStorage.setItem('theme', 'dark');
            } else {
                html.setAttribute('data-theme', 'light');
                themeIcon.textContent = '🌙';
                themeText.textContent = 'Modo Oscuro';
                localStorage.setItem('theme', 'light');
            }
        }

        // Cargar el tema guardado
        document.addEventListener('DOMContentLoaded', function() {
            const savedTheme = localStorage.getItem('theme') || 'light';
            const themeIcon = document.getElementById('theme-icon');
            const themeText = document.getElementById('theme-text');
            
            document.documentElement.setAttribute('data-theme', savedTheme);
            if (savedTheme === 'dark') {
                themeIcon.textContent = '☀';
                themeText.textContent = 'Modo Claro';
            }
        });

        // Tu código JavaScript existente para el menú
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.classList.toggle("show");
        }

        document.addEventListener('DOMContentLoaded', function() {
            var menuItems = document.querySelectorAll('#menu > li');
            
            menuItems.forEach(function(item) {
                var mainLink = item.querySelector('a.has-submenu');
                var submenuLinks = item.querySelectorAll('.submenu-link');
                
                if (mainLink) {
                    mainLink.addEventListener('click', function(e) {
                        e.preventDefault();
                        item.classList.toggle('active');
                    });
                }

                submenuLinks.forEach(function(link) {
                    link.addEventListener('click', function() {
                        window.location.href = this.href;
                    });
                });
            });
        });
    </script>
</body>
</html>