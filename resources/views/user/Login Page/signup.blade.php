<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/output.css">
    <style>
        body {
            font-family: 'Poppins';
        }
        #utama{
      font-family: 'Days One';
   }
        </style>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="flex flex-col min-h-screen text-white bg-center bg-cover bg-blend-overlay  bg-black/70" style="background-image: url('gambar/background.png')">
        <div class="bg-white m-auto w-55% md:w-[50%] py-10 px-10 rounded-xl">
            <div class="flex justify-center ml-0 md:-ml-24 xl:-ml-40">
                <img src="gambar/logo.svg" alt="" class="hidden md:hidden lg:flex">
                <p class="text-red-600 font-semibold text-xl mt-3"><a href="">Sign Up</a> <span class="text-black font-normal text-lg"><br>Register and enjoy the benefits!</span></p>
            </div>
            <div class="mt-5">
                <div class="flex">
                    <input type="text" placeholder="Email" class="w-[170px] md:w-[500px] p-4 border border-gray-500 mx-auto text-black rounded-sm">
                </div>
                <div class="flex mt-2">
                    <input type="text" placeholder="Username" class="w-[170px] md:w-[500px] p-4 border border-gray-500 mx-auto text-black rounded-sm">
                </div>   
                <div class="flex mt-3 relative justify-center">
                    <input type="password" placeholder="Password" class="w-[170px] md:w-[500px] p-4 border border-gray-500 mx-auto text-black rounded-sm">
                    <img src="gambar/Icon.svg" alt="" class="absolute mt-5 -mr-[120px]  md:-mr-[400px] xl:-mr-[420px] flex sm:hidden md:hidden xl:flex">
                </div>   
                <div class="flex mt-3 relative justify-center">
                    <input type="password" placeholder="Password" class="w-[170px] md:w-[500px] p-4 border border-gray-500 mx-auto text-black rounded-sm">
                    <img src="gambar/Icon.svg" alt="" class="absolute mt-5 -mr-[120px]  md:-mr-[400px] xl:-mr-[420px] flex sm:hidden md:hidden xl:flex">
                </div>  
                <div class="flex">
                    <a href="{{ url('main') }}" class="bg-[#E8312D] py-2 w-[170px] md:w-[500px]  mx-auto mt-5 rounded-lg font-semibold text-xl text-center">
                        Login
                    </a>
                </div>
            </div>
            <div class="mt-4 flex flex-col">
                <p class="text-red-600 font-semibold text-lg flex justify-center">Or Sign Up with</p>
                <button class="w-36 md:w-48 p-2 bg-[#FDFAF3] mt-4 flex mx-auto drop-shadow-lg">
                    <img src="gambar/google.svg" alt="">
                    <p class="font-normal text-lg mt-2 md:ml-4 text-black">Google</p>
                </button>
            </div>
        </div>
    </div>
</body>
</html>