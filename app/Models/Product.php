<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";

    // fillable digunakan untuk menentukan kolom apa saja yang boleh diisi
    protected $fillable = [
        "kategori_id",
        "nama_product",
        "slug_product",
        "gambar_product",
        "deskripsi_product",
        "status_product",
        "harga_product",
        "stok_product"
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, "kategori_id", "id");
    }
}
