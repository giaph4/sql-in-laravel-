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
        Schema::create('sachs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_sach');
            $table->string('hinh_anh');
            $table->integer('id_the_loai');
            $table->integer('id_tac_gia');
            $table->integer('id_nha_xuat_ban');
            $table->integer('so_luong_ton');
            $table->integer('gia_ban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sachs');
    }
};
