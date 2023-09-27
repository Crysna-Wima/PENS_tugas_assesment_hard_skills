<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
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
                'nama_kategori' => 'Makanan',
                'slug_kategori' => 'makanan',
                'gambar_kategori' => 'default.jpg',
                'deskripsi_kategori' => 'Kategori Makanan',
                'status_kategori' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Minuman',
                'slug_kategori' => 'minuman',
                'gambar_kategori' => 'default.jpg',
                'deskripsi_kategori' => 'Kategori Minuman',
                'status_kategori' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Snack',
                'slug_kategori' => 'snack',
                'gambar_kategori' => 'default.jpg',
                'deskripsi_kategori' => 'Kategori Snack',
                'status_kategori' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Kategori::insert($data);
    }
}
