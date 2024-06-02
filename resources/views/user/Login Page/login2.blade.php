<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/output.css">
</head>
<body>
    <div class="flex flex-col min-h-screen text-white bg-center bg-cover bg-blend-overlay bg-black/70" style="background-image: url('gambar/background.png')">
        <div class="bg-white m-auto w-55% md:w-[50%] py-10 px-10 rounded-xl">
            <div class="flex justify-center ml-0 md:-ml-24 xl:-ml-40">
                <img src="gambar/logo.svg" alt="" class="hidden md:hidden lg:flex">
                <p class="text-red-600 font-semibold text-xl"><a href="">Login</a> <span class="text-black font-normal text-lg"><br>Dont have an account yet? <span class="font-semibold text-xl text-red-600"><a href="signup.php">Sign Up</a></span></span></p>
            </div>
            <div class="mt-5">
                <form method="POST" action="coba.php">
                    @csrf
                    <div class="flex">
                        <input type="text" name="username" placeholder="Username" class="w-[170px] md:w-[500px] p-4 border border-gray-500 mx-auto text-black rounded-sm">
                    </div>
                    <div class="flex mt-3 relative justify-center">
                        <input type="password" name="password" placeholder="Password" class="w-[170px] md:w-[500px] p-4 border border-gray-500 mx-auto text-black rounded-sm">
                        <img src="gambar/Icon.svg" alt="" class="absolute mt-5 -mr-[120px] md:-mr-[400px] xl:-mr-[420px] flex sm:hidden md:hidden xl:flex">
                    </div>
                    <div class="flex mt-4 ">
                        <p class="text-red-600 text-lg md:text-xl mr-6 sm:mr-8 md:mr-12 xl:mr-24 2xl:mr-52 underline mx-auto "><a href="">Forgot Password?</a></p>
                    </div>
                    <div class="flex flex-col">
                        <button type="submit" name="login" class="bg-[#E8312D] py-2 w-40 md:w-64 xl:w-96 mx-auto mt-5 rounded-xl font-semibold text-xl text-center">
                            Login
                        </button>
                        <a href="signup.php" class="bg-[#E8312D] py-2 w-40 md:w-64 xl:w-96 mx-auto mt-5 rounded-xl font-semibold text-xl text-center">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
            <div class="mt-4 flex flex-col">
                <p class="text-red-600 font-semibold text-lg flex justify-center">Or login with</p>
                <button class="w-36 md:w-48 p-2 bg-[#FDFAF3] mt-4 flex mx-auto drop-shadow-lg">
                    <img src="/gambar/google.svg" alt="">
                    <p class="font-normal text-lg mt-2 md:ml-4 text-black">Google</p>
                </button>
            </div>
        </div>
    </div>
</body>
</html>
