<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="./css/output.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.9.3/dist/cdn.min.js" defer></script>
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
<body class="bg-white  font-[Poppins] ">
  
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
      <ul class="space-y-2 font-medium">
         <li class="px-3">
            <a href="{{ url('main') }}" class="flex items-center p-2  rounded-lg  hover:bg-gray-100  group">
               <img src="gambar/Home.svg" alt="" class="">
               <span class="ms-3 text-[#442A73]">Home</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5" >
         <li class="px-3">
            <p class="text-red-600 ml-2 font-semibold text-lg">Kategori</p>
            <a href="{{ url('main2') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group mt-2">
               <img src="gambar/vaccine 1.svg" alt="">
               <span class="ms-3 text-[#442A73]">Obat-Obatan</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="px-3">
            <a href="{{ url('main3') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
               <img src="gambar/Heart.svg" alt="">
               <span class="ms-3 text-[#442A73]">Ibu & Anak</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="px-3">
            <a href="{{ url('main4') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 group">
               <img src="gambar/Vector.svg" alt="">
               <span class="ms-3 text-[#442A73]">Kosmetik</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="px-3">
            <p class="font-semibold text-lg text-red-600 ml-2">Menu</p>
            <a href="{{ url('pesan') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 group mt-2">
               <img src="gambar/Message.svg" alt="">
               <span class="ms-3 text-[#442A73]">Pesan</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="px-3">
            <a href="{{ url('keranjang') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 group">
               <img src="gambar/Buyred.svg" alt="">
               <span class="ms-3 text-red-600">Keranjang</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="px-3">
            <a href="{{ url('kirim') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
               <img src="gambar/Document.svg" alt="">
               <span class="ms-3 text-[#442A73]">Kirim Resep</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="px-3">
            <a href="{{ url('riwayatuser') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group">
               <img src="gambar/card-checklist.svg" alt="">
               <span class="ms-3 text-[#442A73]">Riwayat Pembelian</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="">
            <a href="{{ url('tentanguser') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 mt-[10vh] md:mt-[5vh] group">
               <img src="gambar/exclamation-circle.svg" alt="" class="ml-[6px]">
               <span class="ms-3 text-[#442A73] pl-1">Tentang Kami</span>
            </a>
         </li>
         <li class="mt-0">
            <a href="{{ url('pengaturanuser') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group ">
               <img src="gambar/Setting.svg" alt="">
               <span class="ms-3 text-[#442A73]">Pengaturan</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<div class="p-0 md:ml-64">
   <div class="p-0  border-gray-200 rounded-lg ">
      <div class="flex justify-between mb-4 ">
         <div class="flex mt-2">
            <div class="border-l-4 h-16 border-red-600"></div>
            <span class="font-bold text-xl text-red-600 ml-2">Menu <span class="text-2xl text-black"><br>Keranjang</span></span>
         </div>
         <div class="ml-5 xl:ml-10 p-4">
            <a href="{{ url('/') }}" class=" md:w-36 xl:w-40 p-2 bg-red-600 hover:bg-red-800 flex rounded-3xl mt-1 shadow-xl">
               <img src="gambar/Profile.svg" alt="" class="ml-1">
               <p class="ml-2 mt-1 text-white font-normal text-sm xl:text-md">Login/Sign Up</p>
            </a>
         </div>      
      </div>
      <hr class="h-0.5 bg-gray-600">
      <div class="flex p-4">
         <img src="gambar/Rectangle 4236.png" alt="">
         <div class="justify-between ml-3 w-full flex mt-9">
            <span class="font-bold text-lg md:text-2xl text-black">Paramex (Obat sakit kepala) <span class="text-lg text-gray-500"><br>RP.0</span></span>
            <!-- <div class="flex mr-5">
               <div class="border-2 w-10 h-10 p-2 pl-[11px] pt-1 font-black text-2xl">+</div>
               <div class="border-2 w-10 h-10 p-2 pl-3.5">1</div>
               <div class="border-2 w-10 h-10 p-2 pl-3.5 pt-1 font-black text-2xl">-</div>
            </div> -->
            <div class="text-center">
               <div class="flex items-center justify-center space-x-4 border-2 border-black rounded-lg">
                   <button id="decrementBtn"
                       class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300">
                       -
                   </button>
                   <span id="count" class="text-3xl font-bold">0</span>
                   <button id="incrementBtn"
                       class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                       +
                   </button>
               </div>
           </div>
         </div>  

      </div>
      <hr class="h-0.5 bg-gray-600">
      <div class="h-[50vh]"></div>
      <hr class="h-0.5 bg-gray-600 mt-5">
      <div class="flex justify-between">
         <span class="font-bold text-2xl ml-2 mt-2">Item <span class="text-lg text-gray-600"><br>Total RP.0</span></span>
         <button class="text-white bg-red-600 hover:bg-red-800 font-bold text-2xl py-6 px-8 rounded-l-md">Pesan(0)</button>

      </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script>
   const countDisplay = document.getElementById('count');
   const incrementBtn = document.getElementById('incrementBtn');
   const decrementBtn = document.getElementById('decrementBtn');

   let count = 0;

   incrementBtn.addEventListener('click', () => {
       count++;
       countDisplay.textContent = count;
   });

   decrementBtn.addEventListener('click', () => {
       if (count > 0) {
           count--;
           countDisplay.textContent = count;
       }
   });
</script>
</body>
</html>