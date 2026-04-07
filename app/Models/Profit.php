<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Profit extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'sale_id',
        'total',
    ];

    /**
     * saleData
     *
     * @return void
     */
    public function saleData()
    {
        return $this->belongsTo(Sale::class);
    }

    /**
     * createdAt
     *
     * @return Attribute
     */
    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::parse($value)->format('d-M-Y H:i:s'),
        );
    }
}
