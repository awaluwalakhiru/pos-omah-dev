<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'name',
        'description',
    ];

    /**
     * items
     *
     * @return void
     */
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    /**
     * image
     *
     * @return Attribute
     */
    public function image(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? url('storage/categories/' . $value) : null,
        );
    }
}
