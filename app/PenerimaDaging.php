<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenerimaDaging extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'RT', 'RW', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public function kupons()
    {
        return $this->hasMany(Kupon::class);
    }
}
