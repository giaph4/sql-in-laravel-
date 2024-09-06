<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chi_tiet_phieu_nhaps', function (Blueprint $table) {
            $table->id();
            $table->integer('id_sach');
            $table->integer('id_phieu_nhap');
            $table->integer('so_luong_nhap');
            $table->integer('gia_nhap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_phieu_nhaps');
    }
};
