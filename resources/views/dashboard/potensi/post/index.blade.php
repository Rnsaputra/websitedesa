<!DOCTYPE html>
<html lang="en">
<x-head>
</x-head>
<x-body>
    <section>
        <div class="flex flex-col">
            <div class="flex flex-1">
                {{-- sidebar --}}
                <x-sidebar> </x-sidebar>

                <div class="  w-full flex flex-col gap-4     ">
                    <!-- header Start -->
                    <div class="bg-primary shadow w-full h-15 items-center flex z-10 fixed">
                        <p class=" lg:text-2xl text-sm font-semibold text-left lg:ml-10 ml-2 ">

                        </p>
                    </div>
                    <div class="flex gap-3 min-h-20 bg-white p-2 shadow-xl lg:px-15 w-full items-center mt-15">
                        <h1 class="w-full font-bold text-4xl block ">{{ $category->name }}</h1>
                        <div class="flex gap-2 items-center">

                            <a href="{{ route('post.create', ['category_name' => $category->name]) }}"
                                class="bg-emerald-500 p-1 rounded-sm h-10 w-45 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-emerald-300 text-white font-bold hover:text-emerald-400">
                                <i class="fa-solid fa-plus fa-lg p-2"></i>Tambah Potensi
                            </a>
                        </div>
                    </div>




                    <!-- header End -->

                    <div id="potensi" class="mx-auto lg:px-15 px-3  w-full  ">
                        {{-- success alert --}}
                        <div class="  grid lg:grid-cols-2 grid-cols-1 gap-3 ">
                            <div class="w-full pb-3  rounded-lg md:col-span-2 drop-shadow-xl">
                                @if (session()->has('success'))
                                    <div class="flex items-center bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative"
                                        role="alert">
                                        <span class="block sm:inline">{{ session('success') }}</span>
                                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                            <button class="text-blue-500 hover:text-blue-700"
                                                onclick="this.parentElement.parentElement.style.display='none'">
                                                &times;
                                            </button>
                                        </span>
                                    </div>
                                @endif
                                <div class=" flex justify-center items-center  flex-wrap  w-full gap-2 ">
                                    @foreach ($postings as $data)
                                        <div class=" max-w-100 ">
                                            <div
                                                class="max-w-full h-110 snap-center bg-slate-100 rounded-2xl p-2  max-h-full flex flex-col">

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
                                                <div class="flex gap-2 justify-center">
                                                    <a href="/dashboard/admin/potensi/post/{{ $data->slugplace }}/edit"
                                                        class="block">
                                                        <div
                                                            class="bg-yellow-400 p-1 rounded-sm w-10 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-amber-300 transition duration-200">
                                                            <div href="#"
                                                                class="fa-solid fa-pen-to-square cursor-pointer text-white group-hover:text-yellow-400">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <form action="/dashboard/admin/potensi/post/{{ $data->slugplace }}"
                                                        method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button onclick="return confirm('Are You Sure?')"
                                                            class="bg-red-500 p-1 cursor-pointer rounded-sm w-10 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-red-500 transition duration-200">
                                                            <span
                                                                class="fa-solid fa-trash cursor-pointer text-white group-hover:text-red-500">
                                                            </span>
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach


                                </div>

                            </div>
                            @foreach ($postings as $data)
                                <div id="modal"
                                    class="modal fixed inset-0 bg-dark/50 opacity-0 transition-all duration-500 ease-in-out flex items-center justify-center z-99 w-full p-10">
                                    <div
                                        class="max-w-full lg:w-150 bg-slate-100 rounded-2xl p-4  max-h-full flex flex-col gap-4">
                                        <!-- lokasi -->
                                        <div class="swipermodal overflow-hidden">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <div class="swiper-slide max-w-full lg:h-100 rounded-2xl mx-2">
                                                    @if ($data->cover)
                                                        <img src="{{ asset('storage/' . $data->cover) }}"
                                                            alt="{{ $data->place }}"
                                                            class="w-full aspect-3/2 object-cover  rounded-2xl ">
                                                    @else
                                                    @endif
                                                </div>
                                                <div class="swiper-slide max-w-full lg:h-100 rounded-2xl mx-2">
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
                                        <h1 class="font-bold text-base text-center pt-2 text-dark lg:text-2xl">
                                            {{ $data->place }}
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
                                                <svg role="img" width="20" class="fill-current"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <title>YouTube</title>
                                                    <path
                                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                                </svg>
                                            </a>
                                            <!-- instagram -->
                                            <a href="{{ $data->instagram }}"
                                                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-800 hover:border-primary hover hover:bg-primary hover:text-white text-slate-800">
                                                <svg role="img" viewBox="0 0 24 24" width="20"
                                                    class="fill-current" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Instagram</title>
                                                    <path
                                                        d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                                                </svg>
                                            </a>
                                            <!-- tiktok -->
                                            <a href="{{ $data->tiktok }}"
                                                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-800 hover:border-primary hover hover:bg-primary hover:text-white text-slate-800">
                                                <svg role="img" viewBox="0 0 24 24" width="20"
                                                    class="fill-current" xmlns="http://www.w3.org/2000/svg">
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


                        </div>
                    </div>
                </div>

            </div>



        </div>
    </section>
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
            autoplay: {
                delay: 3000,
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
    <script>
        const side = document.querySelector('#nav-potensi');
        side.classList.add('bg-primary');
        side.classList.add('text-white');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        function addImageInput() {
            const container = document.getElementById('imageInputsContainer');

            const inputGroup = document.createElement('div');
            inputGroup.classList.add('relative', 'image-input-item');

            inputGroup.innerHTML = `
                <input type="file" name="images[]" accept="image/*" onchange="previewSingleImage(this)"
                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none file:hidden" />
                <div class="preview mt-2"></div>
                <button type="button" onclick="removeImageInput(this)"
                    class="text-red-500 text-xs mt-1 hover:underline">Hapus</button>
            `;

            container.appendChild(inputGroup);
        }

        function removeImageInput(button) {
            button.parentElement.remove();
        }

        function previewSingleImage(input) {
            const previewContainer = input.nextElementSibling;
            previewContainer.innerHTML = '';

            const file = input.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('w-32', 'h-32', 'object-cover', 'rounded');

                    previewContainer.appendChild(img);
                };

                reader.readAsDataURL(file);
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const iframes = document.querySelectorAll('iframe');

            iframes.forEach(iframe => {
                iframe.style.width = '100%';
                iframe.style.height = '100%';
                iframe.style.display = 'block'; // untuk memastikan tidak inline
            });
        });
    </script>



    <script>
        const LokasiButton = document.querySelectorAll('#lokasi');
        const modalPotensi = document.querySelectorAll('#modal');
        const closeModalButton = document.querySelectorAll('#closeModal');

        for (let o = 0; o < LokasiButton.length; o++) {
            LokasiButton[o].addEventListener('click', () => {
                modalPotensi[o].style.display = 'flex';
                setTimeout(() => {
                    modalPotensi[o].classList.remove('opacity-0');
                }, 10);
            });

            closeModalButton[o].onclick = function() {
                modalPotensi[o].classList.add('opacity-0');
                setTimeout(() => {
                    modalPotensi[o].style.display = 'none';
                }, 500);

            }
            window.onclick = function(event) {
                for (let y = 0; y < modalPotensi.length; y++) {
                    if (event.target === modalPotensi[y]) {
                        closeModalButton[y].onclick();
                    }
                }
            }


        };
    </script>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</x-body>

</html>
