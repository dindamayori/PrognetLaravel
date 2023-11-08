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
        Schema::create('mahasiswakus', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10);
            $table->string('fullname', 100);
            $table->enum('jeniskelamin', ['Laki - Laki', 'Perempuan', 'Tidak Ingin Memberitahu']);
            $table->string('hoby', 50);
            $table->string('fakultas', 50);
            $table->string('tgllahir', 50);
            $table->string('email', 50);
            $table->string('kota', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswakus');
    }
};
