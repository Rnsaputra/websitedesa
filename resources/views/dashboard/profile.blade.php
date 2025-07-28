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
                    <div class="bg-white shadow w-full h-15 fixed items-center flex z-10">
                        <p class=" lg:text-2xl text-sm font-semibold text-left lg:ml-10 ml-2 ">
                        </p>
                    </div>
                    <div id="register" class="mx-auto lg:px-15 px-3  w-full hidden">
                        {{-- success alert --}}
                        <div class="  grid lg:grid-cols-2 grid-cols-1 gap-3 ">
                            <div class="w-full pb-3  rounded-lg md:col-span-2 drop-shadow-md">
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
                                <div class="flex justify-center items-center min-h-screen">
                                    <main id="form-registration" class="bg-white w-100 shadow-xl rounded-lg">
                                        {{-- heading --}}
                                        <div class="p-4">
                                            <h1 class="text-center font-bold text-2xl">Register</h1>
                                        </div>


                                        {{-- body --}}
                                        <form action="/dashboard" method="post" class="p-4 flex flex-col gap-3">
                                            @csrf


                                            <div class="relative mb-2">
                                                <input type="text" id="name" name="name" placeholder=" "
                                                    value="{{ old('name') }}"
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                                    required />
                                                <label for="name"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    Nama
                                                </label>
                                                @error('name')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>


                                            <div class="relative mb-2">
                                                <input type="text" id="username" name="username" placeholder=" "
                                                    value="{{ old('username') }}"
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none "
                                                    required />
                                                <label for="username"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    username
                                                </label>
                                                @error('username')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="relative mb-2`">
                                                <input type="email" id="email" name="email" placeholder=" "
                                                    value="{{ old('email') }}"
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none "
                                                    required />
                                                <label for="email"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    Email
                                                </label>
                                                @error('email')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="relative mb-2">
                                                <input type="password" id="password" name="password" placeholder=" "
                                                    value="{{ old('password') }}"
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                                    required />
                                                <label for="password"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    Password
                                                </label>
                                                @error('password')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="relative">
                                                <input type="password" id="password_confirmation"
                                                    value="{{ old('password_confirmation') }}"
                                                    name="password_confirmation" placeholder=" "
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none "
                                                    required />
                                                <label for="password_confirmation"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    Konfirmasi Password
                                                </label>
                                                @error('password')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="relative mb-2">
                                                <label for="is_admin" class="flex items-center">
                                                    <input type="checkbox" id="is_admin" name="is_admin" value="1"
                                                        class="mr-2 cursor-pointer"
                                                        {{ old('is_admin') ? 'checked' : '' }} />
                                                    <span class="text-sm font-medium text-gray-700">Jadikan
                                                        Admin</span>
                                                </label>
                                            </div>

                                            <div class="p-4">
                                                <button type="submit" name="Daftar"
                                                    class="w-full bg-primary rounded-lg h-10 cursor-pointer hover:bg-primary/70 font-bold text-white">Daftar</button>
                                            </div>


                                        </form>

                                    </main>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="user" class="mx-auto lg:px-15 px-3 mt-20 w-full ">
                        <div class="bg-white shadow-md rounded-lg p-6 max-w-sm w-full">
                            <div class="flex flex-col items-center">
                                <!-- Profile Photo -->
                                <img src="https://via.placeholder.com/150" alt="Profile Photo" class="rounded-full w-32 h-32 mb-4 border-4 border-gray-200">
                                
                                <!-- User Information -->
                                <h2 class="text-xl font-semibold text-gray-800">John Doe</h2>
                                <p class="text-gray-600">@johndoe</p>
                                <p class="text-gray-500">johndoe@example.com</p>
                            </div>
                            
                            <!-- Edit Button -->
                            <div class="mt-4 text-center">
                                <a href="/edit-profile" class="bg-blue-500 text-white rounded-lg px-4 py-2 hover:bg-blue-600 transition duration-300">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



        </div>
    </section>


    @vite('resources/js/app.js')
    
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</x-body>

</html>
