<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Sale extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'cashier_id',
        'customer_id',
        'ppn',
        'invoice',
        'cash',
        'change',
        'discount',
        'ppn_total',
        'total',
        'grand_total',
    ];

    /**
     * cashier
     *
     * @return void
     */
    public function cashier()
    {
        return $this->belongsTo(User::class, 'cashier_id');
    }

    /**
     * customer
     *
     * @return void
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * saleDetails
     *
     * @return void
     */
    public function saleDetails()
    {
        return $this->hasMany(SaleDetail::class);
    }

    /**
     * profit
     *
     * @return void
     */
    public function profit()
    {
        return $this->hasMany(Profit::class);
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
