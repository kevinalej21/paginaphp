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
        <span id="theme-text"></span>
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

<!-- contenido de la pagina -->

<main>
        <div class="container">
            <section id="concepto">
                <h2>Gestion de Memoria</h2>
                <p>
                    Como concepto general, la gestión de memoria es el proceso mediante el cual se administra y organiza la memoria disponible 
                    en un sistema para garantizar su uso eficiente y evitar problemas como fugas o fragmentación.
                </p>
                <div style= "text-align: center;" >
                    <img src="imagenes/gestion.png" alt="" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 60%; height: auto;">
                </div>
            </section>
            
            <section id="tipos" style="text-align: left;">
    <h2>Tipos de Memoria</h2>
    <ul>
        <li><strong>Memoria Principal (RAM):</strong> Lugar donde se cargan procesos y datos activos.</li>
        <li><strong>Memoria Secundaria:</strong> Usada como almacenamiento de respaldo.</li>
        <li><strong>Memoria Caché:</strong> Almacena datos de acceso frecuente para acelerar el rendimiento.</li>
        <li><strong>Memoria Virtual:</strong> Extiende la RAM usando almacenamiento secundario.</li>
    </ul>
    <div style="text-align: right;">
        <img src="imagenes/memoria-ram.png" alt="Memoria RAM" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
    </div>
</section>

            
            <section id="funciones">
                <h2>Funciones Principales</h2>
                <ol>
                    <li><strong>Asignación de Memoria:</strong> Reserva memoria para procesos y datos.</li>
                    <li><strong>Seguimiento:</strong> Controla el uso de la memoria.</li>
                    <li><strong>Liberación:</strong> Recupera memoria no utilizada para otros procesos.</li>
                </ol>
                <div style="text-align: right;">
                <img src="imagenes/perdida-de-memoria.png" alt="Memoria RAM" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>
            
            <section id="metodos">
                <h2>Métodos de Gestión</h2>
                <ul>
                    <li><strong>Particionamiento:</strong> Divide la memoria en bloques fijos o dinámicos.</li>
                    <li><strong>Paginación:</strong> Divide la memoria en páginas de tamaño fijo.</li>
                    <li><strong>Segmentación:</strong> Agrupa datos y procesos lógicamente.</li>
                    <li><strong>Paginación por Demanda:</strong> Carga páginas solo cuando se necesitan.</li>
                </ul>
                <div style="text-align: right;">
                <img src="imagenes/gabinete.png" alt="Memoria RAM" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>
            
            <section id="problemas">
                <h2>Problemas Comunes</h2>
                <ul>
                    <li><strong>Fragmentación:</strong> Espacios no contiguos que no pueden usarse eficientemente.</li>
                    <li><strong>Fugas de Memoria:</strong> Memoria que no se libera correctamente.</li>
                    <li><strong>Condiciones de Acceso Inválidas:</strong> Intentos de acceso fuera de los límites de memoria.</li>
                    <div style="text-align: right;">
                <img src="imagenes/fragmentacion.png" alt="Memoria RAM" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
                </ul>
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