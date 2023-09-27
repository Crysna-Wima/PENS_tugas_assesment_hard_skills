<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kategori_id' => 3,
                'nama_product' => 'Cheese Burger',
                'slug_product' => 'cheese-burger',
                'gambar_product' => 'cheese-burger.png',
                'deskripsi_product' => 'Burger dengan keju',
                'status_product' => 'aktif',
                'harga_product' => 15000,
                'stok_product' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'nama_product' => "Toffe's Cake",
                'slug_product' => 'toffes-cake',
                'gambar_product' => 'toffes-cake.png',
                'deskripsi_product' => 'Kue dengan rasa toffe',
                'status_product' => 'aktif',
                'harga_product' => 20000,
                'stok_product' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'nama_product' => 'Dancake',
                'slug_product' => 'dancake',
                'gambar_product' => 'dancake.png',
                'deskripsi_product' => 'Kue dengan rasa coklat',
                'status_product' => 'aktif',
                'harga_product' => 10000,
                'stok_product' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'nama_product' => 'Crispy Sandwitch',
                'slug_product' => 'crispy-sandwitch',
                'gambar_product' => 'crispy-sandwitch.png',
                'deskripsi_product' => 'Sandwitch dengan rasa crispy',
                'status_product' => 'aktif',
                'harga_product' => 15000,
                'stok_product' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'nama_product' => 'Thai Soup',
                'slug_product' => 'thai-soup',
                'gambar_product' => 'thai-soup.png',
                'deskripsi_product' => 'Sup dengan rasa thai',
                'status_product' => 'aktif',
                'harga_product' => 15000,
                'stok_product' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'nama_product' => 'Food world',
                'slug_product' => 'food-world',
                'gambar_product' => 'food-world.png',
                'deskripsi_product' => 'Makanan dengan rasa dunia',
                'status_product' => 'aktif',
                'harga_product' => 20000,
                'stok_product' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'nama_product' => 'Donuts Hut',
                'slug_product' => 'donuts-hut',
                'gambar_product' => 'donuts-hut.png',
                'deskripsi_product' => 'Donat dengan rasa dunia',
                'status_product' => 'aktif',
                'harga_product' => 10000,
                'stok_product' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Product::insert($data);
    }
}
