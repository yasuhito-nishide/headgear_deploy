<?php

namespace App\Table;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user_tb';

    protected $fillable = [
        'user_id',
        'mail',
        'tel',
        'password',
    ];
}


