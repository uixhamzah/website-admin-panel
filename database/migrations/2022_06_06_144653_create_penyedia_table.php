<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyedia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kabupaten');
            $table->string('nama_penyedia');
            $table->string('lat');
            $table->string('long');
            $table->string('kategori');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyedia');
    }
};
