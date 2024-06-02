<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css/output.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
  <style>
   body {
       font-family: 'Poppins';font-size: 22px;
   }
   #utama{
      font-family: 'Days One';
   }
   </style>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-white  font-[Poppins]">
  
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg smhidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
  <span class="sr-only">Open sidebar</span>
  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
  <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
  </svg>
</button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full md:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-0 pt-4 py-2 md:py-4 overflow-y-auto bg-white  border-r-2">
      <a href="https://smktelkom-mks.sch.id" class="flex items-center ps-2.5 mb-5">
         <img src="gambar/logo1.svg" class="h-10 me-3 sm:h-16 relative" alt="Flowbite Logo" />
         <span class="self-center text-lg font-semibold text-red-600" id="utama">Apotik <span class="text-blue-600"><br>Hinda Farma</span></span>
      </a>
      <ul class="space-y-2 font-medium mt-7">
         <li class="px-3">
            <a href="{{ url('dashboard') }}" class="flex items-center p-2  rounded-lg  hover:bg-gray-100  group ml-0.5 mt-2">
               <img src="gambar/grid.svg" alt="">
               <span class="ms-3 text-[#442A73]">Dashboard</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="px-3">
            <a href="{{ url('stok') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group ml-0.5">
               <img src="gambar/box-seam.svg" alt="">
               <span class="ms-3 text-[#442A73]">Stok</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="px-3">
            <a href="{{ url('pesanadmin') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 group">
               <img src="gambar/messagered.svg" alt="">
               <span class="ms-3 text-red-600">Pesan</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="px-3">
            <a href="{{ url('resep') }}" class="flex items-center p-2 text-gray-900 rounded-lg -ml-0.5 hover:bg-gray-100 group mt-2">
               <img src="gambar/Document.svg" alt="">
               <span class="ms-3 text-[#442A73]">Resep</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="px-3">
            <a href="{{ url('riwayat') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 group">
               <img src="gambar/card-checklist.svg" alt="">
               <span class="ms-3 text-[#442A73]">Riwayat Pembelian</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="">
            <a href="{{ url('tentang') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 mt-[40vh] md:mt-[30vh] group">
               <img src="gambar/exclamation-circle.svg" alt="" class="ml-[6px]">
               <span class="ms-3 text-[#442A73] pl-1">Tentang Kami</span>
            </a>
         </li>
         <li class="mt-2">
            <a href="{{ url('pengaturan') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
               <img src="gambar/Setting.svg" alt="">
               <span class="ms-3 text-[#442A73]">Pengaturan</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<div class="p-0 md:ml-64">
   <div class="p-0  border-gray-200 rounded-lg ">
      <div class="flex justify-center mb-4 ">
         <div>            
            <form>   
               <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
               <div class="relative ">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                     <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                     </svg>
                  </div>
                  <input type="search" id="default-search" class="block sm:w-72 md:w-80 xl:w-[500px] p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500  " placeholder="Search..." required>           
               </div>
            </form>
         </div>
    
      </div>
      <p class="font-bold text-3xl ml-6 xl:ml-8">Pesan</p>
      <div class="mt-4">
         <hr class="bg-gray-600 h-0.5">
         <a href="{{ url('pesanadmin1') }}" class="flex p-4">
            <img src="gambar/Ellipse 115.png" alt="">
            <p class="font-bold text-xl ml-3 mt-2">Pelanggan 1 <span class="font-normal text-lg"><br>: Saya Butuh Bantuan</span> </p>
         </a>
         <hr class="bg-gray-600 h-0.5">
         <a href="" class="flex p-4">
            <img src="gambar/Ellipse 115.png" alt="">
            <p class="font-bold text-xl ml-3 mt-2">Pelanggan 2 <span class="font-normal text-lg"><br>: Saya Butuh Bantuan</span> </p>
         </a>
         <hr class="bg-gray-600 h-0.5">
         <a href="" class="flex p-4">
            <img src="gambar/Ellipse 115.png" alt="">
            <p class="font-bold text-xl ml-3 mt-2">Pelanggan 3 <span class="font-normal text-lg"><br>: Saya Butuh Bantuan</span> </p>
         </a>
         <hr class="bg-gray-600 h-0.5">
      </div>

   </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>