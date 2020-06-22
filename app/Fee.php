<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = [
        'money', 'payed', 'user_id',
    ];

    /**
     * Belongs to User
     * 
     * @return \App\User
     */
    public function user() {
        return $this->belongsTo(\App\User::class);
    }
}
