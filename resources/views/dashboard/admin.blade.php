<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<x-body>
    <section>
        <div class="flex flex-col">
            <div class="flex flex-1">
                {{-- sidebar --}}
                <div class="bg-primary lg:w-65 w-20 h-screen sticky top-0 shadow-2xl">
                    <div class="w-full  pb-2 pt-4 px-4  h-15 shadow-xl bg-slate-800/8">
                        <p class="text-3xl font-bold text-white text-left"> Dashboard</p>
                    </div>
                    {{-- side menu --}}


                </div>

                <div class="  w-full st atic flex flex-col gap-4">
                    <!-- header Start -->
                    <div class="bg-white shadow w-full h-15 fixed items-center flex z-10">
                        <p class=" lg:text-2xl text-sm font-semibold text-left lg:ml-10 ml-2 ">
                            <span id="day" class=" px-1"></span>
                            <span id="date" class=" px-1"></span>
                            <span id="time" class=" px-1"></span>
                        </p>

                    </div>

                    {{-- isi dashboard --}}
                    <div id="register" class="mx-auto   mt-15 w-full  ">
                        <div class="flex gap-1 flex-col items-center justify-center min-h-20 bg-white lg:px-15">
                            <h1 class=" w-full font-bold text-2xl block">Post List</h1>
                            <div class="w-full"><a href="/admin" class="text-blue-800 hover:underline">&laquo; kembali
                                </a></div>
                        </div>

                        <div id="news-list" class=" flex flex-wrap  gap-4 w-full p-2  ">
                            <!-- Daftar Berita -->
                            @forelse ($post as $list)
                                <div class="lg:w-80">
                                    <div
                                        class=" snap-center bg-white rounded-2xl p-3 flex flex-col gap-2 overflow-hidden justify-between shadow-lg ">
                                        <div class=" aspect-5/6">
                                            <div class="mb-2">
                                                <a href="/admin?category={{ $list->category->slug }}"
                                                    class="text-sm font-bold text-secondary hover:text-sky-800 hover:underline cursor-pointer bg-{{ $list->category->color }}-200 p-1 rounded-md">
                                                    {{ $list->category->name }}
                                                </a>
                                            </div>


                                            <div class="overflow-hidden rounded-xl"><img
                                                    src="https://picsum.photos/200?random={{ $list['image'] }}"
                                                    alt="image 1"
                                                    class="  w-full aspect-3/2 object-cover rounded-xl transition-all duration-300 ease-in-out transform hover:scale-120 ">
                                            </div>
                                            <p
                                                class="font-bold text-lg text-left pt-2 text-dark md:text-lg line line-clamp-2  ">
                                                {{ Str::limit($list['title'], 50, '...') }}
                                            </p>
                                            
                                        </div>
                                        <div class=" flex flex-col gap-2">
                                            <div class="flex gap-2">
                                                <a href="#" class="block">
                                                    <div class="bg-yellow-400 p-1 rounded-sm w-10 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-amber-300">
                                                        <div href="#" class="fa-solid fa-pen-to-square cursor-pointer text-white group-hover:text-yellow-400"></div>
                                                    </div>
                                                </a>

                                                <a href="#" class="block">
                                                    <div class="bg-red-500 p-1 rounded-sm w-10 h-10 flex items-center justify-center group hover:bg-white hover:border-2 hover:border-red-500">
                                                        <div href="#" class="fa-solid fa-trash cursor-pointer text-white group-hover:text-red-500"></div>
                                                    </div>
                                                </a>
                                                
                                                
                                            </div>
                                            <p class="text-sm text-secondary">{{ $list->created_at->diffForHumans() }}
                                            </p>

                                            <p
                                                class="text-sm text-secondary">
                                                {{ $list->author->name }}</p>

                                        </div>
                                    </div>
                                </div>
                            @empty
                                    <div class="mx-auto ">{{ $post->links() }}
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- header End -->






                </div>

            </div>



        </div>
    </section>


    @vite('resources/js/app.js')

</x-body>

</html>
