<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->enum('kategori', [
                'Sosial dan Kemasyarakatan',
                'Kesehatan dan Kesejahteraan',
                'Keagamaan',
                'Teknologi Lingkungan',
                'Edukasi dan Kesadaran Lingkungan',
                'Konservasi Alam dan Keanekaragaman Hayati',
            ]);
            $table->date('deadline')->nullable();
            $table->enum('status', ['Selesai', 'Berlangsung']);
            $table->string('lokasi')->nullable();
            $table->string('gambar')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
