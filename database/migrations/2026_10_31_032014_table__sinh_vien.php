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
        //
        Schema::create('SinhVien', function ($table) {
            $table->increments('ID');
            $table->string('MASV', 10)->nullable();
            $table->string('HOTENSV', 50)->nullable();
            $table->string('NAME', 50)->nullable();
            $table->string('GIOITINH', 5)->nullable();
            $table->datetime('NGAYSINH')->nullable();
            $table->integer('ID_NGANH')->unsigned(); //Ngăn chặn sô âm
            $table->foreign('ID_NGANH')->references('ID')->on('Nganh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('SinhVien');
    }
};
