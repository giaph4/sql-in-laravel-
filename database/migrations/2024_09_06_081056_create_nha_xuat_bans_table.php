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
        Schema::create('nha_xuat_bans', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nha_xuat_ban');
            $table->string('dia_chi');
            $table->integer('so_dien_thoai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nha_xuat_bans');
    }
};
