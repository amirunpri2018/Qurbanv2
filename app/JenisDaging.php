<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisDaging extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',  
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public function dagings()
    {
        return $this->hasMany(Daging::class);
    }
}
