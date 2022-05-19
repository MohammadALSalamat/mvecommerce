<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded=[]; 

      //create a relatrion one to many with products
      public function one_cat_has_many_products(){
        return $this->hasMany(product::class,'category_id');
    }

    // products related to child cat

    public function one_child_cat_has_many_products(){
        return $this->hasMany(product::class,'child_category_id');
    }

    // child category ajax submit for product form

    public static function get_category_child_by_parent_id($id)
    {
        return category::where('parent_id',$id)->get();
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
