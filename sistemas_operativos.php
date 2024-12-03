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
            <section id="Sistemas operativos">
                <h2>Sistemas Operativos</h2>
                <p>Un sistema operativo (SO) es un software que actúa como intermediario entre el hardware de una
                computadora y sus usuarios, proporcionando servicios esenciales para ejecutar aplicaciones y
                gestionar los recursos del sistema. A continuación, se presenta un resumen estructurado por bloques
                clave.
                </p>
                <p>
                El sistema operativo es el programa base que administra el hardware y coordina el software. Sus principales
                objetivos incluyen la eficiencia, que busca el uso óptimo de los recursos del sistema, la conveniencia,
                que se refiere a facilitar la interacción del usuario con el hardware de manera sencilla y eficaz, y la capacidad de evolución,
                que le permite adaptarse a nuevas tecnologías y requisitos, asegurando su relevancia y funcionalidad a lo largo del tiempo.
                </p>


                <div style= "text-align: center;" >
                    <img src="imagenes/definicion-sistemas-operativos.jpg" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 60%; height: auto;">
                </div> 
                    
                

            </section>
            <section id="Funciones principales">
            <h2>Funciones Principales</h2>
            <ul>
                <li><h3><strong>Gestión de Procesos</strong></h3></li>
                <p>Un proceso es un programa en ejecución compuesto por código ejecutable y su contexto. 
                Dentro de la gestión de procesos, se incluyen funciones esenciales como la creación, 
                ejecución y terminación de procesos. Además, se realiza la planificación (scheduling), 
                que decide qué proceso se ejecuta y en qué momento, optimizando los recursos del sistema. 
                También se gestiona la sincronización, que permite manejar procesos concurrentes y
                evitar conflictos al acceder a recursos compartidos. Por último, se facilita la comunicación entre procesos 
                (IPC), que permite el intercambio de datos entre procesos para garantizar la colaboración eficiente.</p>

                <li><h3><strong>Gestión de Memoria</strong></h3></li>
                <p>La memoria principal es el espacio donde se cargan los programas y los datos que están en
                ejecución. La gestión de memoria incluye funciones clave como la asignación y liberación de
                memoria para garantizar un uso eficiente de los recursos disponibles. También se implementan
                técnicas como la segmentación y la paginación para organizar y gestionar la memoria de manera
                estructurada. Además, se asegura la protección y el control de acceso, evitando conflictos y
                garantizando que cada proceso acceda únicamente a las áreas de memoria permitidas.
                </p>
                
                <li><h3><strong>Gestión de Archivos</strong></h3></li>
                <p>El sistema de archivos es una estructura diseñada para organizar y almacenar datos en dispositivos
                de almacenamiento. La gestión de archivos incluye funciones esenciales como la creación,
                eliminación y manipulación de archivos y directorios, lo que permite mantener el orden y
                accesibilidad de la información. Además, se realiza el control de permisos y acceso para garantizar la
                seguridad de los datos, y se implementa un almacenamiento estructurado que facilita la
                recuperación eficiente de la información.
                </p>

                <li><h3><strong>Gestión de Dispositivos</strong></h3></li>
                <p>Los dispositivos periféricos, como discos duros, impresoras y otros, son componentes esenciales
                para la interacción con el sistema. La gestión de dispositivos se encarga de los controladores
                (drivers), que facilitan la comunicación entre el hardware y el software. Además, se asegura una
                entrada/salida (E/S) eficiente y en paralelo, optimizando el rendimiento del sistema. También se lleva
                a cabo la asignación y manejo de dispositivos compartidos, asegurando que múltiples procesos
                puedan utilizarlos de manera adecuada sin interferencias.
                </p>

                <li><h3><strong>Gestión de Seguridad y Protección</strong></h3></li>
                <p>La seguridad se enfoca en prevenir accesos no autorizados a los recursos del sistema, mientras que
                la protección garantiza que estos recursos solo sean utilizados bajo reglas establecidas para evitar su
                mal uso. Para ello, se implementan mecanismos como la autenticación de usuarios, que asegura que
                solo personas autorizadas puedan acceder al sistema, el control de acceso a recursos, que regula
                quién puede acceder a qué y en qué condiciones, y las auditorías de eventos, que permiten
                monitorear y registrar las actividades en el sistema para detectar posibles vulnerabilidades o abusos.
                </p>
            </ul>
                
                
            </section>

            <section>
                <h2>Tipos de Sistemas Operativos</h2>
                <p>
                Existen varios tipos de sistemas operativos, cada uno adaptado a necesidades específicas. Los sistemas monotarea
                ejecutan una tarea a la vez, mientras que los multitarea pueden ejecutar múltiples tareas simultáneamente mediante
                conmutación rápida entre procesos. En cuanto a los usuarios, los sistemas monousuario permiten solo un usuario a la vez, 
                mientras que los multiusuario soportan varios usuarios de manera concurrente. Los sistemas por lotes procesan tareas
                en lotes sin interacción directa del usuario. Los sistemas en tiempo real están diseñados para responder de manera 
                garantizada a eventos externos, como en aplicaciones de control industrial. Finalmente, los sistemas distribuidos coordinan
                múltiples computadoras para que trabajen juntas como un sistema único.
                </p>
                <br>
                <div style= "text-align: center;" >
                    <img src="imagenes/sistemas-operativos2.jpg" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 50%; height: auto;">
                </div> 
            </section>
            <section>
                <h2>Componentes del Sistema Operativo</h2>
                <ul>
                <li><h3><strong>Núcleo (Kernel)</strong></h3></li>
                <p>
                El núcleo o kernel es el componente central de un sistema operativo y se encarga de gestionar el hardware y coordinar 
                las operaciones entre el hardware y el software. Sus principales funciones incluyen la gestión de recursos, como la CPU,
                la memoria y los dispositivos de entrada/salida, asegurando que se utilicen de manera eficiente. Además, se encarga de la 
                comunicación entre hardware y software, actuando como intermediario entre ambos, y del manejo de interrupciones, que permite
                que el sistema responda rápidamente a eventos externos, como señales de hardware o solicitudes de software. En resumen, 
                el núcleo es fundamental para el funcionamiento eficiente y estable del sistema operativo.
                </p>
                <div style= "text-align: center;" >
                    <img src="imagenes/nucleokernel.gif" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 100%; height: auto;">
                </div> 

                <li><h3><strong>Interfaz de Usuario</strong></h3></li>
                <p>
                Existen dos tipos principales de interfaz de usuario: la CLI (Command-Line Interface), que permite la interacción mediante 
                comandos de texto escritos por el usuario, y la GUI (Graphical User Interface), que facilita la interacción mediante ventanas,
                íconos y gráficos, ofreciendo una experiencia más visual e intuitiva. La CLI es más eficiente para usuarios avanzados que
                prefieren el control total sobre el sistema, mientras que la GUI es más accesible para usuarios que buscan facilidad y 
                comodidad en la interacción.
                </p>
                <div style= "text-align: center;" >
                    <img src="imagenes/interfaz de ususario.png" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 20%; height: auto;">
                </div> 
                <li><h3><strong>Sistema de Archivos</strong></h3></li>
                <p>
                El sistema de archivos es la estructura y el conjunto de reglas que un sistema operativo utiliza para almacenar, organizar 
                y recuperar datos en dispositivos de almacenamiento, como discos duros o SSDs. Define cómo se gestionan los archivos, sus nombres, 
                directorios, permisos y el acceso a los datos, asegurando que la información esté organizada de manera eficiente y sea fácilmente 
                accesible cuando sea necesario.
                </p>
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
</body>
</html>