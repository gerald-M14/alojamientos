<?php
    session_start();
    if(!isset($_SESSION['code'])) {
        header("Location: ../views/index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TAILWIND CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        /* Estilos para el modal */
        [type="checkbox"]:checked ~ .modal-container {
            display: block;
        }
        
        [type="checkbox"]:not(:checked) ~ .modal-container {
            display: none;
        }
        
        /* Estilo específico para el fondo semi-transparente */
        .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        /* Animación para el modal */
        .modal-content {
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.3s ease-out;
        }
        
        [type="checkbox"]:checked ~ .modal-container .modal-content {
            transform: translateY(0);
            opacity: 1;
        }

        
    </style>

    <title>Alojamientos de usuario</title>
</head>
<body class="bg-gray-50 font-sans">
    <?php 
        require_once "../controller/ManagerController.php";
        $list_accommodation = ManagerController::getAccomodationByUser(); //[]
    ?>


    <!-- header -->

    <header class=" top-0 left-0 right-0 z-50 bg-slate-800" id="header">
        <nav class="container mx-auto px-4 lg:px-8 py-4">
            <div class="flex flex-wrap justify-between items-center">
                <a href="../views/UserView.php" class="flex items-center">
                    <img src="../public/img/Logo.png" class="h-12 sm:h-14" alt="Logo" />
                </a>
                
                <!-- Menú móvil -->
                <div class="flex items-center lg:hidden">
                    <button id="mobile-menu-button" class="inline-flex items-center p-2 text-teal-600 hover:text-teal-800 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                
                <!-- Menú desktop -->
                <div class="hidden lg:flex lg:items-center lg:w-auto" id="desktop-menu">
                    <ul class="flex flex-row space-x-8 mt-0 font-medium">
                        <li>
                            <a href="../views/UserView.php" class="block py-2 text-white hover:text-teal-400 transition-colors duration-300 nav-link" aria-current="page">Inicio</a>
                        </li>
                        <li>
                            <a href="../views/AccomodationByUser.php" class=" block py-2 text-teal-400 border-b-2 border-teal-600 hover:text-teal-800 transition-colors duration-300">Mis alojamientos</a>
                        </li>
                        
                    </ul>
                </div>
                
                <!-- Botones de acción -->
                <div class="hidden lg:flex items-center space-x-4">
                    <span class="px-3 font-medium text-white">Hola, <?php echo $_SESSION['User']; ?></span>
                    <a href="#" class="bg-white text-teal-600 hover:bg-teal-50 font-medium rounded-full text-sm px-5 py-2.5 transition-colors duration-300">Cerrar sesion</a>
                    
                </div>
            </div>
            
            <!-- Menú móvil desplegable -->
            <div class="hidden w-full mt-4 lg:hidden bg-white rounded-lg shadow-lg p-4" id="mobile-menu">
                <ul class="flex flex-col space-y-3 font-medium">
                    <li>
                        <a href="../views/UserView.php" class="block py-2 px-3 text-gray-700 hover:bg-teal-50 hover:text-teal-600 rounded-lg transition-colors duration-300">Inicio</a>
                    </li>
                    <li>
                        <a href="../views/AccomodationByUser.php" class=" block py-2 px-3 text-teal-600 bg-teal-50 rounded-lg">Mis alojoamientos</a>
                    </li>
                    
                    <div class="pt-4 border-t border-gray-200 flex flex-col space-y-3">
                    <a href="#" class="py-2 px-3 bg-teal-500 text-white rounded-lg text-center font-medium">Cerrar sesión</a>

                    </div>
                </ul>
            </div>
        </nav>
    </header>

    

    <!-- Título de sección -->
    <div class="container mx-auto px-4 mt-16 mb-8">
        <h2 class="text-3xl font-bold text-gray-800 text-center">Alojamientos Guardados</h2>
        <p class="text-gray-600 text-center mt-2 mb-8">Aqui encontraras tus alojamientos guardados</p>
    </div>

    <!-- Iterando los alojamientos  -->
    <div class="flex flex-wrap justify-center gap-8 p-4">
        <?php 
        
        foreach($list_accommodation as $item){ ?>
            <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                
            
                <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
                <img class="h-56 w-full object-cover" src="<?php echo $item['URLimage']; ?>" alt="<?php echo $item['name']; ?>">
                <span class="absolute top-4 right-4 bg-teal-500 text-white text-xs font-bold px-3 py-1 rounded-full"><?php echo $item['lodge_type']; ?></span>
                </div>

                <div class="p-5">
                    <div class="flex items-center mb-2">
                        <h6 class="text-slate-800 text-xl font-semibold">
                            <?php echo $item['name']; ?>
                        </h6>
                    </div>

                    <div class="flex items-center mb-3">
                            <svg class="w-4 h-4 text-gray-500 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="text-gray-600 text-sm"><?php echo $item['address']; ?></p>
                    </div>
                    
                    <!-- Servicios destacados -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <?php 
                            $servicios = explode(',', $item['services']);
                            $contador = 0;
                            foreach($servicios as $servicio) { 
                                if(trim($servicio) != '' && $contador < 3) {
                                    $contador++;
                            ?>
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded-full"><?php echo trim($servicio); ?></span>
                        <?php 
                            }
                        } 
                        
                        //  Si hay más servicios, mostrar un indicador
                        if(count($servicios) > 3) {
                            echo '<span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded-full">+' . (count($servicios) - 3) . ' más</span>';
                        }
                        ?>
                    </div>


                </div>
                <div class="flex items-center justify-start pl-5">
                    <span class="text-2xl font-bold text-[#FF2121]"><?php echo $item['price']; ?></span>
                    <span class="text-gray-500 text-sm">/noche</span>
                </div>


                

                <div class="px-4 pb-4 pt-0 mt-2 flex gap-2">
                
                    <!-- Checkbox oculto para controlar el modal -->
                    <input type="checkbox" id="modal-toggle-<?php echo $item['id_lodge']; ?>" class="hidden absolute" aria-hidden="true">

                    <!-- Botón Ver más -->
                    <label for="modal-toggle-<?php echo $item['id_lodge']; ?>" 
                        class="w-full rounded-md bg-[#A3E3B1] py-2 px-4 border border-transparent text-center text-sm text-[#333] font-semibold transition-all shadow-md hover:bg-[#89C99D] hover:shadow-lg focus:bg-[#89C99D] active:bg-[#89C99D] cursor-pointer">
                        Ver más
                    </label>

                    <!-- Botón Guardar con formulario -->
                    <form action="../controller/ManagerController.php" method="POST" class="w-full">
                        <input type="hidden" name="action" value="deleteAccommodationByUser">
                        <input type="hidden" name="id_lodge" value="<?php echo $item['id_lodge']; ?>">
                        <button 
                            class="w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white font-semibold transition-all shadow-md hover:bg-[#D91C1C] hover:shadow-lg focus:bg-[#D91C1C] active:bg-[#D91C1C] cursor-pointer" 
                            type="submit">
                            Eliminar
                        </button>
                    </form>
                

                    
                    <!-- Modal container -->
                    <div class="modal-container fixed inset-0 z-50 overflow-auto">
                        <!-- Backdrop semi-transparente usando clase personalizada -->
                        <div class="fixed inset-0 modal-backdrop"></div>
                        
                        <!-- Modal content -->
                        <div class="modal-content relative z-10 mx-auto my-10 bg-white rounded-xl shadow-2xl w-11/12 md:w-3/4 lg:w-2/3 max-h-[90vh] overflow-y-auto">
                            <!-- Header con gradiente -->
                            <div class="sticky top-0 z-20 bg-gradient-to-r from-[#FF2121] to-[#A3E3B1] text-white rounded-t-xl">
                                <div class="flex justify-between items-center p-6">
                                    <h1 class="text-2xl font-bold"><?php echo $item['name']; ?></h1>
                                    <label for="modal-toggle-<?php echo $item['id_lodge']; ?>" class="flex items-center justify-center w-8 h-8 rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 text-white cursor-pointer transition-all">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </label>
                                </div>
                                <!-- Puntuación y precio destacados -->
                                <div class="flex justify-between items-center px-6 pb-4">
                                    
                                    <div class="bg-white bg-opacity-20 rounded-lg px-3 py-1">
                                        <span class="font-bold text-xl text-[#FF2121]"><?php echo $item['price']; ?> €</span>
                                        <span class="text-sm">/ noche</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Contenido principal -->
                            <div class="p-6">
                                <!-- Imagen principal y ubicación -->
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                                    <!-- Imagen principal (2/3 del ancho en desktop) -->
                                    <div class="md:col-span-2 rounded-xl overflow-hidden shadow-md">
                                        <img src="<?php echo $item['URLimage']; ?>" class="w-full h-auto object-cover" alt="Imagen de alojamiento">
                                    </div>
                                    
                                    <!-- Información de ubicación (1/3 del ancho en desktop) -->
                                    <div class="bg-gray-50 rounded-xl p-5 shadow-sm flex flex-col">
                                        <h3 class="text-lg font-semibold mb-3 flex items-center text-[#FF2121]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                            </svg>
                                            Ubicación
                                        </h3>
                                        <div class="bg-white rounded-lg p-4 mb-3 shadow-sm">
                                            <p class="font-medium text-gray-800"><?php echo $item['address']; ?></p>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <!-- Información detallada en grid -->
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <!-- Contacto -->
                                    <div class="bg-gray-50 rounded-xl p-4 shadow-sm">
                                        <h3 class="text-lg font-semibold mb-4 flex items-center text-[#FF2121]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                            </svg>
                                            Contacto
                                        </h3>
                                        <div class="space-y-3">
                                            <div class="flex items-center bg-white p-3 rounded-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                </svg>
                                                <span class="font-medium"><?php echo $item['phone']; ?></span>
                                            </div>
                                            <div class="flex items-center bg-white p-3 rounded-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                </svg>
                                                <span class="font-medium"><?php echo $item['email']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Servicios -->
                                    <div class="bg-gray-50 rounded-xl p-4 shadow-sm">
                                        <h3 class="text-lg font-semibold mb-4 flex items-center text-[#FF2121]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                            </svg>
                                            Servicios
                                        </h3>
                                        <div class="bg-white p-3 rounded-lg">
                                            <div class="grid grid-cols-2 gap-3">
                                                <?php 
                                                //los servicios están separados por comas
                                                $servicios = explode(',', $item['services']);
                                                foreach($servicios as $servicio) { 
                                                    if(trim($servicio) != '') {
                                                ?>
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span class="text-sm font-medium"><?php echo trim($servicio); ?></span>
                                                </div>
                                                <?php 
                                                    }
                                                } 
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Puntuación detallada -->
                                    <div class="bg-gray-50 rounded-xl p-4 shadow-sm">
                                        <h3 class="text-lg font-semibold mb-4 flex items-center text-[#FF2121]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            Valoración
                                        </h3>
                                        <div class="bg-white p-3 rounded-lg">
                                        <div class="space-y-3">
                                            <?php 
                                            // Categorías de valoración ficticias
                                            $categorias = ['Limpieza', 'Ubicación', 'Atención', 'Calidad-Precio'];

                                            // Generar una puntuación general aleatoria alta (entre 4.0 y 5.0)
                                            $puntuacion = rand(40, 50) / 10;

                                            foreach($categorias as $categoria) {
                                                // Generamos una puntuación aleatoria cercana a la general
                                                $puntuacionCategoria = min(5, max(4, $puntuacion + (rand(-5, 10) / 10)));
                                                $porcentaje = ($puntuacionCategoria / 5) * 100;
                                            ?>
                                            <div>
                                                <div class="flex justify-between mb-1">
                                                    <span class="text-sm font-medium"><?php echo $categoria; ?></span>
                                                    <span class="text-sm font-semibold"><?php echo number_format($puntuacionCategoria, 1); ?></span>
                                                </div>
                                                <div class="w-full bg-gray-200 rounded-full h-2">
                                                    <div class="bg-yellow-400 h-2 rounded-full" style="width: <?php echo $porcentaje; ?>%"></div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Footer con botones de acción -->
                            <div class="sticky bottom-0 flex justify-end p-6 border-t bg-white">
                                <div class="flex gap-4">
                                    <label for="modal-toggle-<?php echo $item['id_lodge']; ?>" class="px-6 py-2 rounded-lg border border-gray-300 text-gray-700 font-medium hover:bg-gray-100 transition-colors cursor-pointer">
                                        Cerrar
                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>


</body>
</html>