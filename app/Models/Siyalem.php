<?php

namespace App\Models;

use App\Models\DataFoto;
use App\Models\DataPegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siyalem extends Model
{
    use HasFactory;

    protected $fillable=[
        'datapegawai_id',
        'lembaga',
        'sikap',
        'langkah',
        'bangun_kepala',
        'rambut',
        'kening',
        'dahi',
        'hidung',
        'bibir',
        'telinga',
        'urusan_polisi_militer',
    ];
    public function data_pegawais()
    {
        return $this->hasOne(DataPegawai::class);
    }

    public function data_fotos()
    {
        return $this->hasOne(DataFoto::class);
    }


}
