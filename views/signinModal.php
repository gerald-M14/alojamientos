<?php

session_start();
require_once "../controller/LoginController.php";


?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut Icon" type="image/png" href="../src/images/Logo-icono.png" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>


    <!-- WRAPPER -->
    <div class="relative flex flex-col items-center justify-center min-h-screen 
    bg-[url('https://img.freepik.com/free-photo/composition-small-airplanes-bus-passport-map_23-2148169874.jpg')] 
    bg-cover bg-center before:absolute before:inset-0 before:bg-[#1c4245] before:opacity-50 before:content-[''] z-0">




        <!-- MAINCONTAINER -->
        <div class="flex flex-col space-y-6 bg-white rounded-md my-4  max-w-sm w-full mx-auto 
         md:flex-row md:max-w-3xl md:space-y-0 md:pr-0  z-10">
            <!-- Log in and x -->
            <div class="flex flex-col space-y-4 p-6 ">
                <div class="flex justify-between text-2xl">
                    <h2>Sign in</h2>
                    <a href="./landingPage.php" class="text-3xl text-[#4be6a4] md:hidden"><i
                            class="fa-solid fa-circle-xmark"></i></a>
                </div>

                <p>Sign in and have access to a whole new world, hurry up now, the sooner the better.</p>

                <!-- inputsFORM -->
                <form action="" method="POST" class="flex flex-col">
                    <div class="flex flex-col space-y-4  ">
                        <div class="border border-solid border-[#cccc] py-4 px-4.5">
                            <!-- EMAIL -->
                            <input class="w-full focus:outline-none" type="text" name="name"
                                placeholder="Enter your name">
                            <!--  -->
                        </div>
                        <div class="border border-solid border-[#cccc] py-4 px-4.5">
                            <!--PASSWORD  -->
                            <input class="w-full focus:outline-none" type="text" name="email"
                                placeholder="Enter your Email address">
                            <!--  -->
                        </div>

                        <div class="border border-solid border-[#cccc] py-4 px-4.5">
                            <!--PASSWORD  -->
                            <input class="w-full focus:outline-none" type="password" name="password"
                                placeholder="Enter your password">
                            <!--  -->
                        </div>

                        <div class="border border-solid border-[#cccc] py-4 px-4.5">
                            <!--PASSWORD  -->
                            <input class="w-full focus:outline-none" type="text" name="age"
                                placeholder="Enter your Age">
                            <!--  -->
                        </div>

                        <div class="border border-solid border-[#cccc] py-4 px-4.5">
                            <!--PASSWORD  -->
                            <select>
                                <option value="1">User</option>
                                <option value="2">Admin</option>
                            </select>
                            <!--  -->
                        </div>



                    </div>
                    <button type="submit" class="bg-[#015057] text-white py-4 rounded-md gap-4 flex items-center mt-4
                    justify-center transition-all duration-500 hover:bg-[rgba(1,80,87,0.8)]
                     hover:cursor-pointer hover:gap-6">Next
                        <p>
                            <i class="fa-solid fa-arrow-right">
                        </p></i>
                    </button>
                </form>

                <?php 
if(isset($_POST['email'], $_POST['password'])){
    $input_email = $_POST['email'];
    $input_password = $_POST['password'];

    echo LoginController::login($input_email, $input_password);
}
?>
                <hr class="border-[#cccc]">


            </div>






            <!-- RIGHT -->
            <div class="hidden md:flex justify-end w-full relative">
                <figure class="flex w-sm">
                    <img class="rounded-r-lg" src="../public/img/image-1.jpg" alt="">
                </figure>
                <a href="./landingPage.php" class="absolute text-4xl -top-4 -right-4 text-white rounded-[50%] shadow-xl transition-all duration-200
                    hover:text-[#fdcd6c] hover:scale-110 hover:cursor-pointer">
                    <i class=" fa-solid fa-circle-xmark "></i>
                </a>
            </div>
        </div>


    </div>
    <script src="https://kit.fontawesome.com/4a9599b20b.js" crossorigin="anonymous"></script>
</body>

</html>