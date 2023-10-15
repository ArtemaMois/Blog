<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{


     protected $fillable = [
         'name',
         'description',
         'image_url',
         'author',
         'year',
         'total'
     ];
}
