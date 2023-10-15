<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected function name():Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
            set: fn ($value) => ucfirst($value)
        );
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}