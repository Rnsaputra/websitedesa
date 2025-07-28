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
                        <h1 class="w-full font-bold text-4xl block ">APBDes</h1>
                    </div>
                    <!-- header End -->

                    {{-- form --}}
                    <div id="" class="mx-auto lg:px-15 px-3  w-full ">
                        {{-- success alert --}}
                        <div class="  grid lg:grid-cols-2 grid-cols-1 gap-3 ">
                            <div class="w-full pb-3  rounded-lg md:col-span-2 drop-shadow-md ">
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
                                <div class=" flex items-center drop-shadow-lg  flex-wrap  w-full">
                                    <section id="" class=" flex  w-1/2  p-2 items-center justify-center">

                                        <div class=" h-full bg-white p-2 w-full text-center rounded-xl shadow-xl">

                                            <h1 class="text-lg font-bold lg:text-4xl">Pemasukan</h1>
                                            <div id="income" class="max-w-5/8  mx-auto ">
                                            </div>
                                            <a href="apbdes/income" class="block">
                                                <div
                                                    class="bg-yellow-500 p-1 rounded-sm w-full h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-amber-300 transition duration-200">
                                                    <div href="#"
                                                        class=" cursor-pointer text-white group-hover:text-yellow-500 ">
                                                        <p class="font-bold">Edit</p>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </section>
                                    <section id="" class=" flex  w-1/2 p-2  items-center justify-center">

                                        <div class=" h-full bg-white w-full p-2 text-center rounded-xl shadow-xl">

                                            <h1 class="text-lg font-bold lg:text-4xl">pengeluaran</h1>
                                            <div id="outcome" class="max-w-5/8  mx-auto">
                                            </div>
                                            <a href="apbdes/outcome" class="block">
                                                <div
                                                    class="bg-yellow-500 p-1 rounded-sm w-full h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-amber-300 transition duration-200">
                                                    <div href="#"
                                                        class=" cursor-pointer text-white group-hover:text-yellow-500">
                                                        <p class="font-bold">Edit</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </section>
                                    <section id=""
                                        class=" flex  w-full h-100 p-2   items-center justify-center">

                                        <div class=" h-full bg-white p-2 w-full text-center rounded-xl shadow-xl">
                                            <div id="apbdes" class=" mx-auto">
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
        const side = document.querySelector('#nav-apbdes');
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

        // Grafik Pemasukan
        const grafikincome = {
            chart: {
                type: 'line',
                width: '100%',
                height: '100%'
            },
            series: [{
                name: 'Pemasukan',
                data: totalPendapatan
            }],
            xaxis: {
                categories: yearIncome
            },
            yaxis: {
                min: 1000000,
                labels: {
                    formatter: function(value) {
                        return 'Rp ' + value.toLocaleString('id-ID'); // Format sebagai Rupiah
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ['#00A63E'],
            tooltip: {
                y: {
                    formatter: function(val) {
                        return 'Rp ' + val.toLocaleString('id-ID');
                    }
                }
            }
        };

        // Grafik Pengeluaran
        const grafikoutcome = {
            chart: {
                type: 'line',
                width: '100%',
                height: '100%'
            },
            series: [{
                name: 'Pengeluaran',
                data: totalPengeluaran
            }],
            xaxis: {
                categories: yearOutcome
            },
            yaxis: {
                min: 1000000,
                labels: {
                    formatter: function(value) {
                        return 'Rp ' + value.toLocaleString('id-ID'); // Format sebagai Rupiah
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ['#FB2C36'],
            tooltip: {
                y: {
                    formatter: function(val) {
                        return 'Rp ' + val.toLocaleString('id-ID');
                    }
                }
            }
        };

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
        new ApexCharts(document.querySelector("#income"), grafikincome).render();
        new ApexCharts(document.querySelector("#outcome"), grafikoutcome).render();
        new ApexCharts(document.querySelector("#apbdes"), apbdes).render();
    </script>
    <!-- Jangan lupa tambahkan Alpine.js untuk interaktivitas toggle -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</x-body>

</html>
