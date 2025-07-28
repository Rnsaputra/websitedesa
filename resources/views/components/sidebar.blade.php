<!-- Sidebar Container -->
<div x-data="{ open: false }" class="flex">
    <!-- Sidebar -->
    <aside :class="open ? 'w-64' : 'w-16'"
        class="bg-white/20 bg-opacity-90 backdrop-blur-sm h-screen sticky top-0 left-0 shadow-2xl transition-width duration-300 overflow-hidden z-30 lg:w-64 lg:sticky lg:translate-x-0">

        <!-- Header -->
        <div class="flex items-center justify-between h-16 bg-white/20 px-4">
            <p class="text-3xl font-bold text-dark whitespace-nowrap"
                :class="{ 'hidden lg:block': !open, 'block': open }">
                Dashboard
            </p>
            <button @click="open = !open" class="lg:hidden text-dark focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Menu Items -->
        <nav class="mt-10 flex flex-col gap-2">
            <p class="px-4 text-sm font-semibold text-gray-600 hidden lg:block">Menu Utama</p>

            <!-- Dashboard -->


            <!-- Hanya untuk ADMIN -->
            @if (Auth::user()->role === 'admin')
            <!-- Dashboard Admin -->
            <a href="/dashboard/admin" id="nav-dashboard-admin"
                class="flex items-center h-12 pl-4 rounded-lg hover:bg-primary hover:text-white text-dark transition duration-200">
                <i class="fas fa-tachometer-alt w-6 h-6"></i>
                <span class="ml-3 text-2xl font-semibold truncate" :class="{ 'hidden lg:block': !open }">Dashboard</span>
            </a>
        
            <!-- Menu User -->
            <a href="/dashboard/admin/user" id="nav-users"
                class="flex items-center h-12 pl-4 rounded-lg hover:bg-primary hover:text-white text-dark transition duration-200">
                <i class="fas fa-users w-6 h-6"></i>
                <span class="ml-3 text-lg font-semibold truncate" :class="{ 'hidden lg:block': !open }">Menu User</span>
            </a>
        
            <!-- All Posts -->
            <a href="/dashboard/admin/allposts" id="nav-allposts"
                class="flex items-center h-12 pl-4 rounded-lg hover:bg-primary hover:text-white text-dark transition duration-200">
                <i class="fas fa-list w-6 h-6"></i>
                <span class="ml-3 text-lg font-semibold truncate" :class="{ 'hidden lg:block': !open }">Menu Artikel</span>
            </a>
        
            <!-- Informasi Tambahan -->
            <p class="px-4 text-sm font-semibold text-gray-600 mt-4 hidden lg:block">Informasi</p>
        
            <!-- Perangkat Desa -->
            <a href="/dashboard/admin/perangkat" id="nav-perangkat"
                class="flex items-center h-12 pl-4 rounded-lg hover:bg-primary hover:text-white text-dark transition duration-200">
                <i class="fas fa-info-circle w-6 h-6"></i>
                <span class="ml-3 text-lg font-semibold truncate" :class="{ 'hidden lg:block': !open }">Perangkat Desa</span>
            </a>
        
            <!-- Potensi -->
            <a href="/dashboard/admin/potensi" id="nav-potensi"
                class="flex items-center h-12 pl-4 rounded-lg hover:bg-primary hover:text-white text-dark transition duration-200">
                <i class="fas fa-bullhorn w-6 h-6"></i>
                <span class="ml-3 text-lg font-semibold truncate" :class="{ 'hidden lg:block': !open }">Potensi Desa</span>
            </a>
        
            <!-- Demografis -->
            <a href="/dashboard/admin/demografis" id="nav-demografis"
                class="flex items-center h-12 pl-4 rounded-lg hover:bg-primary hover:text-white text-dark transition duration-200">
                <i class="fas fa-chart-pie w-6 h-6"></i>
                <span class="ml-3 text-lg font-semibold truncate" :class="{ 'hidden lg:block': !open }">Demografis</span>
            </a>
        
            <!-- APBDes -->
            <a href="/dashboard/admin/apbdes" id="nav-apbdes"
                class="flex items-center h-12 pl-4 rounded-lg hover:bg-primary hover:text-white text-dark transition duration-200">
                <i class="fas fa-money-bill-wave w-6 h-6"></i>
                <span class="ml-3 text-lg font-semibold truncate" :class="{ 'hidden lg:block': !open }">APBDes</span>
            </a>
        @else
            <!-- Dashboard Writer -->
            <a href="/dashboard/writer" id="nav-dashboard-writer"
                class="flex items-center h-12 pl-4 rounded-lg hover:bg-primary hover:text-white text-dark transition duration-200">
                <i class="fas fa-tachometer-alt w-6 h-6"></i>
                <span class="ml-3 text-lg font-semibold truncate" :class="{ 'hidden lg:block': !open }">Dashboard</span>
            </a>
        @endif
        
        <!-- Menu yang Berlaku untuk Semua Role -->

        <!-- Artikel Saya -->
        <a href="{{ Auth::user()->role === 'admin' ? '/dashboard/admin/posts' : '/dashboard/writer/posts' }}"
            id="nav-posts"
            class="flex items-center h-12 pl-4 rounded-lg hover:bg-primary hover:text-white text-dark transition duration-200">
            <i class="fas fa-newspaper w-6 h-6"></i>
            <span class="ml-3 text-lg font-semibold truncate" :class="{ 'hidden lg:block': !open }">Artikel Saya</span>
        </a>
        
        <!-- Profil Saya -->
        <a href="{{ Auth::user()->role === 'admin' ? '/dashboard/admin/profile' : '/dashboard/writer/profile' }}"
            id="nav-profile"
            class="flex items-center h-12 pl-4 rounded-lg hover:bg-primary hover:text-white text-dark transition duration-200">
            <i class="fas fa-user-circle w-6 h-6"></i>
            <span class="ml-3 text-lg font-semibold truncate" :class="{ 'hidden lg:block': !open }">Profil Saya</span>
        </a>
        
        <!-- Tombol ke Beranda -->
        <a href="/" id="nav-home"
            class="flex items-center w-10 mx-auto bg-white inset-shadow-xs h-10 my-auto text-dark rounded-full hover:bg-primary hover:text-white transition duration-200">
            <i class="fas fa-home mx-auto"></i>
        </a>
        
        </nav>
    </aside>
</div>
