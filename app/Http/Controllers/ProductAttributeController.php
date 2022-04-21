<?php

namespace App\Http\Controllers;
use File;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\productGallary;
use App\Models\productAttribute;
use Illuminate\Support\Facades\Storage;


class ProductAttributeController extends Controller
{
    // view product Attr add table

    public function add_productAttr($id)
    {
        $current_product = product::find($id);
        $SizeAttr = productAttribute::where('product_id' ,$id)->get();
        $ProductGallary = productGallary::where('product_id',$id)->get();
        if($current_product){
            return view('backend.backend_pages.products.products_Attribute.addproductAttr',compact('ProductGallary','current_product','SizeAttr'));
        }else{
            return back()->with('error','the product is not exists');
        }
    }

    // get the data from the form of attrabiutes
    public function create_productAttr(Request $request,$id)
    {
        $data = $request->all();
        foreach($data['price'] as  $key => $val){
            if(!empty($val)){
                $addProductAttr = new productAttribute();
                $addProductAttr['size']= $data['size'][$key];
                $addProductAttr['offer_price']= $data['offer_price'][$key];
                $addProductAttr['stock']= $data['stock'][$key];
                $addProductAttr['product_id']= $id;
                $addProductAttr['orgial_price']=$val;
                $addProductAttr->save();
            }
        }
        return back()->with('message','The Attribute has been added');
    }

    public function create_productAttr_gallary(Request $request,$id)
    {
        $data = $request->all();
        foreach($data['image'] as  $key => $val){
            if(!empty($val)){
                     $extension = $val->getClientOriginalName();
                     $fileName = time().'.'.$extension; 
                     $created = productGallary::create([
                         'gallery' => $fileName,
                         'product_id'=>$id
                     ]);
                     if($created){
                         Storage::disk('public')->put('popups/'.$fileName,File::get($val));  
                         return back()->with('message','you have added the Galleries');                  
                     }else{
                         return back()->with('error','image is not saved');
                     }
         }
      }
        return back()->with('message','The Attribute has been added');
    }
 
        // delete the product

        public function deletproductAttr($id)
        {
            #delete the product
            $delete_current_product = productAttribute::find($id);
            if ($delete_current_product) {
                productAttribute::where('id', $id)->delete();
                return back()->with('message', 'The Product Attrbute has been deleted');
            } else {
                return back()->with('error', 'The product Attrbute is not found');
            }
        }

         // delete the product
         public function gallary_deletproductAttr($id)
         {
             #delete the product
             $delete_current_product = productGallary::find($id);
             if ($delete_current_product) {
                 productGallary::where('id', $id)->delete();
                 return back()->with('message', 'The Product Attrbute has been deleted');
             } else {
                 return back()->with('error', 'The product Attrbute is not found');
             }
         }
}
