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
        ['name' => 'Inicio', 'href' => 'kenp.php'],
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
                <h2>Procesos en Sistemas Operativos</h2>
                <H3><strong>¿Qué es un proceso?</strong></H3>
                <p>
                Un proceso es un programa en ejecución dentro del sistema operativo. Se considera la unidad básica de trabajo y está compuesto por:
                <ul>
                <li><strong>Código ejecutable:</strong></li> Las instrucciones que el proceso va a ejecutar.
                <li><strong>Contexto de ejecución:</strong></li> Incluye el contador de programa, registros de la CPU y variables.
                <li><strong>Recursos asignados:</strong></li> Memoria, archivos y dispositivos necesarios para ejecutar el proceso.
                <br>
                Un proceso es gestionado por el sistema operativo para asegurar su correcta ejecución y la asignación adecuada de recursos. 
                </ul>
                </p>  
                <div style="text-align: center;">
                    <img src="imagenes/procesos1.png" alt="SO" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 20%; height: auto;">
                </div> 
            </section>

            <section id="contacto">
                <h2>Ciclo de Vida de un Proceso</h2>
                <p> El ciclo de vida de un proceso describe las etapas que atraviesa durante su ejecución, desde su creación hasta su finalización. Estas etapas son:
                    <ul>
                        <li><strong>Nuevo:</strong>El proceso está siendo creado.</li>
                        <br>
                        <li><strong>Listo:</strong>El proceso está esperando la asignación de la CPU para comenzar su ejecución.</li>
                        <br>
                        <li><strong>Ejecución:</strong>El proceso está utilizando la CPU para ejecutar sus instrucciones.</li>
                        <br>
                        <li><strong>Espera:</strong>El proceso está esperando un evento externo, como una operación de entrada/salida (E/S).</li>
                        <br>
                        <li><strong>Terminado:</strong>El proceso ha completado su tarea y sus recursos son liberados.</li>
                    </ul>

                </p>
                <div style="text-align: center;">
                    <img src="imagenes/ciclo de vida de un proceso.png" alt="SO" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 40%; height: auto;">
                </div> 
            </section>

            <section>
                <h2>Estados de un Proceso</h2>
                <p>El sistema operativo clasifica los procesos en diferentes estados según su situación:</p>
                <ul>
                    <li><strong>Nuevo:</strong>El proceso está siendo creado.</li>
                    <br>
                    <li><strong>Listo:</strong>El proceso está esperando que la CPU le sea asignada.</li>
                    <br>
                    <li><strong>Ejecución:</strong>El proceso está en ejecución en la CPU.</li>
                    <br>
                    <li><strong>Espera:</strong>El proceso espera un evento, como una operación de E/S.</li>
                    <br>
                    <li><strong>Terminado:</strong>El proceso ha finalizado y se liberan los recursos.</li>
                </ul>
                <div style="text-align: center;">
                    <img src="imagenes/estado de un proceso.png" alt="SO" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 40%; height: auto;">
                </div> 
            </section>
            <section>
                <h2>Creación y Terminación de Procesos</h2>
                <p>La creación de un proceso se lleva a cabo mediante llamadas al sistema, como fork() en Unix o CreateProcess() en Windows. 
                    Un proceso puede terminar de dos maneras:
                </p>
                <ul>
                    <li><strong>Voluntariamente:</strong>El proceso finaliza por su propia decisión, generalmente al ejecutar una llamada como exit().</li>
                    <li><strong>Involuntariamente:</strong>Otro proceso o el sistema operativo termina un proceso, por ejemplo, mediante señales o excepciones.</li>
                </ul>
                <div style="text-align: center;">
                    <img src="imagenes/terminacion e procesos.jpg" alt="SO" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 40%; height: auto;">
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