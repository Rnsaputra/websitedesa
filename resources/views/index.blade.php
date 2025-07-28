<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<x-head></x-head>
<x-body>
    <!-- Navbar Section Start -->
    <x-navbar></x-navbar>
    <!-- Navbar Section End -->
    <!-- Hero Section Start -->
    <section id="home" class="">
        <div class=" pt-36  pb-10 min-h-screen content-center overflow-hidden">
            <div class="container">
                <div class="flex flex-wrap-reverse mx-auto ">
                    <div class="w-full self-center px-4 lg:w-1/2 ">

                        <h1 class="text-base font-semibold text-primary md:text-2xl">Selamat Datang @auth
                                {{ auth()->user()->name }}
                            @endauth
                        </h1>
                        <h2 class="text-4xl font-bold  block md:text-5xl">Website Desa Setren</h2>
                        <h1 class="text-base font-semibold  mb-5 md:text-2xl   ">Kecamatan Slogohimo| <span
                                class="text-primary">Kabupaten Wonogiri</span>
                        </h1>
                        <p class="text-base font-normal text-secondary mb-5 md:text-xl">Media informasi dan
                            publikasi Desa
                            Setren
                            Kecamatan Slogohimo</p>
                        <a href="#About"
                            class="font-medium bg-primary py-2 px-3 rounded-full text-white text-base hover:bg-rose-600 transition ease-in duration-150 md:text-lg">Tentang
                            Kami</a>
                    </div>


                    <div class="w-full px-4 lg:w-1/2 ">
                        <div class="mt-0">
                            <img src="img/icondesa.png" class="min-w-0 max-w-80 mx-auto lg:max-w-full ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End-->
    <!-- Profile section Start -->
    <!-- tentang Desa Section Start -->
    <section id="profil" class="lg:px-5 pt-10">
        <div class="bg-white pt-2 pb-10 m-5 rounded-tr-[60px] rounded-bl-[60px]" id="About">

            <div class="pt-15">
                <div class="container relative px-5 ">

                    <div class="flex mx-auto flex-wrap ">
                        <div class="w-full self-center pb-5  lg:pb-10  ">

                            <div class="w-full self-center blocke">
                                <img src="img/Logo Wonogiri.svg" alt="logo wonogiri" class="mx-auto w-30 pb-5 lg:w-40">
                                <h1 class="font-bold text-4xl text-center pb-2 lg:text-5xl">DESA SETREN</h1>
                                <h2 class="font-semibold text-xs text-center text-primary lg:text-2xl">Kecamatan
                                    Slogohimo,
                                    Kabupaten
                                    Wonogiri
                                </h2>
                            </div>

                        </div>
                        <div class="w-full pb-5  lg:w-1/2 self-center blocke ">
                            <p class="text-xs/4 font-semibold  text-justify lg:text-xl md:text-justify "> Desa
                                Setren
                                merupakan sebuah desa yang terletak di Kecamatan Slogohimo, Kabupaten Wonogiri, Jawa
                                Tengah. Terletak di ujung utara Kecamatan Slogohimo, desa Setren menawarkan
                                keindahan
                                alam yang memukau dengan pemandangan yang menyegarkan. Udara sejuk khas pegunungan
                                membuat Desa Setren menjadi tempat yang ideal untuk beristirahat dan menikmati
                                ketenangan. </p>
                        </div>
                        <div
                            class="blocke w-full pb-5  flex flex-wrap gap-4 place-content-center lg:w-1/2 self-center items-end ">
                            <img id="background" src="img/1.png" alt="img1"
                                class="cursor-pointer w-40  object-cover origin-center rounded-2xl effect lg:origin-top-left lg:w-80 aspect-3/2">
                            <img id="background" src="img/2.png" alt="img2"
                                class="cursor-pointer w-40  object-cover origin-center rounded-2xl effect lg:origin-top-left lg:w-80 aspect-3/2">
                            <img id="background" src="img/3.png" alt="img3"
                                class="cursor-pointer w-40  object-cover origin-center rounded-2xl effect lg:origin-top-left lg:w-80 aspect-3/2">
                        </div>
                    </div>
                </div>
            </div>
            <!-- visi misi start -->
            <div id="visiMisi" class="pt-15">
                <div class=" bg-slate-50  w-full px-5  ">
                    <div class="container flex mx-auto flex-wrap pb-10">

                        <div class="w-full self-start px-4 pt-10 mx-auto blocke md:block md:mx-auto">
                            <h1 class="text-3xl font-bold text-center text-primary lg:text-6xl mb-4">VISI</h1>
                            <p class="text-base font-medium text-center lg:text-2xl text-secondary">"Mewujudkan
                                Pemerintah Desa Yang
                                Lebih Baik Dan Bersih Menuju Setren Yang Maju Adil, Makmur Dan Religius”</p>
                        </div>
                        <div class="w-full self-start  px-4 pt-10 mx-auto pb-5  lg:h-auto">
                            <h1 class="text-3xl font-bold text-center text-primary lg:text-6xl blocke">MISI</h1>
                            <ol class="list-decimal text-base font-medium px-4 lg:text-2xl text-secondary">
                                <li class="">
                                    Mewujudkan desa yang jujur, adil dan berwibawa dengan pengambilan keputusan yang
                                    cepat dan tepat.
                                </li>
                                <li class="">
                                    Mengedepankan kejujuran dan musyawarah mufakat dalam pengambilan keputusan untuk
                                    kepentingan bersama.
                                </li>
                                <li class="">
                                    Meningkatkan profesional perangkat desa.
                                </li>
                                <li class="">
                                    Mengupayakan terbukanya akses informasi.
                                </li>
                                <li class="">Mewujudkan sarana dan prasarana desa yang memadahi.</li>
                                <li class="">Meningkatkan perekonomian dan kesejahteraan warga desa.</li>
                                <li class="">Mengupayakan kemandirian masyarakat dalam pengembangan potensi
                                    desa.
                                </li>
                                <li class="">Meningkatkan kesejahteraan masyarakat desa secara dinamis.</li>
                                <li class="">Meningkatkan kesadaran dalam beragam dan berbudaya.</li>
                                <li class="">Meningkatkan pelayanan kesehatan masyarakat </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- visi misi End -->
            <!-- STRUKTUR ORGANISASI START -->
            <div id="Struktur" class="pt-15">
                <div class="contrainer" id="">
                    <div class="w-full self-auto px-1  mx-auto pt-5">
                        <h1 class="text-2xl font-bold text-center pb-4 text-primary blocke lg:text-5xl">
                            Perangkat Desa

                        </h1>
                        <div class="flex"></div>
                        @if ($kepala)
                            <div class="flex justify-center items-center blocke">
                                <div class="grid place-items-center blocke w-full aspect-2/3 max-w-35 lg:max-w-65 mx-5">
                                    <img src="{{ asset('storage/' . $kepala->profile_picture) }}" alt="foto Kepala Desa"
                                        class="pb-2 object-cover rounded-2xl h-full">
                                    <div class="absolute bottom-0 bg-primary w-full rounded-b-2xl">
                                        <h1 class="font-bold text-sm/4 uppercase lg:text-lg text-white text-center">
                                            {{ strtoupper($kepala->name) }}
                                        </h1>
                                        <h1 class="font-bold text-sm capitalize lg:text-lg text-center text-white">
                                            {{ $kepala->job }}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        @endif


                        <div class="lg:mx-auto lg:max-w-400  mx-5  pb-2">
                            <div id="stafdesa" class="swiper swiperPerangkat blocke w-full static ">
                                <div class="swiper-wrapper mb-10 ">

                                    @foreach ($staf as $item)
                                        <div
                                            class="swiper-slide  lg:max-w-60 max-w-40  rounded-2xl overflow-hidden mt-5 ">
                                            <div
                                                class="grid place-items-center blocke w-full aspect-2/3 max-w-35 lg:max-w-65">
                                                <img src="{{ asset('storage/' . $item->profile_picture) }}"
                                                    alt="foto Perangkat" class="object-cover h-full">
                                                <div class="absolute bottom-0 bg-primary w-full rounded-b-2xl">
                                                    <h1
                                                        class="font-bold text-sm/4 uppercase lg:text-lg text-white text-center">
                                                        {{ strtoupper($item->name) }}
                                                    </h1>
                                                    <h1
                                                        class="font-bold text-sm capitalize lg:text-lg text-center text-white">
                                                        {{ $item->job }}
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="swiper-pagination"></div>

                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>



                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <!-- STRUKTUR ORGANISASI END -->
            </div>
    </section>
    <!-- tentang Desa Section end -->
    <!-- Profile section End -->
    @if ($categoryPotensi && $categoryPotensi->count() > 0)
        <section id="potensi" class="lg:px-10">
            <div class="bg-dark pt-2 pb-10 m-5 rounded-br-[60px] rounded-tl-[60px] ">

                @foreach ($categoryPotensi as $category)
                    <div id="wisata" class=" p-5 blocke pt-20">
                        <div class="pb-3 px-5 jus">
                            <h1 class="font-bold text-lg text-white uppercase text-center md:text-2xl">
                                {{ $category->name }}
                            </h1>
                            <p class="font-medium text-white/80 text-xs text-center md:text-lg">
                                {{ $category->description }}</p>
                        </div>

                        <div class="swiper mySwiper2 ">
                            <div class="swiper-wrapper">
                                @foreach ($potensi->where('categories_id', $category->id) as $data)
                                    <div class="swiper-slide max-w-100">
                                        <div
                                            class="max-w-full h-100 snap-center bg-slate-100 rounded-2xl p-2  max-h-full flex flex-col">

                                            @if ($data->cover)
                                                <img src="{{ asset('storage/' . $data->cover) }}"
                                                    alt="{{ $data->place }}"
                                                    class="w-full aspect-3/2 object-cover  rounded-2xl grayscale hover:grayscale-0 transition-all duration-300 ease-in-out ">
                                            @else
                                                <img src="{{ asset('storage/profile-picture/blank.jpg') }}"
                                                    alt="{{ $data->place }}"
                                                    class="w-full aspect-3/2 object-cover  rounded-2xl grayscale hover:grayscale-0 transition-all duration-300 ease-in-out ">
                                            @endif

                                            <h1 class="font-bold text-base text-center pt-2 text-dark md:text-xl">
                                                {{ $data->place }}
                                            </h1>
                                            <p
                                                class="font-medium text-xs  text-secondary line-clamp-1 w-full md:text-sm text-center">
                                                {{ Str::limit($data->description, 50) }}</p>
                                            <button id="lokasi" class="mt-5 mb-5"> <span
                                                    class="text-base font-medium  bg-primary rounded-lg px-3 py-0.5 text-white  hover:bg-primary/70  bottom-0 mt-4">More</span>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach



                            </div>

                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- Navigation Buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                    </div>
                @endforeach



            </div>
        </section>
    @endif

    <!-- potensi Section End -->

    @if ($categoryPotensi && $categoryPotensi->count() > 0)
        <div class="lg:px-10">
            <!-- modal Wisata start -->
            @foreach ($categoryPotensi as $category)
                @foreach ($potensi->where('categories_id', $category->id) as $data)
                    <div id="modal"
                        class="modal fixed inset-0 bg-dark/50 opacity-0 transition-all duration-500 ease-in-out flex items-center justify-center z-99 w-full p-10">
                        <div class="max-w-full lg:w-150 bg-slate-100 rounded-2xl p-4  max-h-full flex flex-col gap-4">
                            <!-- lokasi -->

                            <div class="swipermodal overflow-hidden">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide max-w-full lg:h-100  rounded-2xl mx-2">
                                        @if ($data->cover)
                                            <img src="{{ asset('storage/' . $data->cover) }}"
                                                alt="{{ $data->place }}"
                                                class="w-full object-cover aspect-3/2  rounded-2xl ">
                                        @else
                                        @endif
                                    </div>
                                    <div class="swiper-slide max-w-full lg:h-100 aspect-3/2 rounded-2xl mx-2">
                                        @if ($data->embedlocate)
                                            {!! $data->embedlocate !!}
                                        @endif
                                    </div>
                                    @foreach ($image->where('potensi_id', $data->id) as $images)
                                        <div class="swiper-slide max-w-full lg:h-100 rounded-2xl mx-2">
                                            <img src="{{ asset('storage/' . $images->image_path) }}"
                                                alt="{{ $images->image_path }}"
                                                class="w-full aspect-3/2 object-cover  rounded-2xl ">
                                        </div>
                                    @endforeach



                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                                <!-- If we need scrollbar -->
                                <div class="swiper-scrollbar"></div>
                            </div>

                            <h1 class="font-bold text-base text-center pt-2 text-dark lg:text-2xl">{{ $data->place }}
                            </h1>
                            <!-- deskripsi -->
                            <p class="font-medium text-xs text-center  text-secondary w-full lg:text-base ">
                                {{ $data->description }}
                            </p>

                            <!-- sosial media -->
                            <div class="flex items-center justify-center ">
                                <!-- youtube -->
                                <a href="{{ $data->youtube }}"
                                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-800 hover:border-primary hover hover:bg-primary hover:text-white text-slate-800">
                                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>YouTube</title>
                                        <path
                                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                    </svg>
                                </a>
                                <!-- instagram -->
                                <a href="{{ $data->instagram }}"
                                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-800 hover:border-primary hover hover:bg-primary hover:text-white text-slate-800">
                                    <svg role="img" viewBox="0 0 24 24" width="20" class="fill-current"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Instagram</title>
                                        <path
                                            d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                                    </svg>
                                </a>
                                <!-- tiktok -->
                                <a href="{{ $data->tiktok }}"
                                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-800 hover:border-primary hover hover:bg-primary hover:text-white text-slate-800">
                                    <svg role="img" viewBox="0 0 24 24" width="20" class="fill-current"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>TikTok</title>
                                        <path
                                            d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                                    </svg>
                                </a>
                            </div>
                            <!-- close button -->
                            <div class="flex justify-end">
                                <button id="closeModal"
                                    class="bg-primary hover:bg-primary/60 rounded-full text-white p-2 cursor-pointer">
                                    Close
                                </button>
                            </div>

                        </div>
                    </div>
                @endforeach
            @endforeach

            <!-- modal potensi End -->
        </div>
    @endif

    <!-- modal end -->
    <section id="infografis" class="lg:px-10">
        <div class="bg-slate-100 pt-2 pb-10 mx-5 mt-5 rounded-tr-[60px] rounded-bl-[60px]">
            <div id="penduduk" class="pt-10">
                <div class="container">
                    <div class=" place-content-center mx-auto  p-4">
                        <h1 class=" text-3xl lg:text-4xl font-bold p-4 text-center">Jumlah Penduduk</h1>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 px-5 gap-4">
                        <div class="size-full grid grid-cols-1 lg:grid-cols-2 gap-4 place-content-between">
                            <div class="  shadow bg-white  rounded-2xl flex flex-wrap content-center p-4">
                                <div class="max-w-30 w-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="">
                                        <path fill-rule="evenodd"
                                            d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                                    </svg>

                                </div>
                                <div class="content-center pl-5 w-1/2">
                                    <h1 class="text-2xl font-bold text-left text-primary">{{ $total['jumlah'] }}</h1>
                                    <p class="font-semibold text-base"> Penduduk</p>
                                </div>

                            </div>
                            <div class="  shadow bg-white  rounded-2xl flex flex-wrap content-center p-4">
                                <div class="max-w-30 w-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        fill="currentColor">
                                        <g>
                                            <path class="st0"
                                                d="M78.641,118.933c22.88,0,41.416-18.551,41.416-41.414c0-22.887-18.536-41.423-41.416-41.423
                                             c-22.887,0-41.422,18.536-41.422,41.423C37.218,100.382,55.754,118.933,78.641,118.933z" />
                                            <path class="st0" d="M255.706,228.73v0.062c0.101,0,0.194-0.031,0.294-0.031c0.101,0,0.194,0.031,0.294,0.031v-0.062
                                             c15.562-0.317,28.082-12.976,28.082-28.601c0-15.648-12.52-28.299-28.082-28.616v-0.063c-0.101,0-0.194,0.031-0.294,0.031
                                             c-0.1,0-0.193-0.031-0.294-0.031v0.063c-15.563,0.317-28.082,12.968-28.082,28.616C227.623,215.754,240.143,228.413,255.706,228.73
                                             z" />
                                            <path class="st0"
                                                d="M433.359,118.933c22.887,0,41.423-18.551,41.423-41.414c0-22.887-18.536-41.423-41.423-41.423
                                             c-22.88,0-41.416,18.536-41.416,41.423C391.944,100.382,410.48,118.933,433.359,118.933z" />
                                            <path class="st0" d="M470.097,138.553h-36.312h-18.404c-21.106,0-40.432,11.831-50.033,30.622l-33.494,97.967
                                             c-1.154,2.246-3.298,3.84-5.792,4.282c-2.493,0.442-5.048-0.309-6.914-2.036l-20.836-18.04c-6.233-5.769-14.408-8.973-22.902-8.973
                                             H256h-19.41c-8.494,0-16.669,3.204-22.902,8.973l-20.835,18.04c-1.866,1.727-4.421,2.478-6.914,2.036
                                             c-2.492-0.442-4.637-2.036-5.791-4.282l-33.495-97.967c-9.6-18.791-28.926-30.622-50.032-30.622H78.215H41.902
                                             C21.834,138.553,0,160.387,0,180.464v139.211c0,10.034,8.13,18.171,18.164,18.171c4.939,0,0,0,12.682,0l6.906,118.725
                                             c0,10.676,8.664,19.332,19.34,19.332c4.506,0,12.814,0,21.122,0c8.308,0,16.616,0,21.122,0c10.676,0,19.34-8.656,19.34-19.332
                                             l6.906-118.725l-0.085-84.766c0-1.339,0.914-2.493,2.222-2.818c1.309-0.31,2.648,0.309,3.26,1.502l26.572,65.401
                                             c3.206,6.256,9.152,10.654,16.074,11.885c6.922,1.231,14.022-0.844,19.186-5.613l25.426-18.729
                                             c0.852-0.782,2.083-0.984,3.136-0.542c1.061,0.473,1.743,1.518,1.743,2.663l0.093,73.508l4.777,82.187
                                             c0,7.387,6.001,13.379,13.395,13.379c3.113,0,8.865,0,14.618,0c5.753,0,11.506,0,14.618,0c7.394,0,13.394-5.992,13.394-13.379
                                             l4.778-82.187l0.093-73.508c0-1.146,0.681-2.19,1.742-2.663c1.053-0.442,2.284-0.24,3.136,0.542l25.427,18.729
                                             c5.164,4.769,12.264,6.844,19.186,5.613c6.922-1.231,12.868-5.629,16.073-11.885l26.573-65.401
                                             c0.611-1.192,1.951-1.812,3.259-1.502c1.309,0.325,2.222,1.478,2.222,2.818l-0.085,84.766l6.906,118.725
                                             c0,10.676,8.664,19.332,19.341,19.332c4.507,0,12.814,0,21.122,0c8.308,0,16.616,0,21.121,0c10.677,0,19.342-8.656,19.342-19.332
                                             l6.906-118.725c12.682,0,7.742,0,12.682,0c10.034,0,18.164-8.137,18.164-18.171V180.464
                                             C512,160.387,490.166,138.553,470.097,138.553z" />
                                        </g>
                                    </svg>

                                </div>
                                <div class="content-center pl-5 w-1/2">
                                    <h1 class="text-2xl font-bold text-left text-primary">{{ $total['kepala'] }} </h1>
                                    <p class="font-semibold text-base">Kepala Keluarga
                                    </p>
                                </div>
                            </div>
                            <div class="  shadow bg-white  rounded-2xl flex flex-wrap content-center p-4">
                                <div class="max-w-30 w-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="currentColor">
                                        <g>
                                            <path fill="#231F20"
                                                d="M62.242,47.758l0.014-0.014c-5.847-4.753-12.84-8.137-20.491-9.722C44.374,35.479,46,31.932,46,28
                                             c1.657,0,3-1.343,3-3v-2c0-0.886-0.391-1.673-1-2.222V12c0-6.627-5.373-12-12-12h-8c-6.627,0-12,5.373-12,12v8.778
                                             c-0.609,0.549-1,1.336-1,2.222v2c0,1.657,1.343,3,3,3c0,3.932,1.626,7.479,4.236,10.022c-7.652,1.586-14.646,4.969-20.492,9.722
                                             l0.014,0.014C0.672,48.844,0,50.344,0,52v8c0,2.211,1.789,4,4,4h56c2.211,0,4-1.789,4-4v-8C64,50.344,63.328,48.844,62.242,47.758z
                                              M20,28v-1c0-0.553-0.447-1-1-1h-1c-0.553,0-1-0.447-1-1v-2c0-0.553,0.447-1,1-1h1c0.553,0,1-0.447,1-1v-1v-1c0-2.209,1.791-4,4-4
                                             c2.088,0,3.926-1.068,5-2.687C30.074,13.932,31.912,15,34,15h6c2.209,0,4,1.791,4,4v1v1c0,0.553,0.447,1,1,1h1c0.553,0,1,0.447,1,1
                                             v2c0,0.553-0.447,1-1,1h-1c-0.553,0-1,0.447-1,1v1c0,6.627-5.373,12-12,12S20,34.627,20,28z M24.285,39.678
                                             C26.498,41.143,29.147,42,32,42s5.502-0.857,7.715-2.322c1.66,0.281,3.297,0.63,4.892,1.084C41.355,43.983,36.911,46,31.973,46
                                             c-4.932,0-9.371-2.011-12.621-5.226C20.96,40.315,22.61,39.961,24.285,39.678z" />
                                            <path fill="#231F20" d="M24.537,21.862c0.475,0.255,1.073,0.068,1.345-0.396C25.91,21.419,26.18,21,26.998,21
                                             c0.808,0,1.096,0.436,1.111,0.458C28.287,21.803,28.637,22,28.999,22c0.154,0,0.311-0.035,0.457-0.111
                                             c0.491-0.253,0.684-0.856,0.431-1.347C29.592,19.969,28.651,19,26.998,19c-1.691,0-2.618,0.983-2.9,1.564
                                             C23.864,21.047,24.063,21.609,24.537,21.862z" />
                                            <path fill="#231F20" d="M34.539,21.862c0.475,0.255,1.073,0.068,1.345-0.396C35.912,21.419,36.182,21,37,21
                                             c0.808,0,1.096,0.436,1.111,0.458C38.289,21.803,38.639,22,39.001,22c0.154,0,0.311-0.035,0.457-0.111
                                             c0.491-0.253,0.684-0.856,0.431-1.347C39.594,19.969,38.653,19,37,19c-1.691,0-2.618,0.983-2.9,1.564
                                             C33.866,21.047,34.065,21.609,34.539,21.862z" />
                                        </g>
                                    </svg>

                                </div>
                                <div class="content-center pl-5 w-1/2">
                                    <h1 class="text-2xl font-bold text-left text-primary">{{ $total['laki'] }}</h1>
                                    <p class="font-semibold text-base whitespace-nowrap"> Laki Laki</p>
                                </div>
                            </div>
                            <div class="  shadow bg-white  rounded-2xl flex flex-wrap content-center p-4">
                                <div class="max-w-30 w-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="currentColor">
                                        <g>
                                            <path fill="#231F20"
                                                d="M62.242,47.758l0.014-0.014c-3.239-2.634-6.865-4.874-10.839-6.644C50.502,38.229,50,35.175,50,32V16
                                             c0-8.837-7.163-16-16-16h-4c-8.837,0-16,7.163-16,16v16c0,3.173-0.501,6.226-1.415,9.096c-3.979,1.745-7.526,3.953-10.841,6.648
                                             l0.014,0.014C0.672,48.844,0,50.344,0,52v8c0,2.211,1.789,4,4,4h56c2.211,0,4-1.789,4-4v-8C64,50.344,63.328,48.844,62.242,47.758z
                                              M20,19c0-2.209,1.791-4,4-4c2.088,0,3.926-1.068,5-2.687C30.074,13.932,31.912,15,34,15h4c3.313,0,6,2.687,6,6c0,0.188,0,0.5,0,1
                                             c0,12-7.469,18-12,18s-12-6-12-18C20,21.5,20,19,20,19z M25.677,39.439C27.76,41.084,29.99,42,32,42s4.24-0.916,6.323-2.561
                                             c2.743,0.378,5.399,1.018,7.966,1.857c-2.468,2.468-13.311,13.311-13.691,13.691c-0.43,0.43-0.748,0.447-1.183,0.013
                                             C31.03,54.616,20.18,43.766,17.711,41.297C20.277,40.457,22.934,39.817,25.677,39.439z" />
                                            <path fill="#231F20" d="M25.882,22.467C25.91,22.419,26.18,22,26.998,22c0.808,0,1.096,0.436,1.111,0.458
                                             C28.287,22.803,28.637,23,28.999,23c0.154,0,0.311-0.035,0.457-0.111c0.491-0.253,0.684-0.856,0.431-1.347
                                             C29.592,20.969,28.651,20,26.998,20c-1.691,0-2.618,0.983-2.9,1.564c-0.233,0.482-0.034,1.045,0.439,1.298
                                             C25.012,23.117,25.61,22.931,25.882,22.467z" />
                                            <path fill="#231F20" d="M34.539,22.862c0.475,0.255,1.073,0.068,1.345-0.396C35.912,22.419,36.182,22,37,22
                                             c0.808,0,1.096,0.436,1.111,0.458C38.289,22.803,38.639,23,39.001,23c0.154,0,0.311-0.035,0.457-0.111
                                             c0.491-0.253,0.684-0.856,0.431-1.347C39.594,20.969,38.653,20,37,20c-1.691,0-2.618,0.983-2.9,1.564
                                             C33.866,22.047,34.065,22.609,34.539,22.862z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content-center pl-5 w-1/2">
                                    <h1 class="text-2xl font-bold text-left text-primary"> {{ $total['perempuan'] }}
                                    </h1>
                                    <p class="font-semibold text-base"> Perempuan</p>
                                </div>
                            </div>
                        </div>
                        <div class="size-full grid grid-cols-1">
                            <div
                                class=" shadow bg-white w-full h-full rounded-2xl flex flex-wrap content-center place-content-center">
                                <h1 class="lg:text-2xl text-lg font-semibold text-center w-full">Berdasarkan Dusun
                                </h1>
                                <div id="chart" class="  lg:max-w-[400px] w-full mx-auto  ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="keuangan">
                <div class="container">
                    <div class="flex  place-content-center">
                        <h1 class=" text-2xl lg:text-4xl font-bold p-4">APBDes
                            @if ($income->isEmpty())
                            @else
                                <span id="lastyear"></span>
                            @endif
                        </h1>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 px-5 gap-4 ">
                        <div class="size-full grid grid-cols-1 lg:grid-cols-1 gap-4 place-content-between">
                            <div
                                class="  shadow bg-white  rounded-2xl flex flex-wrap justify-center content-center p-4">
                                <div class="fill-green-600 max-w-30 w-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3414 3144">
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer" />
                                            <g id="_2062177931584">
                                                <g>
                                                    <path class="fil0"
                                                        d="M2920 1234c0,-603 -489,-1091 -1091,-1091l44 44c204,205 319,482 319,772l0 1197 -493 0 857 988 858 -988 -494 0 0 -922z" />
                                                    <path class="fil0"
                                                        d="M1000 2001c553,0 1001,-448 1001,-1001 0,-552 -448,-1000 -1001,-1000 -552,0 -1000,448 -1000,1000 0,553 448,1001 1000,1001zm0 -1715c394,0 715,320 715,714 0,394 -321,715 -715,715 -394,0 -714,-321 -714,-715 0,-394 320,-714 714,-714z" />
                                                    <path class="fil0"
                                                        d="M286 2143l1143 0 0 286 -1143 0 0 -286zm0 429l1572 0 0 286 -1572 0 0 -286z" />
                                                </g>
                                                <path class="fil1"
                                                    d="M520 1236l0 -606 279 0c41,0 78,8 110,25 33,17 58,40 76,69 18,28 27,62 27,99 0,41 -9,76 -27,108 -18,31 -43,55 -76,73 -32,17 -69,26 -110,26l-118 0 0 206 -161 0zm324 0l-154 -273 176 -22 171 295 -193 0zm-163 -329l95 0c15,0 27,-3 38,-9 10,-6 17,-14 23,-25 5,-11 8,-23 8,-38 0,-14 -3,-26 -9,-36 -5,-10 -14,-18 -25,-23 -11,-5 -25,-8 -42,-8l-88 0 0 139zm438 520l0 -652 150 0 8 102 -31 -8c4,-20 13,-37 29,-53 16,-15 36,-28 59,-37 24,-9 50,-14 77,-14 39,0 74,10 104,31 30,20 53,49 71,84 17,36 26,78 26,125 0,46 -9,87 -26,123 -18,37 -42,65 -72,85 -31,21 -66,31 -105,31 -26,0 -51,-5 -74,-14 -24,-10 -43,-23 -59,-39 -16,-17 -26,-35 -31,-56l37 -12 0 304 -163 0zm247 -315c18,0 34,-5 47,-13 14,-9 24,-21 31,-37 6,-16 10,-35 10,-57 0,-22 -4,-42 -10,-58 -7,-15 -17,-28 -31,-36 -13,-9 -29,-13 -47,-13 -19,0 -35,4 -48,12 -13,9 -23,21 -30,37 -7,16 -11,36 -11,58 0,22 4,41 11,57 7,16 17,28 30,37 13,8 29,13 48,13z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="content-center pl-5 flex flex-col gap-2 justify-center">
                                    <h1 class="text-lg font-bold text-left lg:text-4xl">Pemasukan</h1>
                                    <p class="font-semibold text-base lg:text-xl"><span id="lastincome"
                                            class="text-green-600 "></span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="  shadow bg-white  rounded-2xl flex flex-wrap justify-center content-center w-full">
                                <div class="fill-red-500 max-w-30 w-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10220 9376" class="size-30">
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer" />
                                            <path class="fil0"
                                                d="M7665 0l-2555 2942 1471 0 0 3570c0,862 -343,1689 -953,2299l-131 131c1796,0 3252,-1455 3252,-3251l0 -2749 1471 0 -2555 -2942z" />
                                            <path class="fil0"
                                                d="M2981 3414c-1646,0 -2981,1335 -2981,2981 0,1646 1335,2981 2981,2981 1646,0 2980,-1335 2980,-2981 0,-1646 -1334,-2981 -2980,-2981zm0 5110c-1174,0 -2129,-955 -2129,-2129 0,-1174 955,-2129 2129,-2129 1174,0 2129,955 2129,2129 0,1174 -955,2129 -2129,2129z" />
                                            <path class="fil0"
                                                d="M852 2136l3406 0 0 852 -3406 -1 0 -851zm0 -1281l4684 0 0 852 -4684 0 0 -852z" />
                                            <path class="fil1"
                                                d="M1524 7070l0 -1807 834 0c122,0 231,25 328,75 96,50 171,118 225,204 55,86 82,185 82,297 0,120 -27,227 -82,320 -54,93 -129,165 -225,218 -97,52 -206,78 -328,78l-354 0 0 615 -480 0zm968 0l-459 -816 524 -64 511 880 -576 0zm-488 -981l284 0c45,0 82,-9 112,-27 31,-18 54,-43 70,-75 16,-32 25,-69 25,-112 0,-41 -9,-77 -26,-107 -17,-30 -43,-54 -76,-70 -34,-16 -76,-24 -125,-24l-264 0 0 415zm1306 1548l0 -1943 449 0 23 305 -93 -24c11,-58 40,-110 87,-157 47,-46 106,-83 177,-111 70,-27 147,-41 229,-41 116,0 218,30 307,91 90,62 160,145 212,252 52,107 77,231 77,372 0,137 -25,260 -77,367 -52,108 -123,192 -214,253 -91,61 -195,92 -312,92 -78,0 -151,-14 -221,-43 -70,-28 -128,-67 -176,-116 -47,-49 -77,-104 -91,-166l108 -36 0 905 -485 0zm736 -939c55,0 102,-13 141,-39 40,-25 70,-62 91,-109 20,-48 31,-104 31,-169 0,-67 -11,-125 -31,-172 -21,-47 -51,-84 -91,-110 -39,-25 -86,-38 -141,-38 -56,0 -103,12 -142,37 -40,25 -70,62 -91,110 -20,48 -31,106 -31,173 0,65 11,121 31,169 21,47 51,84 91,109 39,26 86,39 142,39z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content-center pl-5 flex flex-col gap-2 justify-center">
                                    <h1 class="text-lg font-bold text-left lg:text-4xl">Pengeluaran</h1>
                                    <p class="font-semibold text-base lg:text-xl"><span id="lastoutcome"
                                            class="text-red-500 "></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="size-full grid grid-cols-1">
                            <div
                                class=" shadow bg-white w-full h-full rounded-2xl flex flex-col content-center place-content-center">
                                <h1 class="lg:text-2xl text-lg font-semibold text-center">Grafik Anggaran</h1>
                                <div id="anggaran" class=" lg:w-full max-w-full mx-auto  ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- infografis end-->
    <!-- Program Desa Start -->
    <Section id="Berita" class="lg:px-10">
        <div class="bg-dark pt-2 pb-10 m-5 rounded-br-[60px] rounded-tl-[60px] overflow-hidden">
            <div class="container">
                <div class=" mb-2 px-5 ">
                    <h1 class="text-white text-right font-bold uppercase text-sm">Berita Desa</h1>
                </div>
                <div class="border-white border-2 w-full mb-10"> </div>
                <div class="p-4">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($posts as $post)
                                <div class="swiper-slide max-w-100">
                                    <div
                                        class=" aspect-11/12 snap-center bg-slate-100 rounded-2xl p-3 flex flex-col overflow-hidden justify-between  ">
                                        <div class="">
                                            <div class="overflow-hidden rounded-xl">
                                                @if ($post->image)
                                                    <img src="{{ asset('storage/' . $post->image) }}"
                                                        alt="Gambar Berita"
                                                        class=" w-full aspect-3/2 object-cover rounded-xl transition-all duration-300 ease-in-out transform hover:scale-120 ">
                                                @else
                                                    <img src="https://picsum.photos/200?random={{ $post['image'] }}"
                                                        alt="Gambar Berita"
                                                        class=" w-full aspect-3/2 object-cover rounded-xl transition-all duration-300 ease-in-out transform hover:scale-120 ">
                                                @endif
                                            </div>
                                            <h1
                                                class="font-bold text-lg text-left pt-2 text-dark md:text-lg line line-clamp-2">
                                                {{ Str::limit($post['title'], 50) }}
                                            </h1>
                                            <a href="/berita/{{ $post['slug'] }}"
                                                class="font-bold text-xs text-left pt-2 text-sky-800 hover:text-sky-500 md:text-xs cursor-pointer underline">
                                                Read More
                                            </a>
                                            <p
                                                class="font-semibold text-sm text-left pt-2 text-secondary md:text-sm line line-clamp-2">
                                                {{ Str::limit($post['isi'], 50, '...') }}
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="text-sm text-secondary">{{ $post->created_at->diffForHumans() }}
                                            </p>
                                            <p><a href="/category/{{ $post->category->slug }}"
                                                    class="text-sm text-secondary hover:text-sky-800 hover:underline cursor-pointer">
                                                    {{ $post->category->name }}
                                                </a>
                                            </p>
                                            <a href="/berita?author={{ $post->author->username }}"
                                                class="text-sm text-secondary hover:text-sky-800 underline cursor-pointer">{{ $post->author->name }}</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                </div>
                <a href="/berita"
                    class="text-white  px-4 font-bold uppercase text-sm hover:underline hover:text-blue-500 cursor-pointer">
                    Berita Selengkapnya &raquo;
                </a>

                <div id="kalender" class="">
                    <iframe
                        src="https://calendar.google.com/calendar/embed?height=720&wkst=1&ctz=Asia%2FJakarta&showPrint=0&showTitle=0&hl=id&src=cm1hZ2FuZzJAZ21haWwuY29t&src=aWQuaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23039BE5&color=%230B8043"
                        class=" h-100 w-full px-10 pt-5 rounded-2xl" frameborder="0" scrolling="no"></iframe>
                </div>

                <!-- Agenda Start -->

            </div>
        </div>
    </Section>
    <!-- Program Desa End -->
    <!-- FOOTER START-->
    <x-footer></x-footer>
    <!-- FOOTER END-->

    @vite('resources/js/app.js')
    <script>
        const warga = @json($penduduk);
        const series = warga.map(item => item.total_penduduk);
        const labels = warga.map(item => item.namadusun);
        const options = {
            series: series,
            chart: {
                type: 'pie',

            },
            labels: labels,
            dropShadow: {
                enabled: true,
                top: 3,
                left: 2,
                blur: 5,
                opacity: 0.1
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {},
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        new ApexCharts(document.querySelector("#chart"), options).render();



        const incomeData = @json($income);
        const yearIncome = incomeData.map(item => item.year); // Misalnya: [2019, 2020]
        const totalPendapatan = incomeData.map(item => item.total_pendapatan);

        const outcomeData = @json($outcome);
        const yearOutcome = outcomeData.map(item => item.year); // Misalnya: [2021, 2022]
        const totalPengeluaran = outcomeData.map(item => item.total_pengeluaran);

        // Menggabungkan tahun dari income dan outcome menjadi satu himpunan gabungan
        const combinedYears = [...new Set([...yearIncome, ...yearOutcome])].sort((a, b) => a - b);

        // Membuat objek untuk menyimpan total pendapatan dan pengeluaran berdasarkan tahun
        const incomeMap = {};
        const outcomeMap = {};

        yearIncome.forEach((year, index) => {
            incomeMap[year] = totalPendapatan[index];
        });

        yearOutcome.forEach((year, index) => {
            outcomeMap[year] = totalPengeluaran[index];
        });

        // Menyiapkan data untuk grafik gabungan
        const combinedPendapatan = combinedYears.map(year => incomeMap[year] || 0);
        const combinedPengeluaran = combinedYears.map(year => outcomeMap[year] || 0);


        const lastYear = combinedYears[combinedYears.length - 1];


        const lastPendapatan = combinedPendapatan[combinedPendapatan.length - 1];
        const lastPengeluaran = combinedPengeluaran[combinedPengeluaran.length - 1];

        function formatRupiah(angka) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(angka);
        };

        // Menampilkan hasil dalam format rupiah
        const formattedPendapatan = formatRupiah(lastPendapatan);
        const formattedPengeluaran = formatRupiah(lastPengeluaran);


        const grafikAnggaran = {
            chart: {
                type: 'line',
                width: '100%',
                height: '100%'
            },
            series: [{
                name: 'Pemasukan',
                data: combinedPendapatan // Menggunakan data yang sudah dipetakan
            }, {
                name: 'Pengeluaran',
                data: combinedPengeluaran // Menggunakan data yang sudah dipetakan
            }],
            xaxis: {
                categories: combinedYears // Menggunakan himpunan gabungan tahun
            },
            yaxis: {
                min: 1000000,
                labels: {
                    formatter: function(value) {
                        return 'Rp ' + value.toLocaleString('id-ID'); // Format sebagai Rupiah
                    }
                }
            },
            colors: ['#00A63E', '#FB2C36'],
            tooltip: {
                y: {
                    formatter: function(val) {
                        return 'Rp ' + val.toLocaleString('id-ID');
                    }
                }
            },
            dataLabels: {
                enabled: true, // Mengaktifkan data labels
                formatter: function(value) {
                    return ' ' + value.toLocaleString('id-ID'); // Format sebagai Rupiah
                },

            }


        }

        new ApexCharts(document.querySelector("#anggaran"), grafikAnggaran).render();

        document.getElementById('lastincome').innerHTML = `
    <p>${formattedPendapatan}</p>
    `;
        document.getElementById('lastoutcome').innerHTML = `
    <p>${formattedPengeluaran}</p>
    `;
        document.getElementById('lastyear').innerHTML = `
    ${lastYear}
    `;
    </script>
    <script>
        new Swiper(".swipermodal", {
            grabcursor: true,
            rewind: true,
            effect: "coverflow",
            centeredSlides: true,
            coverflowEffect: {
                rotate: 5,
                stretch: 0,
                depth: 50,
                modifier: 1,
                slideShadow: true
            },

            slidesPerView: "auto", // 1 card terlihat di layar kecil

            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },


        });
    </script>
</x-body>


</html>
