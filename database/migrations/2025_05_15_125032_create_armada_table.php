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
        if (!Schema::hasTable('armada')) {
            Schema::create('armada', function (Blueprint $table) {
                $table->id();
                $table->string('nopol'); // Nomor Polisi
                $table->string('jenis_mobil'); // Jenis Mobil
                $table->string('merek_mobil'); // Merek Mobil
                $table->date('tahun_pembelian'); // Tahun Pembelian
                $table->integer('kapasitas'); // Kapasitas
                $table->unsignedBigInteger('driver_id')->nullable(); // Relasi ke tabel driver (opsional)
                $table->enum('status_armada', ['aktif', 'nonaktif']); // Status Armada
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armada');
    }
};
