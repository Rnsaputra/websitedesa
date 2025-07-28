const imginput = document.getElementById('gambarInput');
const previewZone = document.getElementById('preview');

imginput.addEventListener("change", () => {
    const file = imginput.files[0];
    const reader = new FileReader();

    reader.addEventListener('load', () => {
        const img = document.createElement('img'); // Hapus spasi di sini
        img.src = reader.result;
        img.classList.add('mt-2', 'w-full', 'h-auto'); // Tambahkan kelas untuk styling jika perlu

        // Kosongkan previewZone sebelum menambahkan gambar baru
        previewZone.innerHTML = ''; // Hapus gambar sebelumnya jika ada
        previewZone.appendChild(img);
    });

    if (file) {
        reader.readAsDataURL(file);
    }
});