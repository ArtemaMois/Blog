<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $casts = [
        'is_active' => 'boolean',
        'tags' => 'array'
    ];
    protected $fillable = [
        'name',
        'description',
        'price',
        'is_active',
        'tags'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
            set: fn ($value) => ucfirst($value)
        );
    }
}
