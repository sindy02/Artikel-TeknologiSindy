# 💻 TeknoRiza — Website Artikel Teknologi

TeknoRiza adalah website artikel teknologi berbasis Laravel yang dibuat untuk memberikan informasi dan pengetahuan seputar perkembangan teknologi digital. Website ini menyajikan berbagai artikel tentang kecerdasan buatan, komputer, pemrograman, cloud computing, dan keamanan siber.

## 📌 Deskripsi Proyek

Proyek ini dibuat sebagai media informasi dan pembelajaran teknologi dengan tampilan yang sederhana, modern, dan responsif. Pengguna dapat membaca daftar artikel, melihat detail artikel, menjelajahi kategori, serta mengetahui informasi mengenai website.

## ✨ Fitur Utama

- **Beranda:** Menampilkan pengenalan website dan topik teknologi.
- **Daftar Artikel:** Menampilkan kumpulan artikel teknologi.
- **Detail Artikel:** Menampilkan informasi dan isi artikel secara lengkap.
- **Kategori Artikel:** Mengelompokkan artikel berdasarkan topik.
- **Tentang:** Menampilkan visi dan misi website.
- **Navigasi:** Memudahkan pengguna berpindah antarhalaman.
- **Desain Responsif:** Menyesuaikan tampilan dengan ukuran layar perangkat.

## 🛠️ Teknologi yang Digunakan

- Laravel
- PHP
- Blade Template Engine
- HTML
- CSS
- Git dan GitHub

## 📂 Struktur Proyek

```text
Artikel-TeknologiRiza/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── HomeController.php
│           └── ArtikelController.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── artikel/
│       │   ├── index.blade.php
│       │   └── detail.blade.php
│       ├── beranda.blade.php
│       ├── kategori.blade.php
│       └── tentang.blade.php
├── routes/
│   └── web.php
└── README.md
```

## 📄 Halaman Website

| No. | Halaman | URL |
|---|---|---|
| 1 | Beranda | `/` |
| 2 | Daftar Artikel | `/artikel` |
| 3 | Detail Artikel | `/artikel/1` |
| 4 | Kategori | `/kategori` |
| 5 | Tentang | `/tentang` |

## 📰 Contoh Artikel

Website ini memiliki beberapa artikel contoh, yaitu:

1. Mengenal Kecerdasan Buatan (AI)
2. Tips Memilih Laptop untuk Mahasiswa
3. Belajar Pemrograman untuk Pemula
4. Mengenal Teknologi Cloud Computing
5. Pentingnya Keamanan Siber

## 🚀 Cara Menjalankan Proyek

### 1. Clone repository

```bash
git clone https://github.com/USERNAME/Artikel-TeknologiRiza.git
```

Ganti `USERNAME` dengan nama akun GitHub pemilik repository.

### 2. Masuk ke folder proyek

```bash
cd Artikel-TeknologiSindy
```

### 3. Instal dependensi PHP

```bash
composer install
```

Pastikan Composer menggunakan versi PHP yang sesuai dengan kebutuhan proyek Laravel.

### 4. Buat file konfigurasi

Salin `.env.example` menjadi `.env`.

Di Windows CMD, gunakan:

```cmd
copy .env.example .env
```

### 5. Buat application key

```bash
php artisan key:generate
```

### 6. Jalankan website

```bash
php artisan serve
```

Buka alamat berikut di browser:

```text
http://127.0.0.1:8000
```

Jika perintah `php` menggunakan versi PHP yang tidak sesuai, jalankan Artisan menggunakan PHP Herd Lite yang telah dikonfigurasi pada komputer.

## 🧩 Konsep Laravel yang Digunakan

Proyek ini menerapkan beberapa konsep dasar Laravel:

- **Routing:** Mengatur URL dan menghubungkannya dengan controller.
- **Controller:** Mengatur data yang akan ditampilkan pada halaman.
- **Blade:** Membuat tampilan website dengan template yang dapat digunakan kembali.
- **Layout:** Menggunakan satu layout utama untuk menjaga konsistensi tampilan.
- **Perulangan Blade:** Menggunakan `@foreach` untuk menampilkan daftar artikel.
- **Parameter URL:** Menggunakan ID untuk membuka detail artikel yang dipilih.

## 📝 Catatan

- Artikel pada versi awal disimpan dalam array di dalam controller.
- Website belum menggunakan database.
- Konten artikel merupakan data contoh untuk keperluan pembelajaran.
- Repository ini dapat dikembangkan lebih lanjut dengan fitur pencarian, database, autentikasi admin, dan pengelolaan artikel menggunakan CRUD.

## 👨‍💻 Pengembang

**Nama:** Sindy Aulia

**Nama Proyek:** Artikel-TeknologiSindy

**Framework:** Laravel

---

© 2026 TeknoSindy — Website Informasi Teknologi.