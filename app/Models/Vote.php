<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Vote extends Pivot
{
    use HasFactory, HasUlids;
    protected $table = 'vote';
    public $incrementing = false;
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'nim_kandidat',
        'waktu_vote',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kandidat()
    {
        return $this->belongsTo(Kandidat::class, 'nim_kandidat');
    }
}
