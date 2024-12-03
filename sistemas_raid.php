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
        ['name' => 'Contacto', 'href' => '#contacto'],
    ];
    ?>
    
    <header>
        <div class="banner">
            <h1>Sistemas RAID</h1>
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
                <h2>¿Qué son los Sistemas RAID?</h2>
                <p>
                    RAID (Redundant Array of Independent Disks) es una tecnología que combina múltiples discos duros en una sola unidad lógica. Se utiliza para mejorar el rendimiento, aumentar la capacidad de almacenamiento o proporcionar tolerancia a fallos.
                </p>
                <div style="text-align: center;">
                    <img src="imagenes/raid.png" alt="RAID" style="box-shadow: 0 0 5px 5px rgba(128, 128, 128, 0.8); border-radius: 15px; max-width: 60%; height: auto;">
                </div>
            </section>
            
            <section id="tipos" style="text-align: left;">
                <h2>Niveles de RAID</h2>
                <ul>
                    <li><strong>RAID 0:</strong> Mejora el rendimiento al distribuir los datos entre discos, pero no ofrece redundancia.</li>
                    <li><strong>RAID 1:</strong> Duplica los datos en dos discos para tolerancia a fallos.</li>
                    <li><strong>RAID 5:</strong> Requiere al menos 3 discos, distribuye datos y paridad, ofreciendo redundancia y buen rendimiento.</li>
                    <li><strong>RAID 6:</strong> Similar a RAID 5, pero con doble paridad, soportando fallos en dos discos.</li>
                    <li><strong>RAID 10:</strong> Combina RAID 0 y RAID 1 para ofrecer rendimiento y redundancia.</li>
                </ul>
                <div style="text-align: right;">
                    <img src="imagenes/raid-niveles.png" alt="Niveles de
