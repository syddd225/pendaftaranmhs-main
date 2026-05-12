<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('mahasiswabarus', function (Blueprint $table) {
            $table->id();
            $table->String('kode_pendaftar', 10);
            $table->String('nama_pendaftar', 40);
            $table->String('periode', 20);
            $table->String('jalur_pendaftaran', 25);
            $table->String('gelombang', 25);
            $table->String('sistem_kuliah', 25);
            $table->String('progdi', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('mahasiswabarus');
    }
};
