<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LantamalSurat extends Model
{
    use HasFactory;

    public $table = 'lantamal_surat';

    protected $guarded = ['id'];

    public function keteranganSurat()
    {
        return $this->belongsTo(KeteranganSurat::class, 'id_keterangan_surat', 'id');
    }
}
