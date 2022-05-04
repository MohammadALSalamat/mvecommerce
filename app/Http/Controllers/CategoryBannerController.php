<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\categoryBanner;
use App\Models\Seller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoryBannerController extends Controller
{
    public function createcategoriesbanners()
    {
        $categories = category::where('status',1)->get();
        $categorybanners = categoryBanner::get();
        $sellers = Seller::where('status',1)->get();
        return view('backend.backend_pages.categories.addcategorybannner',compact('sellers','categories','categorybanners'));
    }
    public function create_category_banner(Request $request)
    {
        $data = $request->all();
        $check_column_if_has_data = categoryBanner::where('category_place_id',$data['category_id'])->count();
        
        if($check_column_if_has_data > 0 ){
            if(!empty($data['en_image']) || $data['en_image'] != null ){
                $en_image = $data['en_image'];
            }
            if(!empty($data['ar_image']) || $data['ar_image'] != null ){
                $ar_image = $data['ar_image'];
            }
            $oldvalue = categoryBanner::where('category_place_id',$data['category_id'])->first();
            $oldvalue_en = explode(",", $oldvalue->image_English);
            $oldvalue_ar = explode(",", $oldvalue->image_Arabic);

            categoryBanner::where('category_place_id',$data['category_id'])->update([

                'image_English' => implode(",", array_merge($seat,$extSeat )),
            ]);

        }else{
            $newcategorybanner = new categoryBanner();
            $newcategorybanner->seller_id = $data['seller_id'];
            $newcategorybanner->category_place_id = $data['category_id'];
            $newcategorybanner->image_English = $data['en_image'];
            $newcategorybanner->image_Arabic = $data['ar_image'];
            $newcategorybanner->save();
        }

        return back()->with('message','The banner has been added');
    }

     // delete the category
     public function admin_category_delete($id)
     {
         $delete_current_product = categoryBanner::find($id);
         if ($delete_current_product) {
            categoryBanner::where('id', $id)->delete();
             return back()->with('message', 'The Category banner has been deleted');
         } else {
             return back()->with('error', 'The Category Banner is not found');
         }
     }
}
