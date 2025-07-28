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
                    <div class="bg-primary shadow w-full h-15 fixed items-center flex z-10">
                        <p class=" lg:text-2xl text-sm font-semibold text-left lg:ml-10 ml-2 ">

                        </p>

                    </div>
                    <!-- header End -->

                    {{-- form --}}
                    <div id="register" class="mx-auto lg:px-15 px-3  w-full ">
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
                                            <h1 class="text-center font-bold text-2xl">Tambah Data Pemasukan</h1>
                                        </div>
                                        {{-- body --}}
                                        <form action="/dashboard/admin/apbdes/outcome/{{ $outcome->year }}" method="post"
                                            class="p-4 flex flex-col gap-3">
                                            @method('put')
                                            @csrf
                                            <div class="relative mb-2">
                                                <input type="number" id="year" name="year" placeholder=" "
                                                    value="{{ old('year', $outcome->year) }}"
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                                    required min="2000" max="{{ date('Y') }}" />
                                                <label for="year"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    Tahun
                                                </label>
                                                @error('year')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="relative mb-2">
                                                <input type="number" id="pemerintahan" name="pemerintahan"
                                                    placeholder=" " value="{{ old('pemerintahan', $outcome->pemerintahan) }}"
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                                    required step="0.01" min="0" />
                                                <label for="pemerintahan"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    penyelenggaraan pemerintahan desa
                                                </label>
                                                @error('pemerintahan')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="relative mb-2">
                                                <input type="number" id="pembangunan" name="pembangunan"
                                                    placeholder=" " value="{{ old('pembangunan', $outcome->pembangunan) }}"
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                                     step="0.01" min="0" />
                                                <label for="pembangunan"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    Pembangunan Desa
                                                </label>
                                                @error('pembangunan')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="relative mb-2">
                                                <input type="number" id="pembinaan" name="pembinaan" placeholder=" "
                                                    value="{{ old('pembinaan',$outcome->pembinaan) }}"
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                                     step="0.01" min="0" />
                                                <label for="pembinaan"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    Pembinaan Masyarakat Desa
                                                </label>
                                                @error('pembinaan')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="relative mb-2">
                                                <input type="number" id="pemberdayaan" name="pemberdayaan"
                                                    placeholder=" " value="{{ old('pemberdayaan', $outcome->pemberdayaan) }}"
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                                     step="0.01" min="0" />
                                                <label for="pemberdayaan"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    pemberdayaan Masyarakat Desa
                                                </label>
                                                @error('pemberdayaan')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="relative mb-2">
                                                <input type="number" id="bencana" name="bencana" placeholder=" "
                                                    value="{{ old('bencana',$outcome->bencana) }}"
                                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                                     step="0.01" min="0" />
                                                <label for="bencana"
                                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                    Penanggulangan bencana
                                                </label>
                                                @error('bencana')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="p-4">
                                                <button type="submit"
                                                    class="w-full bg-primary rounded-lg h-10 cursor-pointer hover:bg-primary/70 font-bold text-white">Simpan</button>
                                            </div>
                                        </form>
                                    </main>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div>
    </section>



    <script>
        const side = document.querySelector('#nav-apbdes');
        side.classList.add('bg-primary');
        side.classList.add('text-white');
    </script>
</x-body>

</html>
