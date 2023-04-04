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
        Schema::create('posyandu', function (Blueprint $table) {
            $table->integer('no_urut')->primary();
            $table->string('nama', 30);
            $table->string('alamat', 20);
            $table->string('tanggal_lahir', 30);
            $table->string('bb_lahir', 10);
            $table->string('tb_lahir', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posyandu');
    }
};
