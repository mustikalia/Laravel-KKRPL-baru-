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
            <span class="font-bold text-xl text-red-600 ml-2">Menu <span class="text-2xl text-black"><br>Deskripsi Obat</span></span>
         </div>
         <div class="ml-5 xl:ml-10 p-4">
            <a href="{{ url('/') }}" class=" md:w-36 xl:w-40 p-2 bg-red-600 hover:bg-red-800 flex rounded-3xl mt-1 shadow-xl">
               <img src="gambar/Profile.svg" alt="" class="ml-1">
               <p class="ml-2 mt-1 text-white font-normal text-sm xl:text-md">Login/Sign Up</p>
            </a>
         </div>      
      </div>
      <div class="flex">
         <div class="ml-5">
            <img src="gambar/Rectangle 4236.png" alt="" class="w-64">
            <div class=" flex space-x-2 mt-4">
               <button class="bg-green-600 hover:bg-green-700 py-2 px-6  rounded-lg mt-4 w-32 flex shadow-2xl">
                  <img src="gambar/Bag 2.svg" alt="">
                  <p class="font-semibold text-lg text-white ml-2">Beli</p>
               </button>
               <button class="bg-red-600 hover:bg-red-700 py-2 px-2  rounded-lg mt-4 w-32 flex shadow-2xl">
                  <img src="gambar/Buy2.svg" alt="">
                  <p class="font-semibold text-lg text-white ml-2">Keranjang</p>
               </button>
            </div>
         </div>
         <div class="ml-4">
            <p class="font-bold text-3xl">Paramex Tablet (per Strip)</p>
            <p class=" font-normal text-lg text-gray-500">Paramex merupakan obat yang digunakan untuk meredakan demam dan rasa nyeri atau sakit kepala ataupun sakit gigi.
               Paramex mengandung kombinasi beberapa zat aktif dengan mekanisme kerja sebagai berikut:</p>
            <p class=" font-normal text-lg text-gray-500 ml-2">1. Paracetamol (Acetaminophen) adalah zat aktif yang memiliki aktivitas sebagai penurun demam/antipiretik dan pereda nyeri/analgesik yang bekerja dengan cara menghambat pembentukan prostaglandin yaitu zat yang memicu nyeri dan demam di hipotalamus untuk meningkatkan pelepasan panas supaya suhu tubuh normal.</p>
            <p class=" font-normal text-lg text-gray-500 ml-2">2. Propyohenazone adalah obat turunan Phenazone dengan efek antiinlamasi, analgesik atau pereda nyeri sekaligus penurun demam. Efek samping yang ditimbulkan secara umum pada obat ini adalah diskrasia darah atau kelainan pada sel darah.
            </p>
            <p class=" font-normal text-lg text-gray-500 ml-2">3. Kafein adalah obat yang bekerja sebagai stimulan sistem saraf pusat yang berfungsi untuk mencegah rasa kantuk dengan menghambat aksi adenosine secara reversibel.
            </p>
            <p class=" font-normal text-lg text-gray-500 ml-2">4. Dexchlorpheniramine maleate adalah zat aktif yang digunakan untuk mengobati gejala alergi seperti rhinitis dan urtikaria. Termasuk dalam golongan antihistamin generasi pertama yang memiliki efek sedatif rendah.</p>
            
         </div>
      </div>
      <div>
         <p class="font-bold text-3xl ml-5 mb-2">Detail Obat</p>
         <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 container mx-auto ">
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">Penyajian</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">Penyajian</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">Kegunaan</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">Sub Kategori</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">Dosis</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16"> Efek Samping</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">Cara Penyimpanan</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">Nama Standar MIMS</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">Perhatian</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">No Izin Edar</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">Pabrik</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
            <div>
               <p class="font-bold text-2xl text-center mt-6 md:mt-16">Golongan Obat</p>
               <p class="text-center mx-auto">Lorem ipsum dolor sit amet, </p>
            </div>
         </div>
      </div>
   
      
      <hr class="h-0.5 bg-gray-600 mt-40">
      <div class="flex justify-between">
         <span class="font-bold text-2xl ml-2 mt-2">Item <span class="text-lg text-gray-600"><br>Total RP.0</span></span>
         <button class="text-white bg-red-600 hover:bg-red-800 font-bold text-2xl py-6 px-8 rounded-l-md">Pesan(0)</button>

      </div>
      
      



  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>