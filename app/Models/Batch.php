<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = ['recipe_id', 'production_date'];
    public function recipe(): BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
}
