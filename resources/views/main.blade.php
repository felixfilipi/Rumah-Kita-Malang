<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rumahkita - dashboard</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

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
        #carousel-3:checked~.control-3,
        #carousel-4:checked~.control-4,
        #carousel-5:checked~.control-5 {
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
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet,
        #carousel-4:checked~.control-4~.carousel-indicators li:nth-child(4) .carousel-bullet,
        #carousel-5:checked~.control-5~.carousel-indicators li:nth-child(5) .carousel-bullet {
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
                    href="">
                    RUMAH KITA
                    <img src="assets/logo.jpeg" class="h-14 y-14 ml-5">
                </a>
            </div>
        </div>
    </nav>

    <div class="carousel relative container mx-auto" style="max-width:1600px;">
        <div class="carousel-inner relative overflow-hidden w-full">

            <!-- slide 1 -->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:80vh;" id="carousel-1-item">

                <div class=" h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right"
                    style="background-image: url('assets/rumahkita1.jpeg');">


                    <a href="/items1">
                        <div class="container mx-auto">
                            <div
                                class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide bg-white rounded-xl py-5">
                                <p class="text-gray-700 text-2xl my-4 border-2 py-2 px-2 border-black bg-gray-400 hover:text-black">Rumah Kita 1  </p>
                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
                                    href="https://www.google.com/maps/place/Penginapan+Murah+Borobudur/@-7.9362968,112.6319463,15z/data=!4m9!1m2!2m1!1sPenginapan+Murah+Borobudur!3m5!1s0x2dd629eb9d81f98d:0x951b1ee1bc4799eb!8m2!3d-7.9362968!4d112.640701!15sChpQZW5naW5hcGFuIE11cmFoIEJvcm9idWR1clocIhpwZW5naW5hcGFuIG11cmFoIGJvcm9idWR1cpIBBWhvdGVsmgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVU5wTkdWMVduRjNSUkFC">View
                                    on Google Maps</a>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <label for="carousel-3"
                class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2"
                class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item hidden absolute opacity-0 bg-cover bg-right" style="height:80vh;"
                id="carousel-2-item">
                <div class="h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right"
                    style="background-image: url('assets/rumahkita2.jpeg');">
                    <a href="/items2">
                        <div class="container mx-auto">
                            <div
                                class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide bg-white rounded-xl py-5">
                                <p class="text-gray-700 text-2xl my-4 border-2 py-2 px-2 border-black bg-gray-400 hover:text-black">Rumah Kita 2</p>
                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
                                    href="https://www.google.com/maps/place/Kos+bebas+harian/@-7.9363897,112.6358246,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd629f8c9076ddf:0x960005584b1fb9aa!8m2!3d-7.9363897!4d112.6380133">View on Google Maps</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <label for="carousel-1"
                class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3"
                class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3 -->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item hidden absolute opacity-0" style="height:80vh;" id="carousel-3-item">
                <div class="h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom"
                    style="background-image: url('assets/rumahkita3.jpeg');">
                    <a href="/items3">
                    <div class="container mx-auto">
                        <div
                            class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide bg-white rounded-xl py-5">
                            <p class="text-gray-700 text-2xl my-4 border-2 py-2 px-2 border-black bg-gray-400 hover:text-black">Rumah Kita 3</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
                                href="https://www.google.com/maps/dir//-7.9370255,112.6384444/@-7.9370886,112.6384913,21z">View on Google Maps</a>
                        </div>
                    </div>
                </a>
                </div>

            </div>

            <label for="carousel-2"
                class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1"
                class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 4 -->
            <!--
            <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item hidden absolute opacity-0" style="height:80vh;" id="carousel-4-item">
                <div class="h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom"
                    style="background-image: url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                    <div class="container mx-auto">
                        <div
                            class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide bg-white rounded-xl py-5">
                            <p class="text-gray-700 text-2xl my-4 border-2 py-2 px-2 border-black bg-gray-400 hover:text-black">Rumah Kita 4</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
                                href="">View on Google Maps</a>
                        </div>
                    </div>

                </div>

            </div>

            <label for="carousel-3"
                class="prev control-4 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-5"
                class="next control-4 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        -->

            <!--Slide 5 -->

            <!--
            <input class="carousel-open" type="radio" id="carousel-5" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item hidden absolute opacity-0" style="height:80vh;" id="carousel-5-item">
                <div class="h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom"
                    style="background-image: url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                    <div class="container mx-auto">
                        <div
                            class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide bg-white rounded-xl py-5">
                            <p class="text-gray-700 text-2xl my-4 border-2 py-2 px-2 border-black bg-gray-400 hover:text-black">Rumah Kita 5</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
                                href="">View on Google Maps</a>
                        </div>
                    </div>

                </div>

            </div>

            <label for="carousel-4"
                class="prev control-5 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1"
                class="next control-5 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        -->
            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1"
                        class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <!--
                <li class="inline-block mr-3">
                    <label for="carousel-4"
                        class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-5"
                        class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            -->
            </ol>

        </div>

    </div>

    <div class="md:grid grid-cols-3 bg-gray-100">
        <div></div>
        <div class="bg-gray-100">
            <h1 class="text-4xl underline bold font-bold align-center text-center pt-5" id="kos_status">KOS BEBAS</h1>
            <h3 class="text-xl align-center text-center mt-5" id="kos_type">Motel</h3>
            <h2 class="text-xl align-center text-center pb-7" id="kos_open">Harian dan Bulanan</h2>
            <div class="flex mb-5">
                <div class="m-auto">
                    <a href="https://api.whatsapp.com/send?phone=082231874897">
                        <button class="bg-green-600 hover:bg-green-700 py-5 px-10 text-white bold text-lg rounded-xl"
                            id="wa">
                            Whatsapp : 0822-3187-4897
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        let cr1_button = document.getElementById("carousel-1");
        let cr2_button = document.getElementById("carousel-2");
        let cr3_button = document.getElementById("carousel-3");
        let cr4_button = document.getElementById("carousel-4");
        let cr5_button = document.getElementById("carousel-5");

        let cr1_item = document.getElementById("carousel-1-item");
        let cr2_item = document.getElementById("carousel-2-item");
        let cr3_item = document.getElementById("carousel-3-item");
        let cr4_item = document.getElementById("carousel-4-item");
        let cr5_item = document.getElementById("carousel-5-item");

        let stts = document.getElementById("kos_status");
        let type = document.getElementById("kos_type");
        let open = document.getElementById("kos_open");
        let whatsapp = document.getElementById("wa");

        cr1_button.onclick = function() {
            cr1_item.style.display = "block";
            cr2_item.style.display = "none";
            cr3_item.style.display = "none";
            cr4_item.style.display = "none";
            cr5_item.style.display = "none";
            stts.innerHTML = "KOS BEBAS";
            type.innerHTML = "Motel";
            open.innerHTML = "Harian dan Bulanan";
            whatsapp.innerHTML = "Whatsapp : 0822-3187-4897";
        }
        cr2_button.onclick = function() {
            cr2_item.style.display = "block";
            cr3_item.style.display = "none";
            cr1_item.style.display = "none";
            cr4_item.style.display = "none";
            cr5_item.style.display = "none";
            stts.innerHTML = "KOS BEBAS";
            type.innerHTML = "Motel";
            open.innerHTML = "Harian dan Bulanan";
            whatsapp.innerHTML = "Whatsapp : 0822-3187-4897"
        }
        cr3_button.onclick = function() {
            cr3_item.style.display = "block";
            cr1_item.style.display = "none";
            cr2_item.style.display = "none";
            cr4_item.style.display = "none";
            cr5_item.style.display = "none";
            stts.innerHTML = "KOS BEBAS";
            type.innerHTML = "Motel";
            open.innerHTML = "Harian dan Bulanan";
            whatsapp.innerHTML = "Whatsapp : 0822-3187-4897";
        }
        cr4_button.onclick = function() {
            cr4_item.style.display = "block";
            cr1_item.style.display = "none";
            cr2_item.style.display = "none";
            cr3_item.style.display = "none";
            cr5_item.style.display = "none";
            stts.innerHTML = "KOS PRIA";
            type.innerHTML = "Kos";
            open.innerHTML = "Hanya untuk Bulanan";
            whatsapp.innerHTML = "Whatsapp : 0822-3187-4897";
        }
        cr5_button.onclick = function() {
            cr5_item.style.display = "block";
            cr1_item.style.display = "none";
            cr2_item.style.display = "none";
            cr4_item.style.display = "none";
            cr3_item.style.display = "none";
            stts.innerHTML = "KOS WANITA";
            type.innerHTML = "Kos";
            open.innerHTML = "Hanya untuk Bulanan";
            whatsapp.innerHTML = "Whatsapp : 0822-3187-4897";
        }
    </script>

    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <p class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                        Kos Lainnya
                    </p>

                </div>
            </nav>

            <div class="grid grid-cols-3 gap-5">
                <div class="w-full ">
                    <a href="/items1">
                        <img class="hover:grow hover:shadow-lg"
                            src="/assets/rumahkita1.jpeg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Rumah Kita 1</p>
                            <button
                                class="h-10 w-14 my-3 fill-current bg-gray-300 hover:bg-gray-400 text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                View
                            </button>
                        </div>
                        <p class="pt-1 text-gray-900">Jl. Simpang Borobudur Utara 8 No 26, Mojolangu, Lowokwaru, Malang City, East Java 65142, Indonesia</p>
                    </a>
                </div>
                <div class="w-full">
                    <a href="/items2">
                        <img class="hover:grow hover:shadow-lg"
                            src="assets/rumahkita2.jpeg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Rumah Kita 2</p>
                            <button
                                class="h-10 w-14 my-3 fill-current bg-gray-300 hover:bg-gray-400 text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                View
                            </button>
                        </div>
                        <p class="pt-1 text-gray-900">Jl. Ikan Paus No.11, Tunjungsekar, Kec. Lowokwaru, Kota Malang,
                            Jawa
                            Timur 65142, Indonesia</p>
                    </a>
                </div>
                <div class="w-full">
                    <a href="/items3">
                        <img class="hover:grow hover:shadow-lg"
                            src="assets/rumahkita3-resized.jpeg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Rumah Kita 3</p>
                            <button
                                class="h-10 w-14 my-3 fill-current bg-gray-300 hover:bg-gray-400 text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                View
                            </button>
                        </div>
                        <p class="pt-1 text-gray-900">Jl. Simpang Borobudur Utara No 3, Tunjungsekar, Kec. Lowokwaru, Kota Malang,
                            Jawa
                            Timur 65142, Indonesia</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                </div>
            </nav>

            <!--
            <div class="grid grid-cols-6 gap-5">
                <div class="w-full col-span-2 col-start-2">
                    <a href="">
                        <img class="hover:grow hover:shadow-lg"
                            src="https://www.propertinews.id/content.images/content/1/4779/750/0/500">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Kos ikan paus</p>
                            <button
                                class="h-10 w-14 my-3 fill-current bg-gray-300 hover:bg-gray-400 text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                View
                            </button>
                        </div>
                        <p class="pt-1 text-gray-900">Jl. Ikan Paus No.11, Tunjungsekar, Kec. Lowokwaru, Kota Malang,
                            Jawa
                            Timur 65142, Indonesia</p>
                    </a>
                </div>
                <div class="w-full col-span-2 col-start-4">
                    <a href="">
                        <img class="hover:grow hover:shadow-lg"
                            src="https://www.propertinews.id/content.images/content/1/4779/750/0/500">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Kos ikan paus</p>
                            <button
                                class="h-10 w-14 my-3 fill-current bg-gray-300 hover:bg-gray-400 text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                View
                            </button>
                        </div>
                        <p class="pt-1 text-gray-900">Jl. Ikan Paus No.11, Tunjungsekar, Kec. Lowokwaru, Kota Malang,
                            Jawa
                            Timur 65142, Indonesia</p>
                    </a>
                </div>

            </div>
        -->
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

            <p class="mb-8">Lokasi dalam perumahan, dekat dengan minimarket, dekat dengan Pasar Blimbing,
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
                        <h3 class="font-bold text-gray-900">About</h3>
                        <p class="py-4">
                            Penyedia jasa penginapan / tempat tinggal sementara yang berlokasi di Kota Malang.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">Social</h3>
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
