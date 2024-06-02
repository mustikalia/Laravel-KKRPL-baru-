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
       font-family: 'Poppins';
   }
   #utama{
      font-family: 'Days One';
   }
   </style>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
  
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
               <img src="gambar/Buy.svg" alt="">
               <span class="ms-3 text-[#442A73]">Keranjang</span>
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
               <img src="gambar/card-checklistred.svg" alt="">
               <span class="ms-3 text-red-600">Riwayat Pembelian</span>
            </a>
         </li>
         <hr class="bg-gray-600 h-0.5">
         <li class="">
            <a href="{{ url('tentanguser') }}" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100 mt-[10vh] md:mt-[5vh] group">
               <img src="gambar/exclamation-circle.svg" alt="" class="ml-[6px]">
               <span class="ms-3 text-[#442A73] pl-1">Tentang Kami</span>
            </a>
         </li>
         <li class="">
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
            <span class="font-bold text-xl text-red-600 ml-2">Menu <span class="text-2xl text-black"><br>Riwayat Pembelian</span></span>
         </div>
         <div class="ml-5 xl:ml-10 p-4">
            <a href="{{ url('/') }}" class=" md:w-36 xl:w-40 p-2 bg-red-600 hover:bg-red-800 flex rounded-3xl mt-1 shadow-xl">
               <img src="gambar/Profile.svg" alt="" class="ml-1">
               <p class="ml-2 mt-1 text-white font-normal text-sm xl:text-md">Login/Sign Up</p>
            </a>
         </div>    
      </div>
      <div class="flex flex-col mb-3">
         <div class="flex flex-row px-2">
            <img src="gambar/geo-alt-fill.svg" alt="">
            <p class="text-2xl font-bold ml-2">Keterangan Pembeli</p>
         </div>
         <div class="flex justify-between px-3 mb-4">
            <div class="px-9">
               <p class="font-semibold text-xl">Udin</p>
               <span class="font-normal text-lg">Jl. Bendungan Bili-Bili II No.6 Kecamatan Rappocini<br>0813999999</span>
               <p class="font-bold text-2xl">Metode Pembayaran:</p>
               <div class="flex flex-row">
                  <img src="gambar/cash-coin.svg" alt="" class="mt-1">
                  <p class="font-normal text-xl ml-2">Bayar Ditempat</p>
               </div>
            </div>
            <div class="px-6 py-3 my-auto text-center">
               <span class="text-xl font-normal">08 Februari 2024<br > 08.45</span> 
            </div>
         </div>
         <hr class="bg-gray-600 h-0.5">
         <div class="flex flex-col px-9 mt-3">
            <p class="text-2xl font-bold">Pesanan</p>
            <div class="flex justify-between pl-2 mt-2">
               <div class="flex flex-row">
                  <img src="gambar/Rectangle 4236.png" alt="">
                  <span class="font-bold text-lg md:text-2xl text-black  my-auto ml-4">Paramex (Obat sakit kepala) <span class="text-lg text-gray-500"><br>RP.0</span></span>
               </div>
               <div class="my-auto px-0 md:px-6">
                  <p class="text-xl font-semibold">Rp. 10.000</p>
               </div>
            </div>
            <div class="pl-2 mt-2">
               <p class="text-2xl font-bold">Keterangan Penerima</p>
               <p class="font-normal text-xl">Diterima Oleh ...</p>
               <a href="" class="flex flex-row underline">
                  <img src="gambar/image.svg" alt="">
                  <p class="font-normal text-xl ml-2">IMG 1234</p>
               </a>
            </div>
         </div>
      </div>
      <hr class="bg-gray-600 h-0.5 mt-[10vh]">
      <div class="w-full px-4 py-3 flex flex-col my-auto ">
         <p class="font-bold text-2xl ">1 Item</p>
         <p class="text-lg font-semibold text-[#656565]">Total Rp. 10.000</p>
      </div>
      
      
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>