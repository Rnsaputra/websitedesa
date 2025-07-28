<!DOCTYPE html>
<html lang="en">
<x-head>

</x-head>
<x-body>
    <div class="flex justify-center items-center flex-col h-screen gap-2">
        @if (session()->has('loginError'))
            <div class="flex items-center w-100 h-auto   bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                role="alert">
                <span class="block sm:inline">{{ session('loginError') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <button class="text-red-500 hover:text-red-700"
                        onclick="this.parentElement.parentElement.style.display='none'">
                        &times;
                    </button>
                </span>
            </div>
        @endif
        <form action="/login" method="post" class="bg-white w-100 shadow-xl rounded-lg">
            @csrf
            {{-- heading --}}
            <div class="p-4">
                <h1 class="text-center font-bold text-2xl">Login</h1>
            </div>


            {{-- body --}}
            <div class="p-4 flex flex-col gap-3">
                <div class="relative mb-2">
                    <input type="text" id="username" name="username" placeholder=" " value="{{ old('username') }}"
                        class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none "
                        required />
                    <label for="username"
                        class="cursor-text  absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                        username
                    </label>
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-2">
                    <input type="password" id="password" name="password" placeholder=" " value="{{ old('password') }}"
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
            </div>
            {{-- Footer --}}
            <div class="p-4">
                <button type="submit" name="Login"
                    class="w-full bg-primary rounded-lg h-10 cursor-pointer hover:bg-primary/70 font-bold text-white">Daftar</button>
            </div>
        </form>
    </div>
</x-body>

</html>
