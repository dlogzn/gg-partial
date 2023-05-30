<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class Product extends Model
{
    protected $guarded = [];
    protected $table = 'products';

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function productProperties(): HasMany
    {
        return $this->hasMany(ProductProperty::class);
    }

    public function watchedProducts(): HasMany
    {
        return $this->hasMany(WatchedProduct::class);
    }
}
