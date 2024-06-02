<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
    body {
        font-family: 'Poppins';
    }
    </style>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <section class="flex flex-col min-h-screen text-white bg-center bg-cover bg-blend-overlay  bg-black/70" style="background-image: url('gambar/background.png')">
      <div class="flex flex-col m-auto">
        <p class=" font-bold text-2xl text-center">WELCOME TO APOTEK <span class="font-bold text-xl"><br> HINDA FARMA</span></p>
        <a href="{{ url('login2') }}" class="bg-red-700 py-2 w-48 mx-auto mt-5 rounded-xl font-semibold text-center">
          Login
        </a>
        <a href="{{ url('signup') }}" class="bg-red-700 py-2 w-48 mx-auto mt-5 rounded-xl font-semibold text-center">
          Sign Up
        </a>
      </div>
    </section>
  </body>
</html>
