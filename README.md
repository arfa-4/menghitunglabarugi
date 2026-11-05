# Aplikasi Perhitungan Laba dan Rugi

Aplikasi web sederhana untuk menghitung laba, rugi, atau kondisi impas berdasarkan harga jual dan modal.

## Fitur

- Menghitung laba jika harga jual lebih besar daripada modal.
- Menghitung rugi jika harga jual lebih kecil daripada modal.
- Menampilkan kondisi impas jika harga jual sama dengan modal.
- Menampilkan hasil dalam format Rupiah.

## Persyaratan

- PHP 7.4 atau lebih baru.
- Web server lokal seperti Laragon, XAMPP, atau Apache dengan PHP.
- Koneksi internet untuk memuat Bootstrap dari CDN.

## Menjalankan aplikasi

1. Salin atau letakkan folder proyek di direktori web server. Untuk Laragon, gunakan `C:\laragon\www\labarugi`.
2. Jalankan web server Apache melalui Laragon.
3. Buka `http://localhost/labarugi/` di browser.
4. Masukkan harga jual dan modal, lalu pilih **Hitung Sekarang**.

## Struktur file

- `index.php` - halaman utama, formulir, dan tampilan hasil perhitungan.
- `hitung.php` - skrip PHP untuk menghitung laba atau rugi dari data `harga` dan `modal`.
