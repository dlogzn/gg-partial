<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryType extends Model
{
    protected $guarded = [];
    protected $table = 'category_types';

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
