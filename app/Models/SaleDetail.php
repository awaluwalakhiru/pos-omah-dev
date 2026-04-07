<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'sale_id',
        'item_id',
        'qty',
        'price',
        'subtotal',
    ];

    /**
     * sale
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    /**
     * item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    /**
     * saleData
     *
     * @return void
     */
    public function saleData()
    {
        return $this->belongsTo(Sale::class, 'sale_id');
    }
}
