<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";
    // fillable digunakan untuk menentukan kolom apa saja yang boleh diisi
    protected $fillable = [
        "nama_kategori",
        "slug_kategori",
        "gambar_kategori",
        "deskripsi_kategori",
        "status_kategori"
    ];

    public function product()
    {
        return $this->hasMany(Product::class, "kategori_id", "id");
    }
}
