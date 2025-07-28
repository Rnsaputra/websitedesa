<div>
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-999">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4 py-3 flex ">
                    <span class="max-w-10  min-w mr-3">
                        <img src="{{ asset('img/Logo Wonogiri.svg') }}" alt="">
                    </span>

                    <a href="/#home" class="w-auto  text-dark flex-1  ">
                        <h1 class="font-bold text-base">Desa Setren</h1>
                        <h1 class="font-bold text-xs ">Kec. Slogohimo</h1>
                    </a>
                </div>
                <div class="flex items-center justify-center px-4 ">
                    <button id="hamburger" name="button" type="button" class="block absolute right-4  lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu"
                        class=" hidden transition-all transition-discrete absolute py-1  bg-white shadow-2xl rounded-md max-w-[250px] w-full top-full right-0 lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex lg:relative">
                            <li>
                                <a href="/#home"
                                    class=" {{ request()->is('/') ? 'text-red-500 fill-red-500 ' : 'text-dark fill-dark' }} menu   mx-4  py-2 flex font-medium text-base  hover:text-primary">Beranda</a>
                            </li>
                            <li class=" ">
                                <a id="profil"
                                    class=" {{ request()->is('/profil') ? 'text-red-500 fill-red-500 ' : 'text-dark fill-dark' }} menu mx-4 py-2 font-medium text-base text-dark hover:text-primary hover:fill-primary  w-50 flex justify-between lg:w-20">
                                    <span class="">Profil</span>
                                    <div id="arrow" class="arrow-rotate transition-transform duration-500">
                                        <?xml?><svg version="1.1" id="Layer_1" class="size-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 122.88 66.91" style="enable-background:new 0 0 122.88 66.91"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M11.68,64.96c-2.72,2.65-7.08,2.59-9.73-0.14c-2.65-2.72-2.59-7.08,0.13-9.73L56.87,1.97l4.8,4.93l-4.81-4.95 c2.74-2.65,7.1-2.58,9.76,0.15c0.08,0.08,0.15,0.16,0.23,0.24L120.8,55.1c2.72,2.65,2.78,7.01,0.13,9.73 c-2.65,2.72-7,2.78-9.73,0.14L61.65,16.5L11.68,64.96L11.68,64.96z" />
                                            </g>
                                        </svg>
                                    </div>
                                </a>

                                <ul class=" hidden border-b-[1px] border-dark/20 bg-slate-100 lg:absolute rounded-md"
                                    id="profil-menu">
                                    <li>
                                        <a href="/#About" id="subnav-profil"
                                            class="mx-11  py-2 flex font-medium text-base text-dark hover:text-primary">Tentang
                                            Kami</a>

                                    </li>
                                    <li>
                                        <a href="/#visiMisi" id="subnav-profil"
                                            class="mx-11  py-2 flex font-medium text-base text-dark hover:text-primary">Visi
                                            Misi</a>
                                    </li>
                                    <li>
                                        <a href="/#Struktur" id="subnav-profil"
                                            class="mx-11  py-2 flex font-medium text-base text-dark hover:text-primary">Struktur</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a id="potensi" href="#wisata"
                                    class="menu mx-4 py-2 font-medium text-base text-dark hover:text-primary hover:fill-primary  w-50 flex justify-between lg:w-20">
                                    <span class="">Potensi</span>
                                    <div id="arrow" class="arrow-rotate transition-transform duration-500 hidden">
                                        <?xml ?><svg version="1.1" id="Layer_1" class="size-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 122.88 66.91" style="enable-background:new 0 0 122.88 66.91"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M11.68,64.96c-2.72,2.65-7.08,2.59-9.73-0.14c-2.65-2.72-2.59-7.08,0.13-9.73L56.87,1.97l4.8,4.93l-4.81-4.95 c2.74-2.65,7.1-2.58,9.76,0.15c0.08,0.08,0.15,0.16,0.23,0.24L120.8,55.1c2.72,2.65,2.78,7.01,0.13,9.73 c-2.65,2.72-7,2.78-9.73,0.14L61.65,16.5L11.68,64.96L11.68,64.96z" />
                                            </g>
                                        </svg>
                                    </div>
                                </a>

                                <ul class=" hidden border-b-[1px] border-dark/20 bg-slate-100 lg:absolute rounded-md md:shadow-md"
                                    id="potensi-menu">
                                    <li>
                                        <a href="./#wisata" id="subnav-profil"
                                            class="mx-11  py-2 flex font-medium text-base text-dark hover:text-primary">Wisata</a>
                                    </li>
                                    <li>
                                        <a href="./#umkm" id="subnav-profil"
                                            class="mx-11  py-2 flex font-medium text-base text-dark hover:text-primary">UMKM</a>
                                    </li>
                                    <li>
                                        <a href="./#Pertanian" id="subnav-profil"
                                            class="mx-11  py-2 flex font-medium text-base text-dark hover:text-primary">Pertanian
                                            & Peternakan</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/#infografis"
                                    class="menu mx-4 py-2 flex font-medium text-base text-dark hover:text-primary">Infografis</a>
                            </li>
                            <li>
                                <a href="/#Berita"
                                    class=" {{ request()->is('/') ? 'text-dark fill-dark' : 'text-red-500 fill-red-500' }}  menu mx-4 py-2 flex font-medium text-base text-dark hover:text-primary">Berita</a>
                            </li>
                            <li>
                                @auth
                                    <a id="user"
                                        class=" menu mx-4 py-2 font-medium text-base text-dark hover:text-primary hover:fill-primary  max-w-full flex justify-between lg:min-w-20 cursor-pointer">
                                        <span class="mr-4">Welcome, {{ auth()->user()->name }}</span>
                                        <div id="arrow" class="arrow-rotate transition-transform duration-500">
                                            <?xml?><svg version="1.1" id="Layer_1" class="size-5"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 122.88 66.91" style="enable-background:new 0 0 122.88 66.91"
                                                xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M11.68,64.96c-2.72,2.65-7.08,2.59-9.73-0.14c-2.65-2.72-2.59-7.08,0.13-9.73L56.87,1.97l4.8,4.93l-4.81-4.95 c2.74-2.65,7.1-2.58,9.76,0.15c0.08,0.08,0.15,0.16,0.23,0.24L120.8,55.1c2.72,2.65,2.78,7.01,0.13,9.73 c-2.65,2.72-7,2.78-9.73,0.14L61.65,16.5L11.68,64.96L11.68,64.96z" />
                                                </g>
                                            </svg>
                                        </div>
                                    </a>

                                    <ul class="hidden right-0 border-b-[1px] border-dark/20 bg-slate-100 lg:absolute rounded-md absolute shadow-lg"
                                        id="user-menu">
                                        @if (Auth::user()->role === 'admin')
                                            <li>
                                                <a href="/dashboard/admin" id="subnav-profil"
                                                    class="mx-11  py-2 flex font-medium text-base text-dark hover:text-primary">Dashboard</a>
                                            </li>
                                        @elseif (Auth::user()->role === 'writer')
                                            <li>
                                                <a href="/dashboard/writer" id="subnav-profil"
                                                    class="mx-11  py-2 flex font-medium text-base text-dark hover:text-primary">Dashboard</a>
                                            </li>
                                        @endif
                                        <li class="border-t border-dark/20 ">
                                            <form action="/logout" method="post">
                                                @csrf
                                                <button
                                                    class="mx-11  py-2 flex font-medium text-base text-dark hover:text-primary cursor-pointer">logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                @else
                                    <div href="#" id="user-menu" class="hidden"></div>
                                    <a href="/login"
                                        class="menu mx-4 py-2 flex font-medium text-base text-white hover:text-primary bg-primary px-3 rounded-lg hover:bg-transparent hover:border-primary hover:border-2 w-20 text-center h-10 ">
                                        <span class=" mx-auto">Login</span> </a>
                                @endauth
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

    </header>
</div>
