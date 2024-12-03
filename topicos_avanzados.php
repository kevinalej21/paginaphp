<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLATAFORMAS TECNOLÓGICAS</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <!-- Botón de cambio de tema -->
    <button class="theme-toggle" onclick="toggleTheme()">
        <span id="theme-icon">🌙</span> 
        <span id="theme-text"></span>
    </button>

    <?php
    $menuItems = [
        ['name' => 'Inicio', 'href' => 'kenp.php'],
        [
            'name' => 'Primer Corte',
            'href' => '#',
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
            'href' => '#',
            'submenu' => [
                ['name' => 'Gestión de Memoria', 'href' => 'gestion_memoria.php'],
                ['name' => 'Sistemas RAID', 'href' => 'sistemas_raid.php'],
                ['name' => 'Tópicos Avanzados en Sistemas Operativos', 'href' => 'topicos_avanzados.php'],
            ],
        ],
        
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

    <!-- Contenido de la página -->
    <main>
        <div class="container">
            <section id="concepto">
                <h2>Concepto General</h2>
                <p>
                    Los Tópicos avanzados en sistemas operativos son áreas especializadas que exploran tecnologías y conceptos complejos utilizados para optimizar el rendimiento, 
                    la eficiencia y la escalabilidad de los sistemas informáticos. Incluyen temas como máquinas virtuales, sistemas distribuidos y sistemas clustered.
                </p>
            </section>
            
            <section id="maquinas-virtuales">
                <h2>Máquinas Virtuales</h2>
                <ul>
                    <li><strong>Definición:</strong> Entorno de software que emula un sistema informático.</li>
                    <li><strong>Hipervisor:</strong> Software que gestiona máquinas virtuales:
                        <ul>
                            <li>Tipo 1 (Bare Metal): Corre directamente en hardware.</li>
                            <li>Tipo 2 (Hosted): Funciona sobre un sistema operativo host.</li>
                        </ul>
                    </li>
                    <li><strong>Beneficios:</strong> Aislamiento, escalabilidad y optimización de recursos.</li>
                </ul>

                <div style="text-align: right;">
                <img src="imagenes/maquina.png" alt="maquina" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>
            
            <section id="sistemas-distribuidos">
                <h2>Sistemas Distribuidos</h2>
                <ul>
                    <li><strong>Definición:</strong> Sistema compuesto por nodos que trabajan juntos como una única entidad.</li>
                    <li><strong>Características:</strong> Transparencia, escalabilidad y tolerancia a fallos.</li>
                    <li><strong>Ejemplos:</strong> WWW, bases de datos distribuidas, sistemas de archivos distribuidos.</li>
                </ul>

                <div style="text-align: right;">
                <img src="imagenes/distri.png" alt="disco" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>
            
            <section id="sistemas-clustered">
                <h2>Sistemas Clustered</h2>
                <ul>
                    <li><strong>Definición:</strong> Grupo de computadoras que trabajan juntas como un único sistema.</li>
                    <li><strong>Tipos:</strong> Alta disponibilidad, balanceo de carga y computación de alto rendimiento.</li>
                    <li><strong>Beneficios:</strong> Redundancia, escalabilidad horizontal y balanceo de carga.</li>
                </ul>

                <div style="text-align: right;">
                <img src="imagenes/clusteres.png" alt="datos" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>
        </div>
    </main>

<!-- footer -->

<footer>
        <div class="container.footer">
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
                themeText.textContent = '';
                localStorage.setItem('theme', 'dark');
            } else {
                html.setAttribute('data-theme', 'light');
                themeIcon.textContent = '🌙';
                themeText.textContent = '';
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
                themeText.textContent = '';
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


<button id="scrollToTopBtn" aria-label="Volver arriba">
        <img src="imagenes/subir.png " alt=""style="">
    </button>

<script>
        // Obtener el botón
        var scrollToTopBtn = document.getElementById("scrollToTopBtn");

        // Cuando el usuario se desplaza 20px desde la parte superior del documento, mostrar el botón
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        }

        // Cuando el usuario hace clic en el botón, desplazarse hasta la parte superior del documento
        scrollToTopBtn.onclick = function() {
            document.body.scrollTop = 0; // Para Safari
            document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
        }
    </script>
    
</body>
</html>