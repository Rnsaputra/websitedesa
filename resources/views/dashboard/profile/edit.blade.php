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
                                <div class="flex justify-center items-center min-h-screen ">
                                    <main id="form-registration" class="bg-white w-200 shadow-xl rounded-lg">
                                        {{-- heading --}}
                                        <div class="p-4">
                                            <h1 class="text-center font-bold text-2xl">My Profile</h1>
                                        </div>
                                        {{-- body --}}
                                        <form action="/dashboard/{{ $user->role }}/profile/{{ $user->username }}"
                                            method="post" class="p-4 flex flex-col gap-3"
                                            enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="relative mb-5">
                                                <input type="hidden" name="oldImage" value="{{ $user->ppicture }}">
                                                <div
                                                    class=" bg-white shadow-xl  mt-2 rounded-full align-self-center w-26 mx-auto aspect-square flex items-center justify-center lg:w-70">
                                                    @if ($user->ppicture)
                                                        <img id="imagePreview"
                                                            src="{{ asset('storage/' . $user->ppicture) }}"
                                                            class="my-auto border rounded-full align-self-center w-50 aspect-square object-cover lg:w-65"
                                                            alt="Image Preview" style="">
                                                        <img id="noimagePreview"
                                                            class="my-auto hidden rounded-full align-self-center w-25 aspect-square object-cover lg:w-65"
                                                            alt="Image Preview"
                                                            src="{{ asset('storage/profile-picture/blank.jpg') }}">
                                                    @else
                                                        <img id="imagePreview"
                                                            class="my-auto hidden rounded-full align-self-center w-50 aspect-square object-cover lg:w-65"
                                                            alt="Image Preview" style="">
                                                        <img id="noimagePreview"
                                                            class="my-auto rounded-full align-self-center w-25 aspect-square object-cover lg:w-65"
                                                            alt="Image Preview"
                                                            src="{{ asset('storage/profile-picture/blank.jpg') }}">
                                                    @endif
                                                </div>
                                                <input type="file" id="ppicture" name="ppicture"
                                                    onchange="previewImage()"
                                                    class="file:hidden  block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none file:bg-primary file:px-2 file:py-1 file:rounded-full file:text-white">

                                                @error('ppicture')
                                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="relative mb-2">
                                                <input type="text" id="name" name="name" placeholder=" "
                                                    value="{{ old('password', $user->name) }}"
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
                                                    value="{{ old('username', $user->username) }}"
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
                                                    value="{{ old('email', $user->email) }}"
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
                                            <div class="relative mb-5">
                                                <p
                                                    class="  p-2  {{ $user->role == 'admin' ? 'bg-green-200' : 'bg-yellow-200' }}">
                                                    {{ $user->role }}
                                                </p>

                                            </div>

                                            <div class="p-4 flex gap-2">
                                                <a href="javascript:history.back()"
                                                    class="p-1 bg-sky-500 rounded-lg h-10 w-full flex items-center justify-center group hover:bg-white hover:border-2 hover:border-sky-500 text-white font-bold hover:text-sky-500 transition duration-200">Kembali</a>
                                                <button type="submit" name="Daftar"
                                                    class="bg-primary p-1 rounded-lg h-10 w-full flex items-center justify-center group hover:bg-white hover:border-2 hover:border-primary text-white font-bold hover:text-primary transition duration-200">Simpan
                                                </button>
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

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <script>
        const toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],

            ['link', {
                'align': []
            }],
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }, {
                'list': 'check'
            }],
            ['clean']
        ];

        const quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });
        quill.on('text-change', function() {
            var body = document.querySelector('#body');
            body.value = quill.root.innerHTML;
        });

        // Menyalin konten ke input hidden saat submit
        document.querySelector('form').onsubmit = function() {
            var body = document.querySelector('#body');
            body.value = quill.root.innerHTML;
        };


        const oldBody = `{!! old('body') !!}`;
        if (oldBody) {
            quill.clipboard.dangerouslyPasteHTML(oldBody);
        }



        document.getElementById('title').addEventListener('input', function() {
            const title = this.value;
            const slug = generateSlug(title);
            document.getElementById('slug').value = slug;
        });

        function generateSlug(title) {
            return title
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .trim()
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');
        };

        function previewImage() {
            const image = document.querySelector('#ppicture');
            const imgPreview = document.querySelector('#imagePreview');
            const noimgPreview = document.querySelector('#noimagePreview');
            noimgPreview.classList.add("hidden")
            imgPreview.classList.remove("hidden");


            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(OFREvent) {
                imgPreview.src = OFREvent.target.result

            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        const side = document.querySelector('#nav-profile');
        side.classList.add('bg-primary');
        side.classList.add('text-white');
    </script>
</x-body>

</html>
