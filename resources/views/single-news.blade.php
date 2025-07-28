<!DOCTYPE html>
<html lang="id">

<x-head>

</x-head>

<x-body>
    <!-- Navbar Section Start -->
    <x-navbar></x-navbar>
    <!-- Navbar Section End -->

    <!-- Berita Section Start -->
    <section id="program" class="lg:px-5 ">
        <div class="pt-15 pb-10">
            <div class="container relative px-5 flex flex-wrap gap-2  justify-center ">
                <div class="max-w-5xl w-full bg-white shadow-lg rounded-lg overflow-hidden p-4 lg:w-4/6">
                    <div class="p-2">
                        <div class="font-bold "><a href="/" class="fa-solid fa-house cursor-pointer"></a> / <a
                                href="/home-news"> Berita</a> / <a
                                href="/berita/{{ $post['slug'] }}">{{ $post['slug'] }}</a> </div>
                        <h1 class="text-2xl font-bold mb-2 md:text-3xl">
                            {{ $post['title'] }}
                        </h1>
                        <p class="text-gray-600 text-sm mb-4">
                            Ditulis oleh
                            <span class="font-semibold"> <a href="/berita?author={{ $post->author->username }}"
                                    class="hover:underline"> {{ $post->author->name }}</a> </span>
                            pada
                            <span class="font-semibold">{{ $post->created_at->diffForHumans() }}</span>
                        </p>
                    </div>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Berita"
                            class=" rounded-lg aspect-3/2 align-self-center w-3/4 mx-auto  object-cover  md:h-80 lg:h-96 ">
                    @else
                        <img src="https://picsum.photos/720?random={{ $post['image'] }}" alt="Gambar Berita"
                            class=" rounded-lg aspect-3/2 align-self-center w-3/4 mx-auto  object-cover  md:h-80 lg:h-96 ">
                    @endif
                    <div class="p-6">
                        <p class="text-gray-800 mb-4">
                            {!! $post['body'] !!}
                    </div>
                    <div class="w-full">
                        <a href="/berita" class="text-blue-800 hover:underline">
                            &laquo; kembali ke menu berita
                        </a>
                    </div>
                </div>
                <div class="w-full lg:w-1/6 rounded-lg overflow-hidden ">
                    <h1 class="p-2 text-md font-bold block bg-white ">
                        Berita Terkini
                    </h1>
                    <div class="swiper berita h-150 rounded-b-lg bg-white p-4">

                        <div class="swiper-wrapper">

                            @foreach ($terbaru as $newest)
                                <div class="swiper-slide max-w-80 shadow-lg ">
                                    <a href="/berita/{{ $newest['slug'] }}"
                                        class=" snap-center bg-white rounded-2xl p-3 flex flex-col overflow-hidden justify-between  ">
                                        <div class="">
                                            <div class="overflow-hidden rounded-xl relative">
                                                @if ($newest->image)
                                                    <img src="{{ asset('storage/' . $newest->image) }}"
                                                        alt="Gambar Berita"
                                                        class=" w-full aspect-3/2 object-cover rounded-xl transition-all duration-300 ease-in-out transform hover:scale-120 ">
                                                @else
                                                    <img src="https://picsum.photos/200?random=1"
                                                        alt="Gambar Berita"
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

            </div>
        </div>

    </section>

    <!-- FOOTER START-->
    <x-footer></x-footer>
    <!-- FOOTER END-->



    @vite('resources/js/app.js')

</x-body>

</html>
