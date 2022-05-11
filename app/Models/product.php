<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $casts = [
        'frequantly_boughts_ids'=>'array',
    ];
    protected $guarded=[]; 
        public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
      //create a relatrion one to many with products
      public function one_product_has_one_cat(){
        return $this->hasOne(category::class,'id');
    }

    
    public function this_belong_to_category()
    {
        return $this->belongsTo(product::class,'category_id');
    }

    public function rel_product()
    {
        # related product
        return $this->hasMany(product::class, 'category_id')->where('status',1)->limit(10);
    }

    // return the product in cart

    public static function getProductByCart($id)
    {
        return self::where('id',$id)->get()->toArray();
    }
    public function orders(){
        return $this->belongsToMany(Order::class,'product_orders')->withPivot('quantity');
    }
}
