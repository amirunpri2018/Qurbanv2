<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idkupon', 'pengurban_id', 'penerimadaging_id', 'user_id', 'jenisKupon', 'isKembali',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public function pengurban()
    {
        return $this->belongsTo(Pengurban::class);
    }

    public function penerimadaging()
    {
        return $this->belongsTo(PenerimaDaging::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
