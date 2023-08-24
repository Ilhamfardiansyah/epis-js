<?php

namespace App\Models;

use App\Models\Siyalem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataFoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'siyalem_id',
        'ket_pic',
        'depan_pic',
        'kanan_pic',
        'kiri_pic',
        'sidik_pic',
    ];

    public function siyalem()
    {
        return $this->hasOne(Siyalem::class, 'datafoto_id');
    }

}
