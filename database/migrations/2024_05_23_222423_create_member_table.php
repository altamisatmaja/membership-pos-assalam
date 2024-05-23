<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->string('nomor_pas')->unique();
            $table->string('gambar_member');
            $table->string('nama_member');
            $table->string('kewarganegaraan');
            $table->string('tempat_lahir');
            $table->dateTime('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']);
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rt_rw');
            $table->string('kode_zip');
            $table->string('no_hp');
            $table->string('no_telp');
            $table->enum('status', ['Aktif', 'Nonaktif']);
            $table->bigInteger('jumlah_tanggungan');
            $table->bigInteger('pendapatan_bulanan');
            $table->boolean('kena_pajak');
            $table->string('npwp')->nullable();
            $table->enum('deleted', ['Dihapus', 'Tidak dihapus'])->default('Tidak dihapus');
            $table->dateTime('masa_aktif');
            $table->dateTime('activated_at');
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
        Schema::dropIfExists('member');
    }
}
