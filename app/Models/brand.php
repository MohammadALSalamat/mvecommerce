<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'title',
        'slug',
        'image',
        'status'
    ];

    public function products()
    {
        #relation between brands and products
        return $this->hasMany('App\Models\product')
    }
}
