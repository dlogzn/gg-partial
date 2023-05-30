<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [];
    protected $table = 'categories';


    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function categoryType(): BelongsTo
    {
        return $this->belongsTo(CategoryType::class);
    }

    public function rootCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'root_id', 'id');
    }

    public function childCategories(): HasMany
    {
        return $this->hasMany(Category::class, 'root_id');
    }
}
