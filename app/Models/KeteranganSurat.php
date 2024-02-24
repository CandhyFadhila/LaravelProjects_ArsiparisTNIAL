<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class KeteranganSurat extends Model
{
    use HasFactory;
    use HasUuids;

    public $table = 'keterangan_surat';

    protected $primaryKey = 'id';

    protected $fillable = ['nama_keterangan_surat'];

    public function lantamal_surat(): BelongsToMany
    {
        return $this->belongsToMany(LantamalSurat::class, 'lantamal_surat');
    }
}
