<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasUlids, HasFactory;
    protected $guarded = ['nim'];
    protected $primaryKey = 'nim';
    protected $table = 'kandidat';
    public $incrementing = false;

    public function user()
    {
        return $this->hasMany(User::class, 'kandidat_id', 'nim');
    }
}
