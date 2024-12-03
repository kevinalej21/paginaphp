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
                <h2>Sistemas RAID</h2>
                <p>Un sistema RAID es un conjunto de discos duros organizados para trabajar conjuntamente para proporcionar mayor rendimiento o redundancia. 
                    Los discos son agrupados en configuraciones lógicas que actúan como una única unidad de almacenamiento, mejorando características como la velocidad de acceso 
                    o la protección de datos.
                </p>

                <div style="text-align: right;">
                <img src="imagenes/almacenamiento-de-datos.png" alt="datos" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>

            <section id="Niveles de RAID">
            <h2>Niveles de RAID</h2>
            <P>
            Los sistemas RAID se dividen en varios niveles según el tipo de redundancia y rendimiento que proporcionan. 
            Los niveles más comunes son:
            </P>
            <ul>
                <li><h3><strong>RAID 0 (Striping)</strong></h3>
                <p>
                <h3><strong>Objetivo:</strong></h3> Redundancia para protección de datos.
                <h3><strong>Descripcion:</strong></h3> Duplica los datos en dos discos, de forma que cada disco tiene una copia idéntica de los datos. Si un disco falla, el otro sigue funcionando.
                <h3><strong>Ventaja:</strong></h3> Alta disponibilidad y recuperación ante fallos.
                <h3><strong>Desventaja:</strong></h3> Solo se utiliza el 50% de la capacidad total de los discos, ya que se replica la información.
                </p>

                <li><h3><strong>RAID 1 (Mirroring):</strong></h3></li>
                <p>
                <h3><strong>Objetivo:</strong></h3> Mejora el rendimiento.
                <h3><strong>Descripcion:</strong></h3> Divide los datos en bloques y los distribuye en dos o más discos. No proporciona redundancia, lo que significa que si un disco falla, se pierde toda la información.
                <h3><strong>Ventaja:</strong></h3> Aumento significativo de la velocidad de lectura y escritura.
                <h3><strong>Desventaja:</strong></h3> Sin tolerancia a fallos, no se recomienda para almacenamiento de datos críticos.  
                </p>
                
                <li><h3><strong>RAID 5 (Striping con Paridad):</strong></h3></li>
                <p>
                <h3><strong>Objetivo:</strong></h3>Balance entre rendimiento y redundancia.
                <h3><strong>Descripcion:</strong></h3> Los datos se distribuyen entre varios discos y se agrega información de paridad para permitir la 
                recuperación de datos si un disco falla. Requiere al menos tres discos.
                <h3><strong>Ventaja:</strong></h3> Buena relación entre rendimiento, capacidad y protección de datos.
                <h3><strong>Desventaja:</strong></h3> El rendimiento de escritura puede ser más lento debido a la necesidad de calcular la paridad.
                </p>

                <li><h3><strong>RAID 6 (Striping con Doble Paridad):</strong></h3></li>
                <p>
                <h3><strong>Objetivo:</strong></h3>Mayor redundancia que RAID 5
                <h3><strong>Descripcion:</strong></h3> Similar a RAID 5, pero con dos discos de paridad. Permite que fallen hasta dos discos sin perder datos.
                <h3><strong>Ventaja:</strong></h3> Alta protección contra fallos de disco.
                <h3><strong>Desventaja:</strong></h3> Aumento del coste y reducción de la capacidad debido a la doble paridad.

                <li><h3><strong>RAID 10 (RAID 1+0):</strong></h3></li>
                <p>
                <h3><strong>Objetivo:</strong></h3> Combinación de rendimiento y redundancia.
                <h3><strong>Descripcion:</strong></h3> Combina la tecnología de RAID 1 (mirroring) y RAID 0 (striping). Los datos se duplican y luego se distribuyen en los discos para mejorar el rendimiento.
                <h3><strong>Ventaja:</strong></h3> Alta redundancia y rendimiento, adecuado para aplicaciones que requieren acceso rápido y seguro a los datos.
                <h3><strong>Desventaja:</strong></h3> Requiere un número mínimo de 4 discos y reduce la capacidad total disponible. 
                </p>
            </ul>
            <div style="text-align: right;">
                <img src="imagenes/disco_duro.png" alt="disco" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 15%; height: auto;">
                </div>
            </section>

            <section id="Ventajas">
                <h2>Ventajas de los Sistemas RAID</h2>
                <ul>
                    <li><strong>Mayor Velocidad:</strong> Al distribuir los datos entre varios discos (RAID 0 y RAID 5, por ejemplo), 
                    se puede aumentar significativamente la velocidad de acceso a los datos.</li>
                    <li><strong>Redundancia y Recuperacion ante Fallos:</strong>  Algunos niveles de RAID proporcionan protección de los datos (RAID 1, RAID 5, RAID 6), 
                    lo que permite recuperar información en caso de que un disco falle.</li>
                    <li><strong>Mejor Escalabilidad:</strong> Los sistemas RAID permiten agregar discos adicionales sin interrumpir el funcionamiento, 
                    lo que facilita la expansión del almacenamiento.</li>  
                </ul>
                <div style="text-align: right;">
                <img src="imagenes/like.png" alt="like" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>

            <section id="Desventajas">
                <h2>Desventajas de los Sistemas RAID</h2>
                <ul>
                    <li><strong>Costos:</strong> Dependiendo del nivel de RAID, se pueden necesitar más discos para configurar el sistema, lo que aumenta el coste del hardware.</li>
                    <li><strong>Complejidad en la Configuración y Mantenimiento:</strong>  Algunos niveles de RAID, especialmente aquellos que implican paridad (RAID 5 y RAID 6), 
                    requieren configuraciones más complejas y mantenimiento regular.</li>
                    <li><strong>Pérdida de Capacidad: </strong> En algunos niveles (como RAID 1 y RAID 6), se pierde una parte significativa de la capacidad de almacenamiento debido
                    a la redundancia de datos.
                    </li>  
                    <div style="text-align: right;">
                <img src="imagenes/dislike.png" alt="dislike" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
                </ul>
            </section>
            <section id="Usos">
                <h2>Usos Comunes de los Sistemas RAID</h2>
                <ul>
                    <li><strong>Servidores de Datos: </strong> RAID se utiliza ampliamente en servidores que necesitan alta disponibilidad y redundancia de datos.</li>
                    <li><strong>Estaciones de Trabajo Profesionales:</strong>  Los diseñadores gráficos, ingenieros y otros profesionales que trabajan con grandes volúmenes 
                    de datos pueden usar RAID para obtener un mejor rendimiento.</li>
                    <li><strong>Almacenamiento en Centros de Datos: </strong> RAID es fundamental en los centros de datos donde la disponibilidad continua y el rendimiento son cruciales.
                    </li>  
                </ul>
                <div style="text-align: right;">
                <img src="imagenes/almacenamiento-del-servidor.png" alt="servidor" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8);border-radius: 10px; max-width: 10%; height: auto;">
                </div>
            </section>


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