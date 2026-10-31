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
        Schema::create('Nganh', function($table){
            $table->increments('ID');
            $table->string("MANGANH", 10)->nullalbe();
            $table->string("TENNGANH", 50)->nullalbe();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Nganh');
    }
};
