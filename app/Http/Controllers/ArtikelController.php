<?php

namespace App\Http\Controllers;

class ArtikelController extends Controller
{
    private function dataArtikel()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Mengenal Kecerdasan Buatan (AI)',
                'kategori' => 'AI',
                'penulis' => 'Admin',
                'tanggal' => '30 Oktober 2026',
                'ringkasan' => 'Mengenal teknologi kecerdasan buatan dan penerapannya dalam kehidupan sehari-hari.',
                'isi' => 'Kecerdasan buatan atau Artificial Intelligence (AI) merupakan teknologi yang memungkinkan komputer melakukan tugas yang biasanya membutuhkan kecerdasan manusia. Contohnya adalah chatbot, pengenalan gambar, penerjemahan bahasa, dan sistem rekomendasi.'
            ],
            [
                'id' => 2,
                'judul' => 'Tips Memilih Laptop untuk Mahasiswa',
                'kategori' => 'Komputer',
                'penulis' => 'Admin',
                'tanggal' => '30 Oktober 2026',
                'ringkasan' => 'Panduan memilih laptop sesuai kebutuhan belajar dan kegiatan perkuliahan.',
                'isi' => 'Sebelum membeli laptop, tentukan kebutuhan utama terlebih dahulu. Perhatikan prosesor, kapasitas RAM, penyimpanan SSD, daya tahan baterai, dan garansi. Pilih spesifikasi yang sesuai dengan kegiatan belajar dan anggaran.'
            ],
            [
                'id' => 3,
                'judul' => 'Belajar Pemrograman untuk Pemula',
                'kategori' => 'Pemrograman',
                'penulis' => 'Admin',
                'tanggal' => '30 Oktober 2026',
                'ringkasan' => 'Langkah awal memahami pemrograman dan membangun program sederhana.',
                'isi' => 'Pemrograman adalah proses memberikan instruksi kepada komputer untuk menjalankan tugas tertentu. Pemula dapat mulai mempelajari dasar variabel, tipe data, percabangan, perulangan, dan fungsi. Latihan secara bertahap membantu meningkatkan pemahaman.'
            ],
            [
                'id' => 4,
                'judul' => 'Mengenal Teknologi Cloud Computing',
                'kategori' => 'Teknologi',
                'penulis' => 'Admin',
                'tanggal' => '30 Oktober 2026',
                'ringkasan' => 'Memahami penyimpanan dan penggunaan layanan komputasi melalui internet.',
                'isi' => 'Cloud computing memungkinkan pengguna mengakses sumber daya komputasi melalui internet. Contohnya adalah penyimpanan file daring, layanan hosting, dan aplikasi berbasis web. Pengguna perlu memperhatikan keamanan akun dan data.'
            ],
            [
                'id' => 5,
                'judul' => 'Pentingnya Keamanan Siber',
                'kategori' => 'Keamanan',
                'penulis' => 'Admin',
                'tanggal' => '30 Oktober 2026',
                'ringkasan' => 'Cara memahami keamanan digital dan melindungi informasi pribadi.',
                'isi' => 'Keamanan siber berkaitan dengan perlindungan perangkat, jaringan, dan data digital. Gunakan kata sandi yang kuat, aktifkan autentikasi dua faktor, perbarui perangkat lunak, dan berhati-hatilah saat membuka tautan yang mencurigakan.'
            ],
        ];
    }

    public function index()
    {
        $artikels = $this->dataArtikel();

        return view('artikel.index', compact('artikels'));
    }

    public function detail($id)
    {
        $artikel = collect($this->dataArtikel())
            ->firstWhere('id', (int) $id);

        if (!$artikel) {
            abort(404);
        }

        return view('artikel.detail', compact('artikel'));
    }

    public function kategori()
    {
        $artikels = $this->dataArtikel();

        $kategoris = collect($artikels)
            ->pluck('kategori')
            ->unique()
            ->values();

        return view('kategori', compact('kategoris', 'artikels'));
    }
}