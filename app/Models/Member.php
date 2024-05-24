<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member';

    protected $fillable = [
        'id_user',
        'nomor_pas',
        'gambar_member',
        'nama_member',
        'kewarganegaraan',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'rt_rw',
        'kode_zip',
        'no_hp',
        'no_telp',
        'status',
        'jumlah_tanggungan',
        'pendapatan_bulanan',
        'kena_pajak',
        'npwp',
        'deleted',
        'masa_aktif',
        'activated_at',
        'status_member'
    ];
}
