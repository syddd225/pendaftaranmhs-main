<?php

namespace Database\Seeders;

use App\Models\mahasiswabaru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        mahasiswabaru::insert([
            [
                'kode_pendaftar' => '241110005',
                'nama_pendaftar' => 'Julio Ramadani',
                'periode' => '2024 Ganjil',
                'jalur_pendaftaran' => 'PMB Mandiri',
                'gelombang' => 'Gelombang 1',
                'sistem_kuliah' => 'Pagi',
            ],
            [
                'kode_pendaftar' => '241110006',
                'nama_pendaftar' => 'Dimas Putra Pratama',
                'periode' => '2024 Ganjil',
                'jalur_pendaftaran' => 'PMB Mandiri',
                'gelombang' => 'Gelombang 1',
                'sistem_kuliah' => 'Pagi',
            ],
            [
                'kode_pendaftar' => '24421001',
                'nama_pendaftar' => 'Ika Pradipta Yuniawan',
                'periode' => '2024 Ganjil',
                'jalur_pendaftaran' => 'Transfer',
                'gelombang' => 'Gelombang 4',
                'sistem_kuliah' => 'Sore',
            ],
            [
                'kode_pendaftar' => '24211026',
                'nama_pendaftar' => 'Alya Putri Priyanto',
                'periode' => '2024 Ganjil',
                'jalur_pendaftaran' => 'PMB Mandiri',
                'gelombang' => 'Gelombang 2',
                'sistem_kuliah' => 'Pagi',
            ],
            [
                'kode_pendaftar' => '24211050',
                'nama_pendaftar' => 'Perwira Whisnu Adikara',
                'periode' => '2024 Ganjil',
                'jalur_pendaftaran' => 'PMB Mandiri',
                'gelombang' => 'Gelombang 2',
                'sistem_kuliah' => 'Pagi',
            ],
            [
                'kode_pendaftar' => '242211027',
                'nama_pendaftar' => 'Andre Kritian Kordias Laoli',
                'periode' => '2024 Ganjil',
                'jalur_pendaftaran' => 'PMB Mandiri',
                'gelombang' => 'Gelombang 2',
                'sistem_kuliah' => 'Pagi',
            ],
            [
                'kode_pendaftar' => '24211048',
                'nama_pendaftar' => 'Maulana Surya Nugraha',
                'periode' => '2024 Ganjil',
                'jalur_pendaftaran' => 'PMB Mandiri',
                'gelombang' => 'Gelombang 2',
                'sistem_kuliah' => 'Pagi',
            ],
            [
                'kode_pendaftar' => '24211049',
                'nama_pendaftar' => 'Hanif Ariq Muzaki',
                'periode' => '2024 Ganjil',
                'jalur_pendaftaran' => 'PMB Mandiri',
                'gelombang' => 'Gelombang 2',
                'sistem_kuliah' => 'Pagi',
            ],
        ]);
    }
}
