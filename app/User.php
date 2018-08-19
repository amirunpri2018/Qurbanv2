<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'username', 'email', 'password', 'nohp', 'status', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class);
    }

    public function kupons()
    {
        return $this->hasMany(Kupon::class);
    }

    public function dagings()
    {
        return $this->hasMany(Daging::class);
    }

    public function ditujukanuntuks()
    {
        return $this->hasMany(DitujukanUntuk::class);
    }
}
