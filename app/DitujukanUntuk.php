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
        'nama', 'pengurban_id', 'user_id'
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
