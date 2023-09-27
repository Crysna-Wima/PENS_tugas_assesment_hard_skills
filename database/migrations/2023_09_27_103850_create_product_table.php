<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->foreignId("kategori_id")->constrained("kategori")->onDelete("cascade");
            $table->string("nama_product", 50);
            $table->string("slug_product", 50);
            $table->string("gambar_product", 50);
            $table->text("deskripsi_product");
            $table->enum("status_product", ["aktif", "nonaktif"]);
            $table->integer("harga_product");
            $table->integer("stok_product");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
