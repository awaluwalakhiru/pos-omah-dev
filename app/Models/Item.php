<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'image',
        'code',
        'name',
        'barcode',
        'title',
        'description',
        'buy_price',
        'sell_price',
        'stock',
        'min_stock',
    ];

    /**
     * category
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * image
     *
     * @return Attribute
     */
    public function image(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? url('storage/items/' . $value) : null,
        );
    }
}
