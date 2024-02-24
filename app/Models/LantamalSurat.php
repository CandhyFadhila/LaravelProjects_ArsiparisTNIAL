<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LantamalSurat extends Model
{
    use HasFactory;
    use HasUuids;

    public $table = 'lantamal_surat';

    protected $primaryKey = 'id';

    protected $fillable = [
        'asal_surat',
        'tanggal_surat',
        'nomor_surat',
        'perihan_surat',
        'id_keterangan_surat',
    ];

}
