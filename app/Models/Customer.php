<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'hp',
        'address',
    ];
}
