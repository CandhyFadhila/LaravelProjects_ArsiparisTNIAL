<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    public $table = 'surat';

    protected $fillable = [
        'nama_surat',
        'no_surat'
    ];
}
