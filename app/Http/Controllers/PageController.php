<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Data layanan (disimpan di controller agar contoh tetap sederhana;
     * di proyek nyata bisa dipindah ke Model/database).
     */
    private function daftarLayanan(): array
    {
        return [
            'panel-surya-rumah' => [
                'nama' => 'Panel Surya Rumah Tangga',
                'ringkasan' => 'Instalasi PLTS atap untuk menekan tagihan listrik rumah Anda.',
                'deskripsi' => 'Kami merancang, memasang, dan merawat sistem PLTS atap on-grid untuk rumah tinggal, lengkap dengan monitoring produksi energi harian.',
                'fitur' => ['Survei & desain gratis', 'Garansi panel 25 tahun', 'Monitoring via aplikasi'],
            ],
            'plts-komersial' => [
                'nama' => 'PLTS Komersial & Industri',
                'ringkasan' => 'Solusi energi surya skala besar untuk pabrik, gudang, dan perkantoran.',
                'deskripsi' => 'Sistem PLTS kapasitas ratusan kWp hingga MWp dengan analisis ROI yang transparan serta opsi skema sewa maupun beli.',
                'fitur' => ['Analisis ROI mendalam', 'Skema sewa atau beli', 'Perawatan berkala'],
            ],
            'penyimpanan-baterai' => [
                'nama' => 'Sistem Penyimpanan Baterai',
                'ringkasan' => 'Simpan kelebihan energi surya untuk dipakai malam hari atau saat listrik padam.',
                'deskripsi' => 'Integrasi baterai lithium dengan sistem surya Anda untuk kemandirian energi dan cadangan daya andal.',
                'fitur' => ['Baterai lithium LFP', 'Cadangan saat pemadaman', 'Skalabel sesuai kebutuhan'],
            ],
        ];
    }

    public function beranda()
    {
        return view('pages.beranda', ['layanan' => $this->daftarLayanan()]);
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function layanan()
    {
        return view('pages.layanan', ['layanan' => $this->daftarLayanan()]);
    }

    public function detail(string $slug)
    {
        $layanan = $this->daftarLayanan();

        // Slug tidak dikenal -> memicu halaman 404 kustom
        abort_unless(isset($layanan[$slug]), 404);

        return view('pages.detail', ['item' => $layanan[$slug]]);
    }

    public function kontak()
    {
        return view('pages.kontak');
    }
}
