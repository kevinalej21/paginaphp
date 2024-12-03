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
    <link rel="stylesheet" href="estilos.css">
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
                <h2>Planificación (Scheduling)</h2>
                <p>
                La planificación es el proceso mediante el cual el sistema operativo decide qué proceso se ejecutará en la CPU en cada momento. 
                Esto se gestiona a través de diferentes niveles de planificación, que aseguran la eficiencia y la correcta distribución de los 
                recursos del sistema. Los tipos de planificación son:
                </p>  
                <ul>
                    <li><strong>Planificación a corto plazo:</strong> Determina qué proceso se ejecutará inmediatamente en la CPU. Es el responsable de la 
                    conmutación entre procesos en la cola de listos.</li>
                    <br>            
                    <li><strong>Planificación a medio plazo:</strong>Se encarga de decidir qué procesos permanecerán en la memoria principal y cuáles serán 
                    suspendidos temporalmente (swap out) para optimizar la utilización de la memoria.</li>
                    <br>
                    <li><strong>Planificación a largo plazo:</strong>Regula cuántos procesos nuevos pueden ser admitidos en el sistema. 
                    Esto se hace para evitar sobrecargar el sistema y asegurar un uso balanceado de los recursos.</li>

                </ul>
                <div style="text-align: center;">
                    <img src="imagenes/planificacion.jpg" alt="SO" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 20%; height: auto;">
                </div> 
            </section>
            
            <section id="contacto" style="text-align: justify;">

                <h2>Sincronización de Procesos</h2>
                <p>
                La sincronización asegura que los procesos que acceden a recursos compartidos lo hagan de forma ordenada para evitar errores como las 
                condiciones de carrera, que ocurren cuando varios procesos modifican un recurso simultáneamente sin control. Los mecanismos más comunes para la 
                sincronización son:
                </p>
                <ul>
                    <li><strong>Semáforos:</strong>Variables de sincronización que permiten controlar el acceso a los recursos mediante señales, 
                    evitando que varios procesos accedan simultáneamente a un recurso crítico.</li>
                    <br>
                    <li><strong>Monitores:</strong>Son estructuras de programación que proporcionan un mecanismo de sincronización más alto nivel, 
                    gestionando automáticamente los bloqueos y garantizando que solo un proceso acceda a un recurso compartido a la vez.</li>
                    <br>
                    <li><strong>Cerraduras (Locks):</strong>Son mecanismos que aseguran que solo un proceso pueda acceder a un recurso específico en un momento dado, 
                    bloqueando a otros procesos hasta que el recurso sea liberado.</li>
                </ul>
                <div style="text-align: center;">
                    <img src="imagenes/sincronizacion de procesos.jpg" alt="SO" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 60%; height: auto;">
                </div> 
            </section>
            <section id= "Relación entre Planificación y Sincronización">
                <h2>Relación entre Planificación y Sincronización</h2>
                <p>La planificación y la sincronización están estrechamente relacionadas, ya que ambas buscan una utilización eficiente de los recursos del 
                    sistema, pero desde diferentes perspectivas. La planificación se ocupa de la distribución de la CPU entre los procesos, mientras que la 
                    sincronización maneja cómo los procesos interactúan con los recursos compartidos sin crear conflictos. Ambas técnicas son esenciales para 
                    el rendimiento y estabilidad de los sistemas multitarea.
                    <br>
                    La combinación de una buena planificación de procesos y un sistema de sincronización efectivo garantiza que los sistemas operativos 
                    puedan manejar múltiples procesos de manera segura y eficiente, maximizando la utilización de los recursos y minimizando 
                    posibles errores.
                </p>

                <div style="text-align: center;">
                    <img src="imagenes/planificacion.2.jpg" alt="SO" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 20%; height: auto;">
                </div> 

            </section>
        </div>
    </main>

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