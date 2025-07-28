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
                    <div class="bg-white shadow w-full h-15 fixed items-center flex z-10">
                        <p class=" lg:text-2xl text-sm font-semibold text-left lg:ml-10 ml-2 ">

                        </p>

                    </div>
                    <!-- header End -->

                    {{-- form --}}
                    <div class="max-w-5xl w-full bg-white shadow-lg rounded-lg mx-auto p-4 lg:w-4/6 mt-20">
                        <h2 class="text-2xl font-bold mb-4">Tambah Berita</h2>
                        <form action="/dashboard/{{ auth()->user()->role }}/posts" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="relative mb-5">
                                <input type="text" id="title" name="title" placeholder=" "
                                    value="{{ old('title') }}"
                                    class="peer block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none"
                                    required>
                                <label for="title"
                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                    Judul Berita
                                </label>
                                <input type="text" id="slug" name="slug" required class="hidden"
                                    value="{{ old('slug') }}">
                                @error('title')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="relative mb-5">
                                <select id="category_id" name="category_id"
                                    class="peer block  border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none  w-full"
                                    required>

                                    @foreach ($category as $kategori)
                                        @if (old('category_id') == $kategori->id)
                                            <option value="{{ $kategori->id }}" selected class="">
                                                {{ $kategori->name }}
                                            </option>
                                        @endif
                                        <option value="{{ $kategori->id }}" class="">{{ $kategori->name }}
                                        </option>
                                    @endforeach

                                </select>
                                <label for="category"
                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                    Kategori
                                </label>
                                @error('category')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="body" class="block text-gray-700">Konten Berita</label>
                                @error('body')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                <input id="body" name="body" class="hidden" value="{{ old('body') }}">
                                <div id="editor" style="height:200px;"></div>
                            </div>
                            <div class="relative mb-5">
                                <input type="checkbox" id="is_active" name="is_active" value="1"
                                    class="mr-2 cursor-pointer" {{ old('is_active') ? 'checked' : '' }} />
                                <span class="text-sm font-medium text-gray-700">publish</span>
                            </div>
                            <div class="relative mb-5">
                                <input type="file" id="image" name="image" onchange="previewImage()"
                                    class="file:hidden  block w-full border-b-2 p-2 border-gray-300 focus:border-primary focus:outline-none file:bg-primary file:px-2 file:py-1 file:rounded-full file:text-white">
                                <label for="image"
                                    class="cursor-text absolute left-0 -top-3.5 transform scale-75 origin-[0_0] text-gray-500 transition-all duration-200 peer-placeholder-shown:top-2 peer-placeholder-shown:scale-100 peer-focus:-top-3.5 peer-focus:scale-75">
                                    Unggah Gambar
                                </label>
                                <img id="imagePreview"
                                    class="mt-2 hidden rounded-lg aspect-3/2 align-self-center w-3/4 mx-auto  object-cover  md:h-80 lg:h-96"
                                    alt="Image Preview" style="">
                                @error('image')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit"
                                class="bg-blue-400 p-1 rounded-sm h-10 flex items-center justify-center text-white font-bold hover:bg-blue-500">
                                Unggah
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        const currentPath = window.location.pathname;
        // Peta ID navigasi berdasarkan awalan path
        const navMap = {
            '/dashboard/admin/posts': 'nav-posts',
            '/dashboard/admin/allposts': 'nav-allposts',
            '/dashboard/writer/allposts': 'nav-allposts',
            '/dashboard/writer/allposts': 'nav-allposts'
        };
        // Temukan key pertama yang cocok sebagian
        const matchedKey = Object.keys(navMap).find(key => currentPath.startsWith(key));
        const navId = navMap[matchedKey];
        if (navId) {
            const side = document.getElementById(navId);
            if (side) {
                side.classList.add('bg-primary');
                side.classList.add('text-white');
            }
        }
    </script>
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
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('#imagePreview');
            imgPreview.classList.add("block");
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
