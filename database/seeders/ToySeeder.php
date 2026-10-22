<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Seeder;

class ToySeeder extends Seeder
{
    public function run(): void
    {
        $toys = [
            [
                'name' => 'Robot Transformer Optimus',
                'age_group' => '6+ tahun',
                'category' => 'Action Figure',
                'price' => 185000,
                'image' => 'produk1.svg',
                'description' => 'Robot yang bisa berubah menjadi truk. Bahan plastik ABS kuat dan aman untuk anak usia 6 tahun ke atas.',
            ],
            [
                'name' => 'Mobil Remote Control Off-Road',
                'age_group' => '6+ tahun',
                'category' => 'Kendaraan',
                'price' => 250000,
                'image' => 'produk2.svg',
                'description' => 'Mobil RC 4WD dengan ban besar, baterai rechargeable dan jangkauan remote hingga 30 meter.',
            ],
            [
                'name' => 'Boneka Beruang Teddy Jumbo',
                'age_group' => '3+ tahun',
                'category' => 'Boneka',
                'price' => 120000,
                'image' => 'produk3.svg',
                'description' => 'Boneka beruang lembut ukuran 80 cm dengan bahan velboa halus, cocok untuk hadiah ulang tahun.',
            ],
            [
                'name' => 'Lego Kota Impian 500 Pcs',
                'age_group' => '6+ tahun',
                'category' => 'Edukasi',
                'price' => 320000,
                'image' => 'produk4.svg',
                'description' => 'Set balok susun 500 keping untuk melatih kreativitas, motorik halus dan logika anak.',
            ],
            [
                'name' => 'Puzzle Dunia Hewan 100 Pcs',
                'age_group' => '4+ tahun',
                'category' => 'Edukasi',
                'price' => 55000,
                'image' => 'produk5.svg',
                'description' => 'Puzzle karton tebal bergambar hewan dunia, mengasah konsentrasi dan kesabaran anak.',
            ],
            [
                'name' => 'Kereta Api Mainan Listrik',
                'age_group' => '5+ tahun',
                'category' => 'Kendaraan',
                'price' => 210000,
                'image' => 'produk6.svg',
                'description' => 'Set rel dan kereta api bertenaga baterai lengkap dengan jembatan dan stasiun mini.',
            ],
            [
                'name' => 'Boneka Barbie Fashion Set',
                'age_group' => '4+ tahun',
                'category' => 'Boneka',
                'price' => 145000,
                'image' => 'produk7.svg',
                'description' => 'Boneka fashion lengkap dengan 5 pasang pakaian dan aksesoris yang bisa dipasang-lepas.',
            ],
            [
                'name' => 'Pistol Air Mini Splash',
                'age_group' => '5+ tahun',
                'category' => 'Outdoor',
                'price' => 45000,
                'image' => 'produk8.svg',
                'description' => 'Pistol air ukuran saku dengan tangki besar, seru untuk bermain di kolam renang dan halaman.',
            ],
            [
                'name' => 'Piano Mini Anak 24 Tuts',
                'age_group' => '3+ tahun',
                'category' => 'Edukasi',
                'price' => 175000,
                'image' => 'produk9.svg',
                'description' => 'Piano elektrik mini dengan 24 tuts, 8 instrumen dan mode rekam untuk belajar musik sejak dini.',
            ],
            [
                'name' => 'Bola Sepak Mini Size 3',
                'age_group' => '5-10 tahun',
                'category' => 'Outdoor',
                'price' => 65000,
                'image' => 'produk10.svg',
                'description' => 'Bola sepak ukuran 3 dengan jahitan kuat dan permukaan anti-slip untuk anak usia 5-10 tahun.',
            ],
        ];

        foreach ($toys as $toy) {
            Toy::create($toy);
        }
    }
}