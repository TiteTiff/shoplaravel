<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'stock',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
    ];

    protected $guarded = [
        'id',
        'category_id'
    ];
}
