<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'title',
        'slug',
        'description',
        'image',
        'parent_id',
        'is_parent',
        'status'
    ];

  
      //create a relatrion one to many with products
      public function one_cat_has_many_products(){
        return $this->hasMany(product::class,'category_id');
    }

    // child category ajax submit for product form

    public static function get_category_child_by_parent_id($id)
    {
        return category::where('parent_id',$id)->get();
    }

}
