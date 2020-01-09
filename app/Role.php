<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public const USER = 'USER';
    public const ADMIN = 'ADMIN';

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
