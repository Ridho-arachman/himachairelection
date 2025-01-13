<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasUlids, HasFactory;
    protected $primaryKey = 'nim_kandidat';
    protected $table = 'kandidat';
    public $incrementing = false;

    protected $fillable = [
        'nim_kandidat',
        'nama_kandidat',
        'nim',
        'kd_prodi',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'kd_prodi');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'vote', 'nim_kandidat', 'id_user');
    }
}
