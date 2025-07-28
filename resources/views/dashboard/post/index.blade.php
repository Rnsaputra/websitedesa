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
                    <!-- header Start -->
                    <div class="bg-primary shadow w-full h-15 fixed items-center flex z-10">
                        <p class=" lg:text-2xl text-sm font-semibold text-left lg:ml-10 ml-2 ">

                        </p>

                    </div>
                    <div class="flex gap-3 min-h-20 bg-white p-2 shadow-xl lg:px-15 w-full items-center mt-15">
                        <h1 class="w-full font-bold text-4xl block ">Daftar Berita</h1>
                        <div class="flex gap-2 items-center">
                            
                            <a href="posts/create"
                                    class="bg-emerald-500 p-1 rounded-sm h-10 w-45 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-emerald-300 text-white font-bold hover:text-emerald-400">
                                    <i class="fa-solid fa-plus fa-lg p-2"></i>Create New Post
                                </a>
                        </div>
                    </div>
                    <!-- header End -->

                    {{-- register --}}
                    <div id="news-list" class=" flex flex-wrap w-full px-15  gap-4">
                        
                        @if (session()->has('success'))
                            <div class="flex items-center bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded w-full relative"
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
                        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:pt-5  lg:px-6 ">
                            <div class="mx-auto  sm:text-center">

                                <form action="#">
                                    @if (request('category'))
                                        <input type="hidden" name="category" value="{{ request('category') }}">
                                    @endif
                                    @if (request('author'))
                                        <input type="hidden" name="author" value="{{ request('author') }}">
                                    @endif
                                    <div class="items-center mx-auto mb-3  sm:flex sm:space-y-0 ">
                                        <div class="relative w-full">
                                            <label for="search"
                                                class="hidden mb-2 text-sm font-medium text-gray-900 ">search
                                                bar</label>
                                            <div
                                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 " aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                                </svg>

                                            </div>
                                            <input
                                                class="block p-3 max-w-2xl pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 "
                                                placeholder="cari berita" type="text" id="search" name="search"
                                                required="">
                                        </div>
                                        <div>
                                            <button type="submit"
                                                class="py-3 px-5 w-full text-sm font-semibold text-center text-white rounded-lg border cursor-pointer bg-primary border-primary/70 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800">Search</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- Daftar Berita -->
                        <div class=" flex flex-wrap mx-auto gap-4 w-full ">

                            @forelse ($posts as $list)
                                <div class="lg:w-70 ">
                                    <div
                                        class=" snap-center bg-white rounded-2xl p-3 flex flex-col gap-2 overflow-hidden justify-between shadow-lg {{ $list->is_active ? '' : 'shadow-primary ' }}">
                                        <div class=" aspect-5/6">
                                            <div class="mb-2">
                                                <a href="/dashboard/{{ auth()->user()->role }}/posts?category={{ $list->category->slug }}"
                                                    class="text-sm font-bold text-secondary hover:text-sky-800 hover:underline cursor-pointer bg-{{ $list->category->color }}-200 p-1 rounded-md">
                                                    {{ $list->category->name }}
                                                </a>
                                            </div>


                                            <div class="overflow-hidden rounded-xl">

                                                @if ($list->image)
                                                    <img src="{{ asset('storage/' . $list->image) }}"
                                                        alt="Gambar Berita"
                                                        class=" w-full aspect-3/2 object-cover rounded-xl transition-all duration-300 ease-in-out transform hover:scale-120 ">
                                                @else
                                                    <img src="https://picsum.photos/200?random=1" alt="Gambar Berita"
                                                        class=" w-full aspect-3/2 object-cover rounded-xl transition-all duration-300 ease-in-out transform hover:scale-120 ">
                                                @endif
                                            </div>
                                            <p
                                                class="font-bold text-lg text-left pt-2 text-dark md:text-lg line line-clamp-2  ">
                                                {{ Str::limit($list['title'], 50, '...') }}
                                            </p>

                                        </div>
                                        <div class=" flex flex-col gap-2">
                                            <div class="flex gap-2">
                                                <a href="/dashboard/{{ auth()->user()->role }}/posts/{{ $list->slug }}"
                                                    class="block">
                                                    <div
                                                        class="bg-blue-400 p-1 rounded-sm w-10 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-blue-300 transition duration-200">
                                                        <div
                                                            class="fa-solid fa-eye cursor-pointer text-white group-hover:text-blue-400">
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/dashboard/{{ auth()->user()->role }}/posts/{{ $list->slug }}/edit"
                                                    class="block">
                                                    <div
                                                        class="bg-yellow-400 p-1 rounded-sm w-10 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-amber-300 transition duration-200">
                                                        <div href="#"
                                                            class="fa-solid fa-pen-to-square cursor-pointer text-white group-hover:text-yellow-400">
                                                        </div>
                                                    </div>
                                                </a>
                                                <form
                                                    action="/dashboard/{{ auth()->user()->role }}/posts/{{ $list->slug }}"
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
                                            <p class="text-sm text-secondary">{{ $list->created_at->diffForHumans() }}
                                            </p>
                                            @if (request()->is('dashboard/{{ auth()->user()->role }}/posts'))
                                                <p class="text-sm text-secondary">
                                                    {{ $list->author->name }}
                                                </p>
                                            @else
                                                <a href="/dashboard/{{ auth()->user()->role }}/allposts?author={{ $list->author->username }}"
                                                    class="text-sm text-secondary">
                                                    {{ $list->author->name }}
                                                </a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-xl font-bold w-full ">Article not Found!</p>
                            @endforelse
                        </div>

                        <div class="flex align-content-between  w-full ">
                            <div class="mx-auto ">{{ $posts->links() }}
                            </div>
                        </div>

                        {{-- post form --}}






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
