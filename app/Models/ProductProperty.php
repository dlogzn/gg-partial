<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductProperty extends Model
{
    protected $guarded = [];
    protected $table = 'product_properties';

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

}
