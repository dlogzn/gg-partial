<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    protected $guarded = [];
    protected $table = 'sections';

    public function categoryType(): BelongsTo
    {
        return $this->belongsTo(CategoryType::class);
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }
}
