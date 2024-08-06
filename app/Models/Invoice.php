<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'contact_id',
        'issue_date',
        'due_date',
        'reference',
        'currency',
        'tax',
    ];
}
