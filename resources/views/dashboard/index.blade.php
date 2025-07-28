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
                        <h1 class="w-full font-bold text-4xl block ">Dashboard</h1>

                    </div>
                    <!-- header End -->
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
                                <div class="flex flex-wrap justify-center items-start w-full">
                                    @if (Auth::user()->role === 'admin')
                                        <section class="flex w-full md:w-3/6 p-4">
                                            <a a href="/dashboard/admin/demografis"
                                                class="bg-blue-100 p-6 w-full min-h-60  rounded-2xl shadow-lg flex flex-col items-center text-center transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                                                <i class="fas fa-chart-pie text-blue-600 text-4xl mb-2"></i>
                                                <h1 class="text-lg font-bold lg:text-2xl">Data Penduduk Berdasarkan
                                                    Dusun
                                                </h1>
                                                <div id="chart" class="w-full mt-4 max-w-[400px]"></div>
                                            </a>
                                        </section>

                                        <!-- Penggunaan Anggaran -->
                                        <section class="flex w-full md:w-3/6 p-4">
                                            <a a href="/dashboard/admin/apbdes"
                                                class="bg-green-100 p-6 w-full min-h-60 rounded-2xl shadow-lg flex flex-col items-center text-center transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                                                <i class="fas fa-wallet text-green-700 text-4xl mb-2"></i>
                                                <h1 class="text-lg font-bold lg:text-2xl">Penggunaan Anggaran</h1>
                                                <div id="apbdes" class="w-full mt-4"></div>
                                            </a>
                                        </section>

                                        <!-- Jumlah User -->
                                        <section class="flex w-full md:w-2/6 p-4">
                                            <a href="/dashboard/admin/user"
                                                class="bg-indigo-100 p-6 w-full min-h-60 rounded-2xl shadow-lg flex flex-col items-center text-center transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                                                <i class="fas fa-users text-indigo-700 text-4xl mb-2"></i>
                                                <h1 class="text-lg font-bold lg:text-2xl">Jumlah User</h1>
                                                <p class="text-6xl mt-4 font-bold">{{ $userCount }}</p>
                                            </a>
                                        </section>

                                        <!-- Perangkat Desa -->
                                        <section class="flex w-full md:w-2/6 p-4">
                                            <a a href="/dashboard/admin/perangkat"
                                                class="bg-orange-100 p-6 w-full min-h-60 rounded-2xl shadow-lg flex flex-col items-center text-center transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                                                <i class="fas fa-user-tie text-orange-700 text-4xl mb-2"></i>
                                                <h1 class="text-lg font-bold lg:text-2xl">Jumlah Perangkat Desa</h1>
                                                <p class="text-6xl mt-4 font-bold">{{ $perangkatCount }}</p>
                                            </a>
                                        </section>

                                        <!-- Potensi Desa -->
                                        <section class="flex w-full md:w-2/6 p-4">
                                            <a href="/dashboard/admin/potensi"
                                                class="bg-lime-100 p-6 w-full min-h-60 rounded-2xl shadow-lg flex flex-col items-center text-center transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                                                <i class="fas fa-leaf text-lime-700 text-4xl mb-2"></i>
                                                <h1 class="text-lg font-bold lg:text-2xl">Jumlah Potensi Desa</h1>
                                                <p class="text-6xl mt-4 font-bold">{{ $potensiCount }}</p>
                                            </a>
                                        </section>

                                        <!-- Semua Artikel -->
                                        <section class="flex w-full md:w-3/6 p-4">
                                            <a href="/dashboard/admin/allposts"
                                                class="bg-gray-100 p-6 w-full min-h-60 rounded-2xl shadow-lg flex flex-col items-center text-center transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                                                <i class="fas fa-newspaper text-gray-700 text-4xl mb-2"></i>
                                                <h1 class="text-lg font-bold lg:text-2xl">Jumlah Semua Artikel</h1>
                                                <p class="text-6xl mt-4 font-bold">{{ $articleCount }}</p>
                                            </a>
                                        </section>
                                    @endif
                                    <!-- Grafik Penduduk -->


                                    <!-- Artikel Saya -->
                                    <section class="flex w-full md:w-3/6 p-4">
                                        <a href="/dashboard/admin/posts"
                                            class="bg-purple-100 p-6 w-full min-h-60 rounded-2xl shadow-lg flex flex-col items-center text-center transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                                            <i class="fas fa-user-edit text-purple-700 text-4xl mb-2"></i>
                                            <h1 class="text-lg font-bold lg:text-2xl">Jumlah Artikel Saya</h1>
                                            <p class="text-6xl mt-4 font-bold">{{ $myarticle->count() }}</p>
                                        </a>
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
        const side = document.querySelector('#nav-dashboard-admin');
        side.classList.add('bg-primary');
        side.classList.add('text-white');
    </script>
    <script>
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
        // Grafik Gabungan Pemasukan dan Pengeluaran
        const apbdes = {
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
                    return 'Rp ' + value.toLocaleString('id-ID'); // Format sebagai Rupiah
                },

            }
        };
        // Render grafik
        new ApexCharts(document.querySelector("#apbdes"), apbdes).render();
    </script>
    <script>
        const warga = @json($penduduk);

        const series = warga.map(item => item.total_penduduk);
        const labels = warga.map(item => item.namadusun);

        const options = {
            series: series,
            chart: {
                type: 'pie',
                width: '100%',
                height: '100%'

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
