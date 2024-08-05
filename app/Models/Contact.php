<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'picture',
        'type',
        'status',
        'phone_country',
        'phone_area',
        'phone_number',
        'mobile_country',
        'mobile_area',
        'mobile_number',
        'dd_country',
        'dd_area',
        'dd_number',
        'fax_country',
        'fax_area',
        'fax_number',
        'website',
        'brn',
        'notes',
    ];

    public function persons(): HasMany
    {
        return $this->hasMany(Person::class);
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }
}
