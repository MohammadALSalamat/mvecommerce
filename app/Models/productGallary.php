<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productGallary extends Model
{
    use HasFactory;

    protected $fillable=[
        'gallery','product_id'
    ];
}
