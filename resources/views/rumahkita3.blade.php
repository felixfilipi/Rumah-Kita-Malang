<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rumahkita - kos 3</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }

    </style>

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                                href="#about">About</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 md:text-xl "
                    href="/">
                    RUMAH KITA
                    <img src="assets/logo.jpeg" class="h-14 y-14 ml-5">
                </a>
            </div>
        </div>
    </nav>

    <div class="md:grid grid-cols-3 bg-gray-100">
        <div></div>
        <div class="bg-gray-100">
            <h1 class="text-4xl underline bold font-bold align-center text-center pt-5">RUMAH KITA 3</h1>
            <h3 class="text-xl align-center text-center mt-5 pb-4">Hostel</h3>
            <div class="grid grid-cols-3 mb-5">
                <div class="m-auto">
                    <a href="https://www.google.com/maps/dir//-7.9370255,112.6384444/@-7.9370886,112.6384913,21z">
                        <button class="bg-red-600 hover:bg-red-700 py-5 px-10 text-white bold text-lg rounded-xl">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> <br>Maps
                        </button>
                    </a>
                </div>
                <div class="m-auto">
                    <a href="https://business.google.com/initiateChat?args=ChcIAxITNDk3ODAyMTIxMzgwMDk0NjY0MhonSGFpLCBhZGEgeWFuZyBiaXNhIHNheWEgYmFudHUgaGFyaSBpbmk_Mj4KN3R5cGUuZ29vZ2xlYXBpcy5jb20vY2hhdC5ib3QucGxhdGZvcm0uQ3VzdG9tU2Vzc2lvbkRhdGESAwoBAlAEYgd3ZWJ2aWV3ajhodHRwOi8vcmJtLmdvb2cvcmJtbS1hdXRvcHVzaC9jb252ZXJzYXRpb25zL2NvbnZlcnNhdGlvbnIrCAMSEzQ5NzgwMjEyMTM4MDA5NDY2NDIaBGdtYmwiDDk2ODYxMDU1NDU0MKABzqm49vr_____AQ&hl=in&gl=ID&v=1&chtn=ACGVSk_U_o1t2uZFXO9phGlT_6g_gQ2wBQ">
                        <button class="bg-yellow-600 hover:bg-yellow-700 py-5 px-10 text-white bold text-lg rounded-xl">
                            <i class="fa fa-google" aria-hidden="true"></i> <br>Chat
                        </button>
                    </a>
                </div>
                <div class="m-auto">
                    <a href="https://api.whatsapp.com/send?phone=+6282231874897">
                        <button class="bg-green-600 hover:bg-green-700 py-5 px-8 ml-3 text-white bold text-lg rounded-xl">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-2xl text-center py-8">Kamar Atas Luar</h1>
    <section class="bg-white py-8">
      <div class="sm:grid grid-cols-3 gap-5 mx-4">
        <div class="container col-start-2">
            <video width="480" height="240" controls>
                <source src="assets/atas-luar.mp4" type="video/mp4">
            <div class="text-center py-4">Kasur tipe 160 + Lemari
            </div>
        </div>
        </div> 

    </section>

    <h1 class="text-2xl text-center py-8">Kamar Atas Dalam</h1>
    <section class="bg-white py-8">
        <div class="sm:grid grid-cols-3 gap-5 mx-4">
          <div class="container col-start-2">
            <video width="480" height="240" controls>
                <source src="assets/atas-dalem.mp4" type="video/mp4">
              <div class="text-center py-4">Kasur tipe 120 + Lemari
              </div>
          </div>
          </div> 
      </section>

      <h1 class="text-2xl text-center py-8">Kamar Bawah Dalam</h1>
    <section class="bg-white py-8">
        <div class="sm:grid grid-cols-3 gap-5 mx-4">
          <div class="container col-start-2">
            <video width="480" height="240" controls>
                <source src="assets/bawah-dalem.mp4" type="video/mp4">
              <div class="text-center py-4">Kasur tipe 120 + Lemari
              </div>
          </div>
          </div> 
      </section>

      <h1 class="text-2xl text-center py-8">Kamar Atas Kecil</h1>
    <section class="bg-white py-8">
        <div class="sm:grid grid-cols-3 gap-5 mx-4">
          <div class="container col-start-2">
            <video width="480" height="240" controls>
                <source src="assets/kecil-atas.mp4" type="video/mp4">
              <div class="text-center py-4">Kasur tipe 120 + Lemari
              </div>
          </div>
          </div> 
      </section>

    <hr>
    <section class="bg-white py-8">

        <div class="container py-8 px-6 mx-auto">

            <a id="about"
                class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8">
                Tentang Kos Ini
            </a>

            <p class="mt-8 mb-8">
                Menyediakan laundry dengan harga Rp. 5000/Kg. <br>
                Minimum check in Pk. 13:00.<br>
                Maximum check out Pk. 12:00.<br>
                Untuk melakukan check in tamu diharuskan untuk menunjukkan KTP / SIM.
            </p>

            <p class="mb-8">Lokasi Strategis dekat dengan minimarket (Indomart / Alfamart), dekat dengan Pasar Blimbing,
                bank, masjid, gereja, sekolah (Kolese Santo Yusup), Universitas Widya Gama (5 Menit), Universitas ASIA (5 Menit), 
                Universitas Brawijaya (10 Menit), dan juga Institut Teknologi Nasional Malang (15 Menit).  
            </p>

        </div>

    </section>

    <footer class="container mx-auto bg-white py-8 border-t border-gray-400">
        <div class="container flex px-3 py-8 ">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">RUMAH KITA</h3>
                        <p class="py-4">
                            Penyedia jasa penginapan / tempat tinggal sementara yang berlokasi di Kota Malang.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">Social Media</h3>
                        <ul class="list-reset items-center pt-3">
                            <li>
                                <a class="inline-block no-underline hover:text-black hover:underline py-1" href="mailto:rumahkitaest2015@gmail.com">  <i class="fa fa-envelope-square" aria-hidden="true"> rumahkitaest2015@gmail.com</i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
