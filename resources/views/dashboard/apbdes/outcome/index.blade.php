<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<x-body>
    <section>
        <div class="flex flex-col">
            <div class="flex flex-1">
                {{-- sidebar --}}
                <x-sidebar> </x-sidebar>
                <div class="  w-full static flex flex-col gap-4     ">
                    <div class="bg-primary shadow w-full h-15 fixed items-center flex z-10">
                        <p class=" lg:text-2xl text-sm font-semibold text-left lg:ml-10 ml-2 ">
                        </p>
                    </div>
                    <div class="flex gap-3 min-h-20 bg-white p-2 shadow-xl lg:px-15 w-full items-center mt-15">
                        <h1 class="w-full font-bold text-4xl block ">Pengeluaran</h1>
                        <div class="flex gap-2 items-center">
                            <a href="outcome/create"
                                class="bg-emerald-500 p-1 rounded-sm h-10 w-45 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-emerald-300 text-white font-bold hover:text-emerald-400">
                                <i class="fa-solid fa-plus fa-lg p-2"></i>Tambah Data
                            </a>
                        </div>

                    </div>
                    @if (session()->has('success'))
                        <div class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded w-full relative"
                            role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <button class="text-green-500 hover:text-green-700"
                                    onclick="this.parentElement.parentElement.style.display='none'">
                                    &times;
                                </button>
                            </span>
                        </div>
                    @endif

                    <div id="user" class="mx-auto lg:px-15 px-3 mt-20 w-full show">
                        <div>

                            <table class="min-w-full bg-white border border-gray-200">
                                <thead>
                                    <tr class="bg-rose-500 text-white">
                                        <th class="py-2 px-4 border-b text-left border-r border-gray-200">Tahun</th>
                                        <th class="py-2 px-4 border-b text-left border-r border-gray-200">
                                            penyelenggaraan pemerintahan desa</th>
                                        <th class="py-2 px-4 border-b text-left border-r border-gray-200">Pembangunan
                                            Desa</th>
                                        <th class="py-2 px-4 border-b text-left border-r border-gray-200">Pembinaan
                                            Masyarakat Desa</th>
                                        <th class="py-2 px-4 border-b text-left border-r border-gray-200">pemberdayaan
                                            Masyarakat Desa</th>
                                        <th class="py-2 px-4 border-b text-left border-r border-gray-200">Penanggulangan
                                            bencana</th>
                                        <th class="py-2 px-4 border-b text-left border-r border-gray-200">total</th>
                                        <th class="py-2 px-4 border-b text-left border-r border-gray-200">diperbaruhi
                                        </th>
                                        <th class="py-2 px-4 border-b text-left border-gray-200 ">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($outcome as $data)
                                        <tr class="{{ $loop->even ? 'bg-rose-100' : 'bg-white' }}">
                                            <td class="py-2 px-4 border-r border-gray-200">{{ $data->year }}</td>
                                            <td class="py-2 px-4 border-r border-gray-200">Rp.
                                                {{ number_format($data->pemerintahan, 2, ',', '.') }}</td>
                                            <td class="py-2 px-4 border-r border-gray-200">Rp.
                                                {{ number_format($data->pembangunan, 2, ',', '.') }}</td>
                                            <td class="py-2 px-4 border-r border-gray-200">Rp.
                                                {{ number_format($data->pembinaan, 2, ',', '.') }}</td>
                                            <td class="py-2 px-4 border-r border-gray-200">Rp.
                                                {{ number_format($data->pemberdayaan, 2, ',', '.') }}</td>
                                            <td class="py-2 px-4 border-r border-gray-200">Rp.
                                                {{ number_format($data->bencana, 2, ',', '.') }}</td>
                                            <td class="py-2 px-4 border-r border-gray-200">Rp.
                                                {{ number_format($data->total_pengeluaran, 2, ',', '.') }} </td>
                                            <td class="py-2 px-4 border-r border-gray-200">
                                                {{ $data->updated_at->setTimezone('Asia/Jakarta')->format('d-m-Y H:i') }}
                                            </td>

                                            <td class="py-2 px-4 border-r border-gray-200 flex gap-2">

                                                <a href="outcome/{{ $data->year }}/edit" class="block">
                                                    <div
                                                        class="bg-yellow-400 p-1 rounded-sm w-10 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-amber-300">
                                                        <div href="#"
                                                            class="fa-solid fa-pen-to-square cursor-pointer text-white group-hover:text-yellow-400">
                                                        </div>
                                                    </div>
                                                </a>
                                                <form action="outcome/{{ $data->year }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button onclick="return confirm('Are You Sure?')"
                                                        class="bg-red-500 p-1 cursor-pointer rounded-sm w-10 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-red-500 transition duration-200">
                                                        <span
                                                            class="fa-solid fa-trash cursor-pointer text-white group-hover:text-red-500">
                                                        </span>
                                                    </button>
                                                </form>
                                                <a href="#" class="block">
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>



        </div>
    </section>
    <script>
        const side = document.querySelector('#nav-apbdes');
        side.classList.add('bg-primary');
        side.classList.add('text-white');
    </script>
</x-body>

</html>
