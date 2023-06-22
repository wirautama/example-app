<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTransaksi extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'data_transaksi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_transaksi',
        'nim',
        'nama',
        'kode_jurusan',
        'jurusan',

    ];
}
