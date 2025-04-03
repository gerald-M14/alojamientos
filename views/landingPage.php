<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut Icon" type="image/png" href="../src/images/Logo-icono.png" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Lading Page</title>
</head>

<body>

    <!-- BEGINNING OF NAVBAR -->
    <nav class="bg-[#014f52]  fixed w-full h-3xl z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-7 px-4">

            <!-- LOGO -->
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../public/img/Logo-texto-blanco.png" class="h-8" alt="Flowbite Logo">
            </a>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-[#014f52] bg-[#73eaaa] focus:outline-none focus:ring-blue-300 font-medium hover:cursor-pointer
                 rounded-lg text-sm px-4 py-2 text-center">Login</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <!-- MENU -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 
                   rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">

                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-[#73eaaa] rounded-sm md:bg-transparent  md:p-0"
                            aria-current="page">Registra tu alojamiento</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm
                             hover:bg-[#014f52] md:hover:bg-transparent md:hover:text-[#fdcd6c] md:p-0 md:dark:hover:text-[#fdcd6c]
                              dark:text-white dark:hover:bg-[#fdcd6c] dark:hover:text-[#014f52] md:dark:hover:bg-transparent dark:border-gray-700">Atracciones
                            turisticas</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm
                             hover:bg-[#014f52] md:hover:bg-transparent md:hover:text-[#fdcd6c] md:p-0 md:dark:hover:text-[#fdcd6c]
                              dark:text-white dark:hover:bg-[#fdcd6c] dark:hover:text-[#014f52] md:dark:hover:bg-transparent dark:border-gray-700">Servicios</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#fdcd6c] md:p-0
                             md:dark:hover:text-[#fdcd6c] dark:text-white dark:hover:bg-[#fdcd6c] dark:hover:text-[#014f52] md:dark:hover:bg-transparent
                              dark:border-gray-700">Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- END OF NAVBAR -->

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


</body>

</html>