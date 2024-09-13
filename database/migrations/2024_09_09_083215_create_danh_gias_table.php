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
        Schema::create('danh_gias', function (Blueprint $table) {
            $table->id();
            $table->integer('id_sach');
            $table->integer('id_khach_hang');
            $table->integer('sao_danh_gia');
            $table->string('noi_dung');
            $table->string('ngay_danh_gia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danh_gias');
    }
};
