<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';
    protected $primaryKey = 'kd_prodi';
    protected $fillable = ['kd_prodi', 'nama_prodi'];
    public $incrementing = false;

    public function kandidat()
    {
        return $this->hasMany(Kandidat::class, 'kd_prodi', 'kd_prodi');
    }
    public function user()
    {
        return $this->hasMany(User::class, 'kd_prodi', 'kd_prodi');
    }
}
