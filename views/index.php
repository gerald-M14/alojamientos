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
    <?php 
        require_once "../controller/ManagerController.php";
        $list_accommodation = ManagerController::getAccommodation(); //[]
    ?>

    <!-- BEGINNING OF NAVBAR -->
    <nav class="bg-[#014f52]  fixed w-full h-3xl z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-7 px-4">

            <!-- LOGO -->
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../public/img/Logo-texto-blanco.png" class="h-8" alt="Flowbite Logo">
            </a>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="./loginModal.php" type="button"
                    class="text-[#014f52]
                 bg-[#73eaaa] focus:outline-none focus:ring-blue-300 font-medium hover:cursor-pointer
                 rounded-lg text-sm px-4 py-2 text-center md:mx-4 transition-all duration-200 hover:scale-110 hover:bg-[#fdcd6c] active:scale-100">Login</a>
                <!-- SIGNIN -->
                <a href="./signinModal.php" type="button"
                    class="text-[#014f52]
                 bg-[#73eaaa] focus:outline-none focus:ring-blue-300 font-medium hover:cursor-pointer
                 rounded-lg text-sm px-4 py-2 text-center transition-all duration-200 hover:scale-110 hover:bg-[#fdcd6c] active:scale-100">Sign in</a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 
                    focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700
                     dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
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
    <main>
        <!-- Hero Sections -->
        <section class="relative w-full mx-auto h-[40rem] bg-[#014f52] before:content-[''] before:absolute before:top-0 before:left-0 before:w-full
             before:h-full before:bg-black before:opacity-35 before:z-0 ">

            <img src="../public/img/heroSection.jpg" alt="Hero Image"
                class="w-full h-[40rem] object-cover object-center ">
            <div
                class="absolute bottom-[4rem] left-[4rem] md:left-[7rem]  max-w-[20rem] md:max-w-[28rem] leading-tight z-10">
                <h6 class="text-white text-[1.5rem] ">Explora las maravillas</h6>
                <h1 class="text-white text-[2rem] font-bold ">Descubre un nuevo mundo en cada viaje, en cada
                    aventura
                </h1>
                <div class="flex group items-center justify-center py-4 px-4 mt-6 bg-transparent rounded-xl border-2 border-white text-white
                    trasition-all duration-200 hover:scale-110 hover:cursor-pointer">
                    <a href="#" class="transition-all duration-500">Descubrir <i
                            class="fa-solid fa-arrow-right group-hover:ml-4"></i></a>
                </div>
            </div>
        </section>

        <!--CARD LODGINGS  -->

        <Section class=" px-8 md:max-w-[95rem] md:px-32 mb-[8rem] mx-auto mt-10">
            <!-- TITLE SECTION -->
            <div class="flex flex-col items-center justify-center mt-10">
                <h1 class="text-center text-[#014f52] text-[2rem] font-bold mt-10">Alojamientos</h1>
                <p class="text-center text-[#014f52] text-[1.5rem] font-bold mt-4">Encuentra el lugar perfecto para
                    hospedarte</p>
            </div>
            <!-- CARDAS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mt-10">
                <?php foreach($list_accommodation as $item){ ?>
                <div class="shadow-xl bg-white w-full h-full min-h-[400px] flex flex-col rounded-lg p-4 ">
                    <figure class="rounded-lg overflow-hidden aspect-[4/3] h-[200px] flex-shrink-0">
                        <img src="<?php echo $item['URLimage'];?>" class="w-full h-full object-cover" alt="">
                    </figure>

                    <div class="mt-4 flex flex-col flex-grow justify-between">
                        <div class="flex items-center justify-between gap-4">
                            <h2 class="font-bold"><?php echo $item['name']; ?></h2>
                            <p class="bg-[#73eaaa] py-1 px-8 rounded-[1rem]"><?php echo $item['lodge_type'] ?></p>
                        </div>
                        <hr class="border-t-1 border-gray-400 my-4" />

                        <div>
                            <h3 class="font-bold">Ubicacion</h3>
                            <p class="text-sm text-gray-400"><?php echo $item['address']?></p>
                        </div>

                        <div class="block w-full text-center mt-8 bg-[#014f52] text-white py-2 rounded-[1rem]">
                            <a href="./loginModal.php ">Más información</a>
                        </div>




                    </div>




                </div>
                <?php } ?>
            </div>

            <!-- ACCORDION -->
            <div>
                <div class="flex flex-col items-center justify-center mt-10">
                    <h1 class="text-center text-[#014f52] text-[2rem] font-bold mt-10">Preguntas frecuentes</h1>

                </div>

                <hr class="border-t-1 border-gray-400 my-4" />

                <div id="accordion-color" data-accordion="collapse"
                    data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white mt-16">
                    <h2 id="accordion-color-heading-1">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0
                             border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200
                               hover:bg-[#014f52] gap-3" data-accordion-target="#accordion-color-body-1"
                            aria-expanded="true" aria-controls="accordion-color-body-1">
                            <span>Que es code & stay</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Neque minus iure excepturi distinctio consequatur, ipsam inventore
                                ducimus ratione. Assumenda quis repudiandae, velit doloremque eum sapiente distinctio
                                nobis blanditiis nesciunt voluptatem!.</p>
                            <p class="text-gray-500 dark:text-gray-400">Lorem ipsum dolor <a
                                    href="/docs/getting-started/introduction/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Lorem ipsum dolor</a> Lorem
                                ipsum dolor
                                Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right
                             text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200
                                dark:text-gray-400 hover:bg-[#014f52]
                                gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                            aria-controls="accordion-color-body-2">
                            <span>Lorem ipsum dolor</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Neque minus iure excepturi distinctio consequatur, ipsam inventore
                                ducimus ratione. Assumenda quis repudiandae, velit doloremque eum sapiente distinctio
                                nobis blanditiis nesciunt voluptatem!.</p>
                            <p class="text-gray-500 dark:text-gray-400">Lorem ipsum dolor <a
                                    href="https://flowbite.com/figma/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Lorem ipsum dolor</a>
                                Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-3">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium
                             rtl:text-right text-gray-500 border border-gray-200 focus:ring-4
                              focus:ring-blue-200 hover:bg-[#014f52]
                               dark:text-gray-400  gap-3" data-accordion-target="#accordion-color-body-3"
                            aria-expanded="false" aria-controls="accordion-color-body-3">
                            <span>Lorem ipsum dolor?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Neque minus iure excepturi distinctio consequatur, ipsam inventore
                                ducimus ratione. Assumenda quis repudiandae, velit doloremque eum sapiente distinctio
                                nobis blanditiis nesciunt voluptatem!.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Neque minus iure excepturi distinctio consequatur, ipsam inventore
                                ducimus ratione. Assumenda quis repudiandae, velit doloremque eum sapiente distinctio
                                nobis blanditiis nesciunt voluptatem!.</p>


                        </div>
                    </div>
                </div>
            </div>

        </Section>





    </main>



    <footer class="bg-white rounded-lg shadow-sm m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="../public/img/Logo-completo.png" class="h-32" alt="Flowbite Logo" />

                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a
                    href="https://flowbite.com/" class="hover:underline">CODE & STAY™</a>. All Rights Reserved.</span>
        </div>
    </footer>






    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/4a9599b20b.js" crossorigin="anonymous"></script>


</body>

</html>