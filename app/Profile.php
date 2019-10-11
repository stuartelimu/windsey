<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'bio', 'telephone', 'address', 'card',
    ];
}
