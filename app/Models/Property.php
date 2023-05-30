<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    protected $guarded = [];
    protected $table = 'properties';

    public function categoryType(): BelongsTo
    {
        return $this->belongsTo(CategoryType::class);
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    public function productProperties(): HasMany
    {
        return $this->hasMany(ProductProperty::class);
    }

    public function distinctProductProperties(): HasMany
    {
        return $this->hasMany(ProductProperty::class)
            ->select(['property_id','value'])
            ->distinct();
    }

}
