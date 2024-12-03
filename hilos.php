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
            <section id="introduccion-hilos">
                <h2>1. Introducción a los Hilos</h2>
                <p>
                    Los hilos son la unidad más pequeña de procesamiento gestionada por el sistema operativo. Son parte de un proceso, 
                    comparten recursos como memoria, pero operan de manera independiente.
                </p>
                <ul>
                    <li><strong>Ventajas:</strong>
                        <ul>
                            <li>Eficiencia: Permite ejecutar tareas en paralelo en procesadores multicore.</li>
                            <li>Bajo costo: Crear y cambiar el contexto de un hilo es más barato que con procesos.</li>
                            <li>Optimización: Facilita la multitarea dentro de un proceso único.</li>
                        </ul>
                    </li>
                    <li><strong>Historia:</strong> Los hilos surgieron para mejorar el rendimiento en sistemas multiprocesador y evolucionaron 
                        desde procesos pesados a ligeros en sistemas modernos como Linux, Windows y macOS.
                    </li>
                </ul>
                <div style="text-align: right;">
                <img src="imagenes/codigo-binario.png" alt="datos" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>
            
            <section id="modelos-hilos">
                <h2>2. Modelos de Hilos</h2>
                <ul>
                    <li><strong>Hilos a nivel de usuario:</strong> Gestionados por bibliotecas, rápidos de crear y cambiar de contexto. Inconveniente: 
                        si un hilo se bloquea, todo el proceso se bloquea.
                    </li>
                    <li><strong>Hilos a nivel de kernel:</strong> Gestionados por el sistema operativo. Ventajas: Mejor concurrencia y manejo de recursos. 
                        Desventajas: Mayor sobrecarga.
                    </li>
                    <li><strong>Modelo mixto:</strong> Combina hilos de usuario mapeados a menos hilos de kernel. Ofrece balance entre eficiencia y paralelismo.
                    </li>
                </ul>
                <div style="text-align: right;">
                <img src="imagenes/procesador.png" alt="datos" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>

            <section id="creacion-hilos">
                <h2>3. Creación y Gestión de Hilos</h2>
                <ul>
                    <li><strong>Lenguajes de programación:</strong>
                        <ul>
                            <li><strong>C/C++:</strong> Usa la biblioteca `pthread_create`.</li>
                            <li><strong>Java:</strong> Utiliza las clases `Thread` y `Runnable`.</li>
                            <li><strong>Python:</strong> Usa el módulo `threading`.</li>
                        </ul>
                    </li>
                    <li><strong>Ciclo de vida:</strong> Creación → Ejecución → Suspensión → Terminación.</li>
                    <li><strong>Sincronización:</strong> Uso de mutex, semáforos y barreras para evitar conflictos entre hilos.</li>
                </ul>
                <div style="text-align: right;">
                <img src="imagenes/sincronizacion-de-datos.png" alt="datos" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>

            <section id="problemas-hilos">
                <h2>4. Problemas Comunes y Soluciones</h2>
                <ul>
                    <li><strong>Condiciones de Carrera:</strong> Solución: Usar mutex o semáforos.</li>
                    <li><strong>Deadlocks:</strong> Prevención: Jerarquía de recursos, tiempo de espera limitado.</li>
                    <li><strong>Starvation:</strong> Solución: Mecanismos de prioridad o envejecimiento.</li>
                </ul>
                <div style="text-align: right;">
                <img src="imagenes/semaforo.png" alt="datos" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>

            <section id="casos-estudio">
                <h2>5. Casos de Estudio</h2>
                <ul>
                    <li><strong>Ejemplos:</strong>
                        <ul>
                            <li>Servidores web con múltiples conexiones concurrentes.</li>
                            <li>Aplicaciones multimedia (procesamiento de audio/video).</li>
                            <li>Juegos que separan lógica, física y gráficos en hilos distintos.</li>
                        </ul>
                    </li>
                </ul>
                <div style="text-align: right;">
                <img src="imagenes/codificacion.png" alt="datos" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
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