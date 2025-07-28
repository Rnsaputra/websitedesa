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
                    <div class="bg-white shadow w-full h-15 fixed items-center flex z-10">
                        <p class=" lg:text-2xl text-sm font-semibold text-left lg:ml-10 ml-2 ">

                        </p>

                    </div>
                    <!-- header End -->

                    {{-- register --}}
                    <div id="news-list" class=" flex flex-wrap w-full p-2 mt-20  gap-4">
                        <!-- Daftar Berita -->
                        <div class="max-w-5xl w-full bg-white shadow-lg rounded-lg mx-auto p-4 lg:w-4/6">
                            <div class="p-2">
                                <div class="font-bold "><span class="fa-solid fa-house cursor-pointer"></span> / Berita
                                    / {{ $post['slug'] }} </div>
                                <h1 class="text-2xl font-bold mb-2 md:text-3xl">
                                    {{ $post['title'] }}
                                </h1>
                                <div class="py-2 flex flex-wrap gap-3">
                                    <a href="/dashboard/{{ auth()->user()->role }}/posts" class="block">
                                        <div
                                            class="bg-blue-400 p-1 rounded-sm w-20 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-blue-300">
                                            <div class=" cursor-pointer text-white group-hover:text-blue-400">
                                                <p class="font-bold">kembali</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="block">
                                        <div
                                            class="bg-yellow-500 p-1 rounded-sm w-20 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-amber-300">
                                            <div href="#"
                                                class=" cursor-pointer text-white group-hover:text-yellow-500">
                                                <p class="font-bold">Edit</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="block">
                                        <div
                                            class="bg-red-500 p-1 rounded-sm w-20 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-red-500">
                                            <div href="#"
                                                class=" cursor-pointer text-white group-hover:text-red-500">
                                                <p class="font-bold">Hapus</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <p class="text-gray-600 text-sm mb-4">
                                    Ditulis oleh
                                    <span class="font-semibold"> <a href="/berita?author={{ $post->author->username }}"
                                            class="hover:underline"> {{ $post->author->name }}</a> </span>
                                    pada
                                    <span class="font-semibold">{{ $post->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post -> image ) }}" alt="Gambar Berita"
                                    class=" rounded-lg aspect-3/2 align-self-center w-3/4 mx-auto  object-cover  md:h-80 lg:h-96 ">
                            @else
                                <img src="https://image.unsplash.com/example" alt="Gambar Berita"
                                    class=" rounded-lg aspect-3/2 align-self-center w-3/4 mx-auto  object-cover  md:h-80 lg:h-96 ">
                            @endif

                            <div class="p-6">
                                <div class="text-gray-800 mb-4 whitespace-pre-wrap break-words">
                                    {!! $post['body'] !!}
                                </div>
                            </div>
                        </div>





                        <!-- Tambahkan lebih banyak artikel berita sesuai kebutuhan -->
                    </div>
                </div>

            </div>



        </div>
    </section>
    <script>
        const currentPath = window.location.pathname;
        // Peta ID navigasi berdasarkan awalan path
        const navMap = {
            '/dashboard/admin/posts': 'nav-posts',
            '/dashboard/admin/allposts': 'nav-allposts',
            '/dashboard/writer/allposts': 'nav-allposts',
            '/dashboard/writer/allposts': 'nav-allposts'
        };
        // Temukan key pertama yang cocok sebagian
        const matchedKey = Object.keys(navMap).find(key => currentPath.startsWith(key));
        const navId = navMap[matchedKey];
        if (navId) {
            const side = document.getElementById(navId);
            if (side) {
                side.classList.add('bg-primary');
                side.classList.add('text-white');
            }
        }
    </script>

    @vite('resources/js/app.js')

</x-body>

</html>
