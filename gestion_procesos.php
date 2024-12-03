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
            <section id="inicio" style="text-align: left;">
                <h2>Gestion de procesos</h2>
                <p>La gestión de procesos es una función fundamental de los sistemas operativos que se encarga de crear, planificar, ejecutar, sincronizar y 
                finalizar los procesos en un sistema. Un proceso es una instancia de un programa en ejecución que requiere recursos como CPU, 
                memoria y dispositivos de E/S.
                <br>en esta seccion vamos a ver :
                <br>
                <ul>
                    <li>Conceptos clave</li>
                    <li>Estado de un proceso</li>
                    <li>Gestion de procesos</li>
                    <li>Sincronización y Comunicación</li>
                    <li>Tipos de Procesos</li>
                    <li>Planificación de Procesos</li>
                    <li>Multitarea y Multihilos</li>
                </ul>

                </p>  
                <div style="text-align: center;">
                    <img src="imagenes/GESTION PROCESO.png" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 15%; height: auto;">
                </div> 
                    
                

            </section>
            <section id="contacto">
                <h2>Conceptos Clave</h2>
            
                <ul>
                    <li><strong>¿Qué es un proceso?</strong></li>
                    <p>Un proceso es un programa en ejecución que representa una unidad básica de trabajo en un sistema operativo. 
                        Consta de tres elementos principales: el código ejecutable, que contiene las instrucciones del programa; 
                        el contexto de ejecución, que incluye información como el contador de programa, los registros de la CPU y 
                        las variables necesarias para su funcionamiento; y los recursos asignados, que abarcan memoria, archivos y 
                        dispositivos necesarios para completar sus tareas. En esencia, un proceso es un programa dinámico que 
                        interactúa con el sistema operativo y el hardware.
                    </p>
                    <li><strong>Ciclo de vida de un proceso</strong></li>
                    <p>El ciclo de vida de un proceso describe las etapas por las que pasa durante su ejecución. Comienza en el estado Nuevo,
                        donde se crea el proceso. Luego pasa a Listo (Ready), estando preparado para ejecutarse y esperando que la CPU esté 
                        disponible. Cuando se asigna la CPU, entra en el estado En ejecución (Running), donde se ejecutan sus instrucciones. 
                        Si necesita esperar un evento externo, como una operación de entrada/salida, pasa al estado Bloqueado (Blocked). 
                        Finalmente, cuando completa su ejecución, el proceso entra en el estado Finalizado (Terminated), 
                        donde libera todos sus recursos.</p>
                </ul>
                <div style= "text-align: center;" >
                    <img src="imagenes/proceso.jpeg" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 30%; height: auto;">
                </div> 
            </section>
            </section>
            <section id="contacto">
                <h2>Estados de un Proceso</h2>
                <p>Los estados de un proceso reflejan su ciclo de vida dentro del sistema operativo. En el estado Nuevo, el proceso está siendo creado. 
                    Una vez preparado, pasa al estado Listo, donde espera la asignación de la CPU para ejecutarse. En el estado Ejecución, el proceso 
                    utiliza la CPU para llevar a cabo sus instrucciones. Si necesita esperar un evento, como una operación de entrada/salida o un recurso, 
                    entra en el estado de Espera. Finalmente, cuando el proceso concluye, pasa al estado Terminado, liberando los recursos asignados.</p>

                <div style= "text-align: center;" >
                    <img src="imagenes/estado de un procesp.jpg" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 50%; height: auto;">
                </div> 
            </section>
            <section id="Gestión de Procesos">
                <h2>Gestión de Procesos</h2>
                <ul>
                    <li><strong>Creación y Terminación</strong></li>
                    <p>La creación de procesos es realizada por el sistema operativo mediante llamadas específicas, como fork() en Unix o CreateProcess() en Windows. 
                    Esto permite generar nuevos procesos a partir de otros existentes, creando jerarquías de procesos.La terminación de procesos puede ocurrir de forma 
                    voluntaria, cuando un proceso completa su tarea y llama a funciones como exit(), o de manera involuntaria, cuando otro proceso lo finaliza forzosamente, 
                    como sucede con señales en sistemas Unix. Ambos eventos aseguran que los recursos asignados al proceso sean liberados.</p>
                    <br>
                    <li><strong>Control de Procesos</strong></li>
                    <p>El control de procesos es gestionado mediante los Bloques de Control de Procesos (PCB), estructuras de datos que contienen toda la información 
                        relevante sobre un proceso, como su ID, estado actual, recursos asignados, y otras estadísticas esenciales para su gestión. Además, el contexto 
                        del proceso incluye detalles específicos como los registros de la CPU, la memoria asignada al proceso y los archivos que tiene abiertos. 
                        Esto permite al sistema operativo realizar un seguimiento eficiente de cada proceso y gestionar las transiciones entre estados, como pausa y 
                        reanudación.
                    </p>
                    <li><strong>Planificación (Scheduling)</strong></li>
                    <p>La planificación es el mecanismo mediante el cual el sistema operativo selecciona qué proceso utilizará la CPU en un momento dado, 
                    optimizando el uso de los recursos. Se divide en tres tipos principales:
                    <br>
                    <br>
                    <strong>1.Planificación a corto plazo:</strong> Determina cuál de los procesos listos se ejecutará de inmediato en la CPU. 
                    Su objetivo es maximizar el rendimiento y minimizar los tiempos de espera.
                    <br>
                    <br>
                    <strong>2.Planificación a medio plazo:</strong> Decide qué procesos permanecerán en la memoria principal y cuáles serán suspendidos
                    temporalmente, equilibrando la carga del sistema.
                    <br>
                    <br>
                    <strong>3.Planificación a largo plazo:</strong> Controla cuántos procesos nuevos se admiten en el sistema, gestionando la carga 
                    general y asegurando que no se sobrepasen los recursos disponibles.
                    <br>
                    <br>
                    Cada tipo de planificación trabaja en diferentes niveles para garantizar la eficiencia y estabilidad del sistema operativo.
                </p>

                </ul>

                <div style= "text-align: center;" >
                    <img src="imagenes/gestion de procesos 2.jpg" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 50%; height: auto;">
                </div> 

            </section>

            <section id ="Sincronización y Comunicación" style="text-aling: justify">
                <h2>Sincronización y Comunicación</h2>
                
                <ul>
                    <strong><h3>Sincronización</h3></strong>
                    <p>
                    En los sistemas operativos, la sincronización asegura que los procesos que acceden a recursos compartidos lo hagan de manera controlada,
                    evitando problemas como las condiciones de carrera. 
                    Para lograrlo, se emplean mecanismos como:
                    <li><strong>Semáforos:</strong> Variables especiales que controlan el acceso a recursos compartidos mediante señales.</li>
                    <li><strong>Monitores:</strong>Estructuras de alto nivel que gestionan la sincronización de manera automática</li>
                    <li><strong>Cerraduras (locks):</strong>Bloqueos explícitos que garantizan acceso exclusivo a un recurso.</li>
                    Estos mecanismos permiten que los procesos trabajen juntos de forma eficiente y sin conflictos, especialmente en entornos de concurrencia.
                    </p>


                    <strong><h3>Comunicación entre Procesos (IPC)</h3></strong>
                    <p>
                    La comunicación entre procesos (IPC) permite el intercambio de datos entre procesos que pueden estar ejecutándose de manera simultánea o independiente.
                    Los métodos más comunes para implementar IPC son:
                    <li><strong>Memoria compartida:</strong> Los procesos comparten un segmento de memoria, lo que permite un intercambio rápido de datos, 
                    pero requiere sincronización para evitar conflictos.</li>
                    <br>
                    <li><strong>Paso de mensajes (message passing):</strong>Los procesos envían y reciben mensajes a través del sistema operativo, 
                    garantizando una comunicación estructurada y segura.</li>
                    <br>
                    <li><strong>Tuberías (pipes): Un mecanismo unidireccional que conecta la salida de un proceso con la entrada de otro, 
                    útil para transferir datos en flujo continuo.</strong></li>
                    <br>
                    Estos métodos facilitan la cooperación entre procesos en sistemas multitarea y distribuidos.
                    </p>
                </ul>
                <div style= "text-align: center;" >
                    <img src="imagenes/sincronizacion.jpg" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 30%; height: auto;">
                </div> 
            </section>

            <section id = "Tipos de Procesos" style="text-aling: left"> 
                <h2>Tipos de Procesos</h2>
                <ul>
                    <strong><h3>Según su naturaleza</h3></strong>
                    <li><strong>Procesos de usuario:</strong> Inician aplicaciones de usuario.</li>
                    <li><strong>Procesos del sistema:</strong>Gestionan funciones internas del SO.</li>
                    <strong><h3>Según la ejecución</h3></strong>
                    <li><strong>Procesos independientes:</strong> No dependen de otros procesos.</li>
                    <li><strong>Procesos cooperativos:</strong>Comparten recursos o datos con otros procesos.</li>
                </ul>

                <div style= "text-align: center;" >
                    <img src="imagenes/tipos de procesos.jpg" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 30%; height: auto;">
                </div> 
            </section>

            <section id="Planificación de Procesos">
                <h2><strong>Planificación de Procesos</strong></h2>
                <ul>
                    <strong><h3>Algoritmos de Planificación</h3></strong>
                    <li><strong>FCFS (First-Come, First-Served):</strong>Procesa en orden de llegada.</li>
                    <li><strong>SJF (Shortest Job First):</strong>Procesa el trabajo más corto primero.</li>
                    <li><strong>Round Robin (RR):</strong>Cada proceso obtiene un tiempo fijo en la CPU.</li>
                    <li><strong>Prioridades:</strong>Procesos con mayor prioridad son atendidos primero.</li>
                </ul>
                <ul>
                    <strong><h3>Métricas de Rendimiento</h3></strong>
                    <li><strong>Throughput:</strong>Cantidad de procesos completados por unidad de tiempo.</li>
                    <li><strong>Tiempo de espera:</strong>Tiempo total que un proceso pasa en la cola.</li>
                    <li><strong>Tiempo de respuesta:</strong>Tiempo desde que se solicita una tarea hasta que se inicia.</li>
                </ul>

                <div style= "text-align: center;" >
                    <img src="imagenes/plamificacion.jpg" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 50%; height: auto;">
                </div> 
            </section>

            <section id="Multitarea y Multihilos">
                <h2>Multitarea y Multihilos</h2>
                <ul>
                    <strong>Multitarea y Multihilos</strong>
                    <p><li>Permite que varios procesos se ejecuten concurrentemente al compartir la CPU.</li></p>
                    <strong>Multihilos</strong>
                    <li>Un proceso puede tener múltiples hilos que comparten recursos.</li>
                    <li>Ventaja: Mayor eficiencia al ejecutar tareas concurrentes.</li>
                </ul>
                <div style= "text-align: center;" >
                    <img src="imagenes/multitarea.png" alt="" style="box-shadow: 0 0 10px 10px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 50%; height: auto;">
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