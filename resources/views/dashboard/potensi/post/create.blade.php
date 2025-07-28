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
                    <div id="register" class=" lg:px-15 px-3 mt-15 w-full ">
                        {{-- success alert --}}
                        <div class="  grid lg:grid-cols-2 grid-cols-1 gap-3 ">
                            <div class="w-full pb-3  rounded-lg md:col-span-2 drop-shadow-md">

                                <div class="flex justify-center  h-auto">
                                    <main id="form-registration" class=" w-5xl   flex">
                                        {{-- heading --}}

                                        <div class="w-1/2 bg-white shadow-xl rounded-lg">
                                            <div class="p-4">
                                                <h1 class="text-center font-bold text-2xl">Tambah Potensi
                                                    {{ $category->name }}</h1>
                                            </div>
                                            {{-- body --}}
                                            <form action="/dashboard/admin/potensi/post" method="post"
                                                class="p-4 flex flex-col gap-3" enctype="multipart/form-data">
                                                @csrf

                                                <!-- Input untuk categories_id -->


                                                <!-- Input untuk cover -->
                                                <div class="relative mb-2">
                                                    <input type="file" id="cover" name="cover"
                                                        onchange="previewImage()"
                                                        class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none file:hidden" />
                                                    <label for="cover"
                                                        class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                        Cover (Opsional)
                                                    </label>
                                                    @error('cover')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <!-- Input untuk place -->
                                                <div class="relative mb-2">
                                                    <input type="text" id="categories_id" name="categories_id"
                                                        placeholder=" " value="{{ $category->id }}"
                                                        class="peer w-full border-b-2  border-gray-300 focus:border-primary focus:outline-none hidden"
                                                        required />
                                                    <input type="text" id="place" name="place" placeholder=" "
                                                        value="{{ old('place') }}"
                                                        class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                                        required />
                                                    <label for="place"
                                                        class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                        Nama Tempat
                                                    </label>
                                                    <input type="text" id="slugplace" name="slugplace"
                                                        placeholder=" " value="{{ old('slugplace') }}"
                                                        class="peer w-full border-b-2  border-gray-300 focus:border-primary focus:outline-none hidden"
                                                        required />
                                                    @error('slugplace')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                    @error('place')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <!-- Input untuk description -->
                                                <div class="relative mb-2">
                                                    <input type="text" id="description" name="description"
                                                        placeholder=" " value="{{ old('description') }}"
                                                        class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                                        required />
                                                    <label for="description"
                                                        class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                        Deskripsi Singkat
                                                    </label>
                                                    @error('description')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <!-- Input untuk locate -->
                                                <div class="relative mb-2">
                                                    <input type="text" id="locate" name="locate" placeholder=" "
                                                        value="{{ old('locate') }}"
                                                        class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none" />

                                                    <label for="locate"
                                                        class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                        Lokasi (Opsional)
                                                    </label>
                                                    @error('locate')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <!-- Input untuk embedlocate -->
                                                <div class="relative mb-2">
                                                    <input type="text" id="embedlocate" name="embedlocate"
                                                        placeholder=" " value="{{ old('embedlocate') }}"
                                                        class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none" />
                                                    <label for="embedlocate"
                                                        class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                        Embed Lokasi (Opsional)
                                                    </label>
                                                    @error('embedlocate')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <!-- Input untuk gambar tambahan -->
                                                <div class="relative mb-2 ">
                                                    <!-- Container input gambar tambahan -->
                                                    <div id="imageInputsContainer" class="flex flex-wrap gap-2 mb-4 ">
                                                        <div class="relative image-input-item">
                                                            <input type="file" name="images[]" accept="image/*"
                                                                onchange="previewSingleImage(this)"
                                                                class="w-32 border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none file:hidden" />
                                                            <div class="preview mt-2"></div>
                                                            <button type="button" onclick="removeImageInput(this)"
                                                                class="text-red-500 hover:text-red-700 mt-2">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <button type="button" onclick="addImageInput()"
                                                        class="bg-primary hover:bg-primary/70 cursor-cell text-white text-sm px-3 py-1 rounded mb-4 w-max transition duration-200">+
                                                        Tambah Gambar</button>
                                                    <label for="images"
                                                        class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                        Gambar Tambahan
                                                    </label>
                                                    @error('images.*')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                    <!-- Container untuk preview gambar -->
                                                    <div id="imagePreview" class="flex flex-wrap gap-4 mt-4"></div>
                                                </div>
                                                <div class="relative mb-2">
                                                    <input type="text" id="youtube" name="youtube"
                                                        placeholder=" " value="{{ old('youtube') }}"
                                                        class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none" />
                                                    <label for="youtube"
                                                        class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                        Akun Youtube
                                                    </label>
                                                    @error('Youtube')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="relative mb-2">
                                                    <input type="text" id="instagram" name="instagram"
                                                        placeholder=" " value="{{ old('instagram') }}"
                                                        class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none" />
                                                    <label for="instagram"
                                                        class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                        Akun instagram
                                                    </label>
                                                    @error('instagram')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="relative mb-2">
                                                    <input type="text" id="tiktok" name="tiktok"
                                                        placeholder=" " value="{{ old('tiktok') }}"
                                                        class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none" />
                                                    <label for="tiktok"
                                                        class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                                        Akun tiktok
                                                    </label>
                                                    @error('tiktok')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <!-- Tombol submit -->
                                                <div class="p-4">
                                                    <button type="submit"
                                                        class="w-full bg-primary rounded-lg h-10 cursor-pointer hover:bg-primary/70 font-bold text-white transition duration-200">Tambah</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="w-1/2 min-h-full flex  justify-center">
                                            <div class=" max-w-100 ">
                                                <div
                                                    class="w-100 aspect-3/2 snap-center bg-white rounded-2xl p-2  max-h-full flex flex-col">
                                                    <img id="coverPreview" alt="coverPreview"
                                                        class="w-full hidden aspect-3/2 object-cover  rounded-2xl grayscale hover:grayscale-0 transition-all duration-300 ease-in-out ">
                                                    <img id="nocoverPreview"
                                                        src="{{ asset('storage/potensi-cover/noImage.jpg') }} "
                                                        alt="coverPreview"
                                                        class="w-full aspect-3/2 object-cover  rounded-2xl grayscale hover:grayscale-0 transition-all duration-300 ease-in-out ">
                                                    <h1 id="placeoutput"
                                                        class="font-bold text-base text-center pt-2 text-dark md:text-xl">
                                                        Cover Preview
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>




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
        const side = document.querySelector('#nav-potensi');
        side.classList.add('bg-primary');
        side.classList.add('text-white');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        function addImageInput() {
            const container = document.getElementById('imageInputsContainer');

            const inputGroup = document.createElement('div');
            inputGroup.classList.add('relative', 'image-input-item');

            inputGroup.innerHTML = `
                <input type="file" name="images[]" accept="image/*" onchange="previewSingleImage(this)"
                    class="peer block w-32 border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none file:hidden" />
                <div class="preview mt-2"></div>
                <button type="button" onclick="removeImageInput(this)" class="text-red-500 hover:text-red-700 mt-2">
    <i class="fas fa-trash-alt"></i></button>
            `;

            container.appendChild(inputGroup);
        }

        function removeImageInput(button) {
            button.parentElement.remove();
        }

        function previewSingleImage(input) {
            const previewContainer = input.nextElementSibling;
            previewContainer.innerHTML = '';

            const file = input.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('w-32', 'h-32', 'object-cover', 'rounded');

                    previewContainer.appendChild(img);
                };

                reader.readAsDataURL(file);
            }
        }
    </script>


    <script>
        document.getElementById('place').addEventListener('input', function() {
            const place = this.value;
            const slugplace = generateSlug(place); // Menggunakan 'place' sebagai parameter
            document.getElementById('slugplace').value = slugplace;
        });

        function generateSlug(place) {
            return place
                .toLowerCase() // 
                .replace(/[^a-z0-9\s-]/g, '') // 
                .trim() // 
                .replace(/\s+/g, '-') // 
                .replace(/-+/g, '-'); // 
        }

        function previewImage() {
            const image = document.querySelector('#cover');
            const imgPreview = document.querySelector('#coverPreview');
            const noimgPreview = document.querySelector('#nocoverPreview');
            noimgPreview.classList.add("hidden")
            imgPreview.classList.remove("hidden");

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(OFREvent) {
                imgPreview.src = OFREvent.target.result
            }
        }
    </script>


</x-body>

</html>
