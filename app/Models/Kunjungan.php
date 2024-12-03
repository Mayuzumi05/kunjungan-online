<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = "kunjungan";
    protected $primaryKey = "id";
    protected $fillable = [
        'tipe_kunjungan',
        'nama_tahanan',
        'nama_pengunjung',
        'alamat',
        'nik',
        'foto_ktp',
        'nomor_hp',
        'hubungan',
        'hari',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
