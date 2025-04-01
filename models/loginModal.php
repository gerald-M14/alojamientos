<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <!-- WRAPPER -->
    <div class="flex flex-col items-center justify-center min-h-screen bg-[#E9E3C0]
     ">
        <!-- MAINCONTAINER -->
        <div class="flex flex-col space-y-6 bg-white rounded-md max-w-md w-full mx-auto 
         md:flex-row md:max-w-3xl md:space-y-0 md:pr-0">
            <!-- Log in and x -->
            <div class="flex flex-col space-y-4 p-6 ">
                <div class="flex justify-between text-2xl">
                    <h2>Log in</h2>
                    <p class="text-3xl text-[#4be6a4] md:hidden"><i class="fa-solid fa-circle-xmark"></i></p>
                </div>

                <p>Log in to your account to upload or download pictures,videos or music</p>

                <div class="flex flex-col space-y-4  ">
                    <div class="border border-solid border-[#cccc] py-4 px-4.5"><input class="w-full focus:outline-none"
                            type="text" placeholder="Enter your email address"></div>
                    <div class="border border-solid border-[#cccc] py-4 px-4.5"><input class="w-full focus:outline-none"
                            type="text" placeholder="Enter your password"></div>
                    <p class="text-[#015057] text-center">Forgot password</p>
                </div>

                <button
                    class="bg-[#015057] text-white py-4 rounded-md gap-4 flex items-center justify-center transition-all duration-500 hover:bg-[rgba(1,80,87,0.8)] hover:cursor-pointer hover:gap-6">Next
                    <p>
                        <i class="fa-solid fa-arrow-right">
                    </p></i>
                </button>

                <hr class="border-[#cccc]">

                <p class="text-center text-[#707070]">or log in with</p>

                <div class="flex flex-col gap-4 items-center justify-center">
                    <button
                        class="border border-solid border-[#cccc] py-4 px-8 w-full flex items-center justify-center hover:cursor-not-allowed "><img
                            class="w-9 mr-4" src="/logingModal/alojamientos/src/images/facebook.png" alt="">
                        <p>Facebook</p>
                    </button>
                    <button
                        class="border border-solid border-[#cccc] py-4 px-8 w-full flex items-center justify-center hover:cursor-not-allowed"><img
                            class="w-9 mr-4" src="
                    /logingModal/alojamientos/src/images/google.png" alt="">
                        <p>Google</p>
                    </button>
                </div>
            </div>






            <!-- RIGHT -->
            <div class="hidden md:flex justify-end w-full relative">
                <figure class="flex w-sm">
                    <img class="rounded-r-lg" src="/logingModal/alojamientos/src/images/image-1.jpg" alt="">
                </figure>
                <p
                    class="absolute text-4xl -top-4 -right-4 text-[#343434] rounded-[50%] shadow-lg hover:cursor-pointer">
                    <i class=" fa-solid fa-circle-xmark "></i></p>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/4a9599b20b.js" crossorigin="anonymous"></script>
</body>

</html>