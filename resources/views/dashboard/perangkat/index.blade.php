<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<x-body>
    <section>
        <div class="flex flex-col">
            <div class="flex flex-1">
                {{-- sidebar --}}
                <x-sidebar></x-sidebar>
                <div class="  w-full static flex flex-col gap-4     ">
                    <div class="bg-primary shadow w-full h-15 fixed items-center flex z-10">
                        <p class=" lg:text-2xl text-sm font-semibold text-left lg:ml-10 ml-2 ">
                        </p>
                    </div>
                    <div class="flex gap-3 min-h-20 bg-white p-2 shadow-xl lg:px-15 w-full items-center mt-15">
                        <h1 class="w-full font-bold text-4xl block ">Perangkat Desa</h1>
                        <div class="flex gap-2 items-center">
                            <a href="perangkat/create"
                                class="bg-emerald-500 p-1 rounded-sm h-10 w-45 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-emerald-300 text-white font-bold hover:text-emerald-400">
                                <i class="fa-solid fa-plus fa-lg p-2"></i>Tambah data
                            </a>
                        </div>
                    </div>

                    <div id="user" class="mx-auto lg:px-15 px-3 mt-20 w-full show">
                        <div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead>
                                    <tr class="bg-rose-500 text-white">
                                        <th class="py-2 px-4 border-b text-left border-r border-gray-200">Nama</th>
                                        <th class="py-2 px-4 border-b text-left border-r border-gray-200">Jabatan</th>
                                        <th class="py-2 px-4 border-b text-left border-gray-200 ">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $users)
                                        <tr class="{{ $loop->even ? 'bg-rose-100' : 'bg-white' }}">
                                            <td class="py-2 px-4 border-r border-gray-200">{{ $users->name }}</td>
                                            <td class="py-2 px-4 border-r border-gray-200">{{ $users->job }}</td>
                                            <td class="py-2 px-4 border-r border-gray-200 flex gap-2">
                                                <a href="/dashboard/admin/perangkat/{{ $users->name }}/edit"
                                                    class="block">
                                                    <div
                                                        class="bg-yellow-400 p-1 rounded-sm w-10 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-amber-300">
                                                        <div href="#"
                                                            class="fa-solid fa-pen-to-square cursor-pointer text-white group-hover:text-yellow-400">
                                                        </div>
                                                    </div>
                                                </a>
                                                <form action="/dashboard/admin/perangkat/{{ $users->name }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf

                                                    <button>
                                                        <div
                                                            class="bg-red-500 p-1 rounded-sm w-10 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-red-500">
                                                            <span
                                                                class="fa-solid fa-trash cursor-pointer text-white group-hover:text-red-500">
                                                            </span>
                                                        </div>
                                                    </button>
                                                </form>
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
        const side = document.querySelector('#nav-perangkat');
        side.classList.add('bg-primary');
        side.classList.add('text-white');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</x-body>

</html>
