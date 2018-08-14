<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DitujukanUntuk extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'idpengurban',
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
}
