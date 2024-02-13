<?php

namespace App\Models;

use App\Models\LantamalSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KeteranganSurat extends Model
{
    use HasFactory;

    public $table = 'keterangan_surat';

    protected $guarded = ['id'];

    public function lantamal()
    {
        return $this->hasMany(LantamalSurat::class);
    }

    // public function telegram(){
    //     return $this->hasMany(Telegram::class);
    // }
}
