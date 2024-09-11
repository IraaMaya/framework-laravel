<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class AcaraController extends Controller
{
    public function index(Request $request)
    {
        // Data statis (array)
        $acaras = [
            ['nama' => 'Konferensi Teknologi', 'deskripsi' => 'Diskusi tentang tren teknologi terbaru.', 'tanggal' => '2024-08-15'],
            ['nama' => 'Festival Musik', 'deskripsi' => 'Festival musik tahunan dengan berbagai artis.', 'tanggal' => '2024-09-05'],
            ['nama' => 'Pameran Seni', 'deskripsi' => 'Pameran seni kontemporer oleh seniman lokal.', 'tanggal' => '2024-10-10'],
            ['nama' => 'Konferensi Teknologi', 'deskripsi' => 'Diskusi tentang tren teknologi terbaru.', 'tanggal' => '2024-08-15'],
            ['nama' => 'Festival Musik', 'deskripsi' => 'Festival musik tahunan dengan berbagai artis.', 'tanggal' => '2024-09-05'],
            ['nama' => 'Pameran Seni', 'deskripsi' => 'Pameran seni kontemporer oleh seniman lokal.', 'tanggal' => '2024-10-10'],
            ['nama' => 'Konferensi Teknologi', 'deskripsi' => 'Diskusi tentang tren teknologi terbaru.', 'tanggal' => '2024-08-15'],
            ['nama' => 'Festival Musik', 'deskripsi' => 'Festival musik tahunan dengan berbagai artis.', 'tanggal' => '2024-09-05'],
            ['nama' => 'Pameran Seni', 'deskripsi' => 'Pameran seni kontemporer oleh seniman lokal.', 'tanggal' => '2024-10-10'],
            ['nama' => 'Konferensi Teknologi', 'deskripsi' => 'Diskusi tentang tren teknologi terbaru.', 'tanggal' => '2024-08-15'],
            ['nama' => 'Festival Musik', 'deskripsi' => 'Festival musik tahunan dengan berbagai artis.', 'tanggal' => '2024-09-05'],
            ['nama' => 'Pameran Seni', 'deskripsi' => 'Pameran seni kontemporer oleh seniman lokal.', 'tanggal' => '2024-10-10'],
            // Tambahkan data lainnya di sini...
        ];

        // Ubah array menjadi koleksi Laravel
        $collection = collect($acaras);

        // Tentukan berapa banyak item per halaman
        $perPage = 5;

        // Tentukan halaman saat ini
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Pisahkan item untuk halaman saat ini
        $currentItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();

        // Buat LengthAwarePaginator secara manual
        $paginatedItems = new LengthAwarePaginator($currentItems, count($collection), $perPage, $currentPage, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        return view('acaras.index', ['acaras' => $paginatedItems]);
    }
}