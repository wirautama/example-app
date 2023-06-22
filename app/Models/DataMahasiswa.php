<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'data_mahasiswa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'nim',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',

    ];
}
