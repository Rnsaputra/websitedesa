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

                <div class="  w-full static flex flex-col gap-4     ">
                    <!-- header Start -->
                    <div class="bg-primary shadow w-full h-15 fixed items-center flex z-10">
                        <p class=" lg:text-2xl text-sm font-semibold text-left lg:ml-10 ml-2 ">
                        </p>
                    </div>
                    <div class="flex gap-3 min-h-20 bg-white p-2 shadow-xl lg:px-15 w-full items-center mt-15">
                        <h1 class="w-full font-bold text-4xl block ">Data Penduduk</h1>
                        <div class="flex gap-2 items-center">
                            <a href="demografis/data"
                                class="bg-yellow-500 p-1 rounded-sm h-10 w-45 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-yellow-300 text-white font-bold hover:text-yellow-400">
                                <i class="fa-solid fa-pen-to-square fa-lg p-2"></i>Edit
                            </a>
                        </div>
                    </div>
                    <!-- header End -->

                    {{-- form --}}
                    <div id="register" class="mx-auto lg:px-15 px-3  w-full ">
                        {{-- success alert --}}
                        <div class="  grid lg:grid-cols-2 grid-cols-1 gap-3 ">
                            <div class="w-full pb-3  rounded-lg md:col-span-2 drop-shadow-md">
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
                                <div class="mt-20 flex justify-center items-center drop-shadow-lg  flex-wrap  w-full ">
                                    <section id="" class="flex w-1/2 p-2 items-center justify-center">
                                        <div
                                            class="h-full p-2 w-full grid grid-cols-1 lg:grid-cols-2 gap-4 place-content-between">

                                            <div class="shadow bg-white rounded-2xl flex flex-wrap content-center p-4">
                                                <div class="max-w-30 w-1/2">
                                                    <i class="fas fa-users fa-7x text-primary"></i>
                                                    <!-- Ikon Font Awesome -->
                                                </div>
                                                <div class="content-center pl-5 w-1/2">
                                                    <h1 class="text-2xl font-bold text-left text-primary">
                                                        {{ $total['jumlah'] }}</h1>
                                                    <p class="font-semibold text-base">Penduduk</p>
                                                </div>
                                            </div>

                                            <div class="shadow bg-white rounded-2xl flex flex-wrap content-center p-4">
                                                <div class="max-w-30 w-1/2">
                                                    <i class="fas fa-user-friends fa-7x text-primary"></i>
                                                    <!-- Ikon Font Awesome -->
                                                </div>
                                                <div class="content-center pl-5 w-1/2">
                                                    <h1 class="text-2xl font-bold text-left text-primary">
                                                        {{ $total['kepala'] }}</h1>
                                                    <p class="font-semibold text-base">Kepala Keluarga</p>
                                                </div>
                                            </div>

                                            <div class="shadow bg-white rounded-2xl flex flex-wrap content-center p-4">
                                                <div class="max-w-30 w-1/2">
                                                    <i class="fas fa-male fa-7x text-primary"></i>
                                                    <!-- Ikon Font Awesome -->
                                                </div>
                                                <div class="content-center pl-5 w-1/2">
                                                    <h1 class="text-2xl font-bold text-left text-primary">
                                                        {{ $total['laki'] }}</h1>
                                                    <p class="font-semibold text-base whitespace-nowrap">Laki Laki</p>
                                                </div>
                                            </div>

                                            <div class="shadow bg-white rounded-2xl flex flex-wrap content-center p-4">
                                                <div class="max-w-30 w-1/2">
                                                    <i class="fas fa-female fa-7x text-primary"></i>
                                                    <!-- Ikon Font Awesome -->
                                                </div>
                                                <div class="content-center pl-5 w-1/2">
                                                    <h1 class="text-2xl font-bold text-left text-primary">
                                                        {{ $total['perempuan'] }}</h1>
                                                    <p class="font-semibold text-base">Perempuan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section id="" class=" flex  w-1/2 p-2  items-center justify-center">

                                        <div class=" h-full  w-full p-2 text-center rounded-xl  grid grid-cols-1">

                                            <div
                                                class=" shadow bg-white w-full h-full rounded-2xl flex flex-wrap content-center place-content-center">
                                                <h1 class="lg:text-2xl text-lg font-semibold text-center w-full">
                                                    Berdasarkan Dusun
                                                </h1>
                                                <div id="chart" class="  lg:max-w-[400px] w-full mx-auto  ">
                                                </div>
                                            </div>
                                        </div>
                                    </section>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        const side = document.querySelector('#nav-demografis');
        side.classList.add('bg-primary');
        side.classList.add('text-white');
    </script>
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
    </script>
</x-body>

</html>
