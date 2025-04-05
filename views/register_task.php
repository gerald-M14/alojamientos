<?php

    require_once "../controller/LoginController.php";
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


    <title>Document</title>
</head>
<body class="bg-gray-100 text-gray-800">

    <?php 
        require_once "../controller/ManagerController.php";
        $lodgeTypes = ManagerController::getAllType(); //[]
        $services = ManagerController::getAllService(); //[]

    ?>

    <!-- header -->

    <header class=" top-0 left-0 right-0 z-50 bg-slate-800" id="header">
        <nav class="container mx-auto px-4 lg:px-8 py-4">
            <div class="flex flex-wrap justify-between items-center">
                <a href="../views/UserView.php" class="flex items-center">
                    <img src="../public/img/Logo-texto-blanco.png" class="h-12 sm:h-10" alt="Logo" />
                </a>
                
                
                <div class="hidden lg:flex lg:items-center lg:w-auto" id="desktop-menu">
                    <ul class="flex flex-row space-x-8 mt-0 font-medium">
                        <li>
                            <a href="../views/adminView.php" class="block py-2 text-white hover:text-teal-400 transition-colors duration-300 nav-link">Inicio</a>
                        </li>
                    <li>
                            <a href="../views/register_task.php" class="block py-2 text-teal-600 border-b-2 border-teal-600 hover:text-teal-800 transition-colors duration-300" aria-current="page">Registrar alojamiento</a>
                        </li>
                        
                    </ul>
                </div>
                
                <!-- Botones de acción -->
                <div class="hidden lg:flex items-center space-x-4">
                    <span class="px-3 font-medium text-white">Hola, <?php echo $_SESSION['User']; ?></span>
                    <form action="" method="POST">
                    <button name="logout" type="submit" class="py-2 px-3 bg-teal-500 text-white rounded-lg text-center font-medium cursor-pointer">Cerrar sesión</button>
                    </form>
                    </div>

                    <?php
                        if(isset($_POST['logout'])){
                            LoginController::logout();
                        }
                    ?>                    
                </div>
            </div>
            
            
        </nav>
    </header>

    

    <!-- Título de sección -->
    <div class="container mx-auto px-4 mt-16 mb-8">
        <h2 class="text-3xl font-bold text-gray-800 text-center">Crear alojamiento</h2>
    </div>

    <div class="container mx-auto p-5">
        
        <form action="../controller/ManagerController.php" method="POST" class="container__form w-full max-w-xl mx-auto space-y-8">

                <div class="form__item flex flex-col space-y-2 mb-6">
                <label for="name" class="text-gray-600 font-bold">Nombre del alojamiento</label>
                <input type="text" name="name" id="name" class="bg-gray-200 border-2 rounded-lg w-full py-3 px-4" required>
            </div>

            <div class="form__item flex flex-col space-y-2 mb-6">
                <label for="address" class="text-gray-600 font-bold">Dirección</label>
                <input type="text" name="address" id="address" class="bg-gray-200 border-2 rounded-lg w-full py-3 px-4" required>
            </div>

            <div class="form__item flex flex-col space-y-2 mb-6">
                <label for="price" class="text-gray-600 font-bold">Precio</label>
                <input type="number" name="price" id="price" class="bg-gray-200 border-2 rounded-lg w-full py-3 px-4" step="0.01" required>
            </div>

            <div class="form__item flex flex-col space-y-2 mb-6">
                <label for="URLimage" class="text-gray-600 font-bold">Imagen (URL)</label>
                <input type="text" name="URLimage" id="URLimage" class="bg-gray-200 border-2 rounded-lg w-full py-3 px-4">
            </div>

            <!-- SELECT de lodgeType -->
            <div class="form__item flex flex-col space-y-2 mb-6">
                <label for="id_lodgeType" class="text-gray-600 font-bold">Tipo de alojamiento</label>
                <select name="id_lodgeType" id="id_lodgeType" class="bg-gray-200 border-2 rounded-lg w-full py-3 px-4" required>
                    <option value="">Seleccione un tipo</option>
                    <?php foreach($lodgeTypes as $type): ?>
                        <option value="<?php echo $type['id_lodgeType']; ?>">
                            <?php echo $type['lodge_type']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Teléfono y email -->
            <h4 class="text-gray-800 font-bold text-xl">Datos de contacto</h4>
            <div class="form__item flex flex-col space-y-2 mb-6">
                <label for="phone" class="text-gray-600 font-bold">Teléfono</label>
                <input type="text" name="phone" id="phone" class="bg-gray-200 border-2 rounded-lg w-full py-3 px-4">
            </div>

            <div class="form__item flex flex-col space-y-2 mb-6">
                <label for="email" class="text-gray-600 font-bold">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-200 border-2 rounded-lg w-full py-3 px-4">
            </div>

            <!-- Selección de Servicios -->
            <div class="form__item flex flex-col space-y-2 mb-6">
                <label for="services" class="text-gray-600 font-bold">Servicios</label>
                <?php foreach($services as $service): ?>
                    <div>
                        <input type="checkbox" name="services[]" value="<?php echo $service['id_service']; ?>">
                        <label><?php echo $service['service']; ?></label>
                    </div>
                <?php endforeach; ?>
            </div>

            <input type="hidden" name="action" value="saveNewAccommodation">

            <button type="submit" class="cursor-pointer w-full rounded-md bg-slate-800 py-2 px-4 text-white font-semibold hover:bg-[#D91C1C]">Guardar alojamiento</button>
        </form>
        

    </div>
</body>
</html>