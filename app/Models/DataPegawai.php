<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPegawai extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama',
        'pangkat',
        'NRP',
        'jabatan',
        'kesatuan',
        'nopassring',
        'tandajasa',
        'tgl',
        'suku',
        'agama',
        'tinggi',
        'warnakulit',
        'mata',
        'rambut',
        'goldarah',
        'alamatsekarang',
        'ayahalamat',
        'ibualamat',
        'istrialamat',
        'tempatnikah',
        'namaanak',
        'ortuistrialamat',
        'jenis',
    ];

    public function siyalem()
    {
        return $this->hasOne(Siyalem::class, 'datapegawai_id');
    }
}
