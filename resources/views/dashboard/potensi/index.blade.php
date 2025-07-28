<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Warna dengan Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">

        <h3 class="text-2xl font-bold text-slate-800 text-center mb-6">
            Pilih Warna
        </h3>

        <label for="pemilih-warna" class="block text-sm font-medium text-slate-600 mb-2">
            Ubah warna kotak di bawah ini:
        </label>
        
        <input 
            type="color" 
            id="pemilih-warna" 
            value="#6366f1"
            class="w-full h-12 p-1 border border-slate-300 rounded-md cursor-pointer"
        >

        <div id="kotak-preview" class="w-full h-36 rounded-lg mt-4 border-2 border-slate-200 transition-colors duration-300 ease-in-out">
        </div>

    </div>

    <script>
        // 2. Logika JavaScript tidak berubah sama sekali
        const pemilihWarna = document.getElementById('pemilih-warna');
        const kotakPreview = document.getElementById('kotak-preview');

        // Fungsi untuk menginisialisasi warna saat halaman dimuat
        function inisialisasiWarna() {
            kotakPreview.style.backgroundColor = pemilihWarna.value;
        }

        // Panggil fungsi inisialisasi saat halaman pertama kali dimuat
        document.addEventListener('DOMContentLoaded', inisialisasiWarna);

        // Tambahkan event listener untuk mengubah warna secara real-time
        pemilihWarna.addEventListener('input', function(event) {
            kotakPreview.style.backgroundColor = event.target.value;
        });
    </script>

</body>
</html>