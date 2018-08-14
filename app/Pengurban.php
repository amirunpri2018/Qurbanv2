<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengurban extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'iduser', 'RT', 'RW', 'nohp', 'jenisHewan', 'jenisPemberian', 'statusPembayaran',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class);
    }

    public function ditujukanuntuks()
    {
        return $this->hasMany(DitujukanUntuk::class);
    }

    public function kupons()
    {
        return $this->hasMany(Kupon::class);
    }
}
