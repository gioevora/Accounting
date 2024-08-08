<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'status',
        'quantity'
    ];

    public function item_details(): HasMany
    {
        return $this->hasMany(ItemDetail::class);
    }
}
