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
        if (!Schema::hasTable('driver')) {
            Schema::create('driver', function (Blueprint $table) {
                $table->id();
                $table->string('nama', 100);
                $table->text('alamat'); // Ubah ke text dan NOT NULL
                $table->string('no_hp', 20); // Ubah ke varchar(20) dan NOT NULL
                $table->integer('usia'); // Ubah ke int(11) dan NOT NULL
                $table->string('nik', 20)->unique(); // Tambahkan UNIQUE
                $table->enum('status', ['aktif', 'standby'])->default('standby'); // Ubah nama field dan enum
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
        Schema::dropIfExists('driver');
    }
};
