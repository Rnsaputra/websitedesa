<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<x-body>
    <x-navbar class=""></x-navbar>
    <section class="container gap-2 w-full justify-center items-start   flex flex-wrap">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:pt-20  lg:px-6">
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
                            <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 ">search
                                bar</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>

                            </div>
                            <input
                                class="block p-3 max-w-2xl pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 "
                                placeholder="cari berita" type="text" id="search" name="search" required="">
                        </div>
                        <div>
                            <button type="submit"
                                class="py-3 px-5 w-full text-sm font-semibold text-center text-white rounded-lg border cursor-pointer bg-primary border-primary/70 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800">Search</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <section id="Berita" class="container gap-2 w-full justify-center items-start   flex flex-wrap pb-20">

        <div class=" flex flex-wrap  gap-4 w-4/6 p-2 rounded-lg bg-slate-50 shadow-lg ">
            <!-- Daftar Berita -->
            <h1 class="block w-full font-bold border-b border-dark/10 sticky"><a href="/"
                    class="fa-solid fa-house cursor-pointer">
                </a> /
                <a href="/berita" class="hover:underline">
                    Berita
                </a> / {{ $title }}
            </h1>
            @forelse ($listpost as $list)
                <div class="lg:w-80 ">
                    <div
                        class=" snap-center bg-white rounded-2xl p-3 flex flex-col gap-2 overflow-hidden justify-between shadow-lg h-full ">
                        <div class="">
                            <div class="mb-2">
                                <a href="/berita?category={{ $list->category->slug }}"
                                    class="text-sm font-bold text-secondary hover:text-sky-800 hover:underline cursor-pointer bg-{{ $list->category->color }}-200 p-1 rounded-md">
                                    {{ $list->category->name }}
                                </a>
                            </div>


                            <div class="overflow-hidden rounded-xl">
                                @if ($list->image)
                                    <img src="{{ asset('storage/' . $list->image) }}" alt="Gambar Berita"
                                        class=" w-full aspect-3/2 object-cover rounded-xl transition-all duration-300 ease-in-out transform hover:scale-120 ">
                                @else
                                    <img src="https://picsum.photos/200?random=1" alt="Gambar Berita"
                                        class=" w-full aspect-3/2 object-cover rounded-xl transition-all duration-300 ease-in-out transform hover:scale-120 ">
                                @endif
                            </div>
                            <a href="/berita/{{ $list['slug'] }}"
                                class="font-bold text-lg text-left pt-2 text-dark md:text-lg line line-clamp-2 hover:underline cursor-pointer">
                                {{ Str::limit($list['title'], 50, '...') }}
                            </a>
                            <a href="/berita/{{ $list['slug'] }}"
                                class="font-bold text-xs text-left pt-2 text-sky-800 hover:text-sky-500 md:text-xs cursor-pointer hover:underline">
                                Read More
                            </a>
                        </div>
                        <div class="">
                            <p class="text-sm text-secondary">{{ $list->created_at->diffForHumans() }}
                            </p>

                            <a href="/berita?author={{ $list->author->username }}"
                                class="text-sm text-secondary hover:text-sky-600 hover:underline cursor-pointer">{{ $list->author->name }}</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-xl font-bold w-full ">Article not Found!</p>
            @endforelse
            <div class="flex align-content-between  w-full">
                <div class="mx-auto ">{{ $listpost->links() }}
                </div>
            </div>
            <div class="w-full"><a href="/berita" class="text-blue-800 hover:underline">&laquo; kembali ke menu
                    berita</a></div>




        </div>
        <div class="w-full lg:w-1/6 rounded-lg overflow-hidden p-2 bg-slate-50">
            <h1 class="block w-full font-bold border-b border-dark/10  bg-slate-50 sticky">
                Berita Terkini
            </h1>
            <div class="swiper berita h-150 rounded-b-lg bg-slate-50 p-4">

                <div class="swiper-wrapper">

                    @foreach ($terbaru as $newest)
                        <div class="swiper-slide max-w-80 shadow-lg ">
                            <a href="/berita/{{ $newest['slug'] }}"
                                class=" snap-center bg-white rounded-2xl p-3 flex flex-col overflow-hidden justify-between  ">
                                <div class="">
                                    <div class="overflow-hidden rounded-xl relative">
                                        @if ($newest->image)
                                            <img src="{{ asset('storage/' . $newest->image) }}" alt="Gambar Berita"
                                                class=" w-full aspect-3/2 object-cover rounded-xl transition-all duration-300 ease-in-out transform hover:scale-120 ">
                                        @else
                                            <img src="https://picsum.photos/200?random=1" alt="Gambar Berita"
                                                class=" w-full aspect-3/2 object-cover rounded-xl transition-all duration-300 ease-in-out transform hover:scale-120 ">
                                        @endif
                                        <div
                                            class=" z-10 bottom-0 bg-dark/70 hover:bg-dark transition-all duration-400   w-full  absolute ">
                                            <div class="mx-2 bottom-0 border-white">
                                                <h1
                                                    class="font-bold text-lg text-left my-auto    text-white md:text-lg line line-clamp-1  ">
                                                    {{ $newest['title'] }}
                                                </h1>
                                                <p
                                                    class="text-lg text-center mx-auto  text-white md:text-xs line line-clamp-1">
                                                    uploaded {{ $newest['created_at']->diffForHumans() }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <x-footer></x-footer>
    @vite('resources/js/app.js')
</x-body>

</html>
