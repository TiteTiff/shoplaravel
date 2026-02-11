<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //use HasFactory;

    protected $id = 'id';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'created_at',
        'updated_at',
    ];

    protected $guarded = [
        'id'];

public function products(): HasMany
{
    return $this->hasMany(Product::class);
}

}


