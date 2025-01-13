<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUlids;
    public $incrementing = false;

    protected $fillable = [
        'name',
        'email',
        'password',
        'status_vote',
        'kd_prodi',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'kd_prodi');
    }

    public function kandidat()
    {
        return $this->belongsToMany(Kandidat::class, 'vote', 'id_user', 'nim_kandidat');
        // Jika tabel `vote` memiliki kolom timestamps
    }
}
