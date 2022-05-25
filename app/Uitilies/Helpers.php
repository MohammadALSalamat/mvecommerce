<?php

class Helper{

public static function User_defualt_image()
{
   return asset('front-style/assets/images/defualt.png');
}

// create helper for filter price

public static function minPrice()
{
   return floor(\App\Models\product::min('price'));
}

public static function maxPrice()
{
   return floor(\App\Models\product::max('price'));
}


}