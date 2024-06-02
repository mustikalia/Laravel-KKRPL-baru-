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
               <img src="gambar/message.svg" alt="">
               <span class="ms-3 text-[#442A73]">Pesan</span>
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
               <img src="gambar/exclamation-circlered.svg" alt="" class="ml-[6px]">
               <span class="ms-3 text-red-600 pl-1">Tentang Kami</span>
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
      <div class="flex mb-4 justify-between">
         <div class="flex mt-2">
            <div class="border-l-4 h-16 border-red-600"></div>
            <span class="text-2xl text-black font-bold my-auto ml-3">Edit Tentang Kami</span>
         </div>
         <a href="" class="flex flex-row px-4 ">
            <img src="gambar/check2-circle.svg" alt="">
            <p class="text-[#442A73] text-xl font-semibold  my-auto ml-3">Simpan</p>
         </a>
      </div>
      <div class="container">
         <p class="text-3xl font-bold px-6 mb-3">Alamat Apotek Hinda Farma</p>
         <div class="flex px-6 justify-between">
            <p class="text-xl font-semibold">Jl. Monumen Emmy Saelan 3 Ruko A10, Karunrung, Rappocini.</p>
            <a href="" class="flex flex-col md:flex-row  px-4  md:mt-0">
               <img src="gambar/pencil-square.svg" alt="">
               <p class="text-red-600 text-xl font-semibold mt-2 md:my-auto ml-3">Edit</p>
            </a>
         </div>
         <hr class="h-0.5 bg-gray-600 mt-2">
         <p class="text-3xl font-bold px-6 mb-3 mt-3">Contact Person </p>
         <div class="flex px-6 justify-between mb-4">
            <div>
               <div class="flex flex-row">
                  <img src="gambar/instagram.svg" alt="">
                  <p class="text-lg font-semibold ml-3 mt-0.5">apotekhindafarma</p>
               </div>
               <div class="flex flex-row pl-1 mt-3">
                  <img src="gambar/telephone.svg" alt="">
                  <p class="text-lg font-semibold ml-3 mt-0.5">085343663204</p>
               </div>
            </div>
            <a href="" class="flex flex-col md:flex-row  px-4  md:mt-0">
               <img src="gambar/pencil-square.svg" alt="">
               <p class="text-red-600 text-xl font-semibold mt-2 md:my-auto ml-3">Edit</p>
            </a>
         </div>
         <hr class="h-0.5 bg-gray-600 mt-2">
      </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>