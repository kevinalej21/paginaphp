<?php
// template.php - Esta será tu plantilla base

$pageTitles = [
    'sistemas_operativos' => 'Sistemas Operativos',
    'gestion_procesos' => 'Gestión de Procesos',
    'planificacion_sincronizacion' => 'Planificación y Sincronización',
    'procesos' => 'Procesos en Sistemas Operativos',
    'hilos' => 'Hilos',
    'gestion_memoria' => 'Gestión de Memoria',
    'sistemas_raid' => 'Sistemas RAID',
    'topicos_avanzados' => 'Tópicos Avanzados'
];

// Obtener el nombre del archivo actual
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$pageTitle = isset($pageTitles[$currentPage]) ? $pageTitles[$currentPage] : 'Página no encontrada';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Mi Sitio Web</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }
        
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        /* Estilos del banner */
        .page-header {
            background-color: #333;
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }

        .page-header h1 {
            margin: 0;
            text-align: center;
            color: #ffd700;
        }

        /* Estilos del contenido */
        .content-section {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .content-section h2 {
            color: #333;
            border-bottom: 2px solid #ffd700;
            padding-bottom: 0.5em;
            margin-top: 0;
        }

        /* Estilos para imágenes */
        .content-image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 1rem auto;
        }

        /* Estilos para la navegación */
        .nav-buttons {
            display: flex;
            justify-content: space-between;
            margin: 2rem 0;
        }

        .nav-button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .nav-button:hover {
            background-color: #555;
        }

        /* Estilos para el botón de volver */
        .back-button {
            display: inline-block;
            background-color: #ffd700;
            color: #333;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 2rem;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #ffed4a;
        }

        /* Estilos responsive */
        @media screen and (max-width: 768px) {
            .container {
                width: 95%;
            }
        }
    </style>
</head>
<body>
    
    <!-- Botón para volver a la página principal -->
    <div class="container">
        <a href="kenp.php" class="back-button">← Volver al Inicio</a>
    </div>

    <!-- Encabezado de la página -->
    <header class="page-header">
        <div class="container">
            <h1><?php echo $pageTitle; ?></h1>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="container">
        <article class="content-section">
            <h2>Introducción</h2>
            <!-- Aquí va el contenido específico de cada página -->
            <?php
            switch($currentPage) {
                case 'sistemas_operativos':
                    include 'contenido/sistemas_operativos_content.php';
                    break;
                case 'gestion_procesos':
                    include 'contenido/gestion_procesos_content.php';
                    break;
                // ... agregar casos para cada página
                default:
                    echo "<p>Contenido en construcción...</p>";
            }
            ?>
        </article>
    </main>

    <!-- Pie de página -->
    <footer class="container">
        <p>&copy; <?php echo date("Y"); ?> Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>