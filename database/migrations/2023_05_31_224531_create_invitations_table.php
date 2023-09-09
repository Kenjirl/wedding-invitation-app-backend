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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_tlp');
            $table->enum('gender', ['Pria', 'Wanita']);
            $table->string('link')->nullable();
            $table->enum('status', ['Terkirim', 'Belum Terkirim'])->default('Belum Terkirim');
            $table->enum('respons', ['Hadir', 'Belum Menjawab', 'Tidak Hadir'])->default('Belum Menjawab');
            $table->enum('alasan', ['-', 'Sakit', 'Urusan Pekerjaan', 'Urusan Keluarga', 'Kendala Lainnya'])->default('-');
            $table->integer('jumlah')->default(0);
            $table->text('wish')->nullable();
            $table->integer('deleted')->default(0);
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
        Schema::dropIfExists('invitations');
    }
};
