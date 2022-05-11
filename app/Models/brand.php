<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class brand extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded=[]; 

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function products()
    {
        #relation between brands and products
        return $this->hasMany(product::class);
    }
}
