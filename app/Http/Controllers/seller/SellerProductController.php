<?php

namespace App\Http\Controllers\seller;

use App\Models\brand;
use App\Models\Seller;
use App\Models\product;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerProductController extends Controller
{
    //view the products page
    public function viewproducts()
    {
        $user = Auth::guard('seller')->user()->id;
        $products = product::where('vendor_id',$user)->where('added_by','seller')->get();
       return view('Seller.seller_pages.products.viewproduct',compact('products'));
    }

    //view the products page
    public function createproducts()
    {
        $brands = brand::get();
        $user = Auth::guard('seller')->user()->id;
        $vendors = Seller::find($user);
        $categories = category::where('is_parent',0)->get();
        $products = product::where('vendor_id',$user)->where('added_by','seller')->get();
       return view('Seller.seller_pages.products.addproduct',compact('products','brands','categories','vendors'));
    }

    public function addproducts(Request $request)
    {
         //insert data of the product

         $data = $request->all();
         // check if the title is empty
         if (empty($data['title']) || $data['title'] == null) {
            return back()->with('error', 'Title is requird');
        }
        if (empty($data['category']) || $data['category'] == null || $data['category'] == 'none') {
            return back()->with('error', 'Category is requird');
        }
        if (empty($data['summary'])) {
            return back()->with('error', 'Summary is requird');
        }

        if (empty($data['comment'])) {
            return back()->with('error', 'Description is requird');
        }
        if (empty($data['ar_summary'])) {
            return back()->with('error', 'Arabic Summary is requird');
        }

        if (empty($data['ar_comment'])) {
            return back()->with('error', 'Arabic Description is requird');
        }
        if (empty($data['filepath']) || $data['filepath'] == null) {
            return back()->with('error', 'Image is requird');
        }

        if (empty($data['price']) || $data['price'] == null) {
            return back()->with('error', 'Price is requird');
        }

        if(empty($data['price']) || $data['price'] == null){
            $discound = 0;
        }elseif ($data['offer_price'] > $data['price'] ) {
            return back()->with('error', 'Offer Price Must be less than Main Price');
        }elseif(empty($data['offer_price']) || $data['offer_price'] != null){
            $discound =  ceil(($data['price'] - $data['offer_price'])/$data['price'] *100);
        }

        if (!empty($data['status'])) {
            $status = '1';
        } else {
            $status = '0';
        }
        if(empty($data['child_category'])){
            $child_cat = null;
        }else{
            $child_cat = $data['child_category'];
        }

        if(empty($data['field2']) || $data['field2'] == null){
            $frequntly = 0;
        }else{
            $frequntly = $data['field2'];
        }
        
        // insert the data
        $addproduct = new product();
        $addproduct->title = $data['title'];
        $addproduct->ar_title = $data['ar_title'];
        $addproduct->image = $data['filepath'];
        $addproduct->size_guid = $data['size_guid'];
        $addproduct->description = $data['comment'];
        $addproduct->additional_info = $data['additional_info'];
        $addproduct->return_policy = $data['return_policy'];
        $addproduct->Summary = $data['summary'];
        $addproduct->ar_description = $data['ar_comment'];
        $addproduct->ar_additional_info = $data['ar_additional_info'];
        $addproduct->ar_return_policy = $data['ar_return_policy'];
        $addproduct->ar_Summary = $data['ar_summary'];
        $addproduct->category_id = $data['category'];
        $addproduct->stock = $data['stock'];
        $addproduct->price = $data['price'];
        $addproduct->offer_price = $data['offer_price'];
        $addproduct->discound = $discound;
        $addproduct->added_by = 'seller';
        $addproduct->child_category_id = $child_cat;
        $addproduct->vendor_id = Auth::guard('seller')->user()->id;
        $addproduct->frequantly_boughts_ids = $frequntly;
        $addproduct->status = $status;
        $addproduct->save();
        return back()->with('message','your product has been created');
    }
    // edit Products form
    public function editproducts($id)
    {
        $current_product= product::find($id); // get the current category
        $user = Auth::guard('seller')->user()->id;
        $vendors = Seller::find(Auth::guard('seller')->user()->id);
        $brands = $vendors->brand;
        $categories = category::where('is_parent',0)->get();
        $cat_category =category::where('is_parent',1)->get();
        if ($current_product) {

            return view('Seller.seller_pages.products.editproduct', compact('current_product','brands','vendors','categories'));
        } else {
            return back()->with('error', 'The ID is not found');
        }
    }

    //update the product

    public function updateproducts(Request $request , $id)
    {
        $product = product::find($id);
        if ($product) {
            $data = $request->all();
            // check if the title is empty
            if (empty($data['title']) || $data['title'] == null) {
                return back()->with('error', 'Title is requird');
            }
            if (empty($data['ar_title']) || $data['ar_title'] == null) {
                return back()->with('error', 'Arabic Title is requird');
            }
            
            if (empty($data['category']) || $data['category'] == null || $data['category'] == 'none') {
                return back()->with('error', 'Category is requird');
            }
            if (empty($data['summary'])) {
                return back()->with('error', 'Summary is requird');
            }

            if (empty($data['comment'])) {
                return back()->with('error', 'Description is requird');
            }
            if (empty($data['ar_summary'])) {
                return back()->with('error', 'Arabic Summary is requird');
            }

            if (empty($data['ar_comment'])) {
                return back()->with('error', 'Arabic Description is requird');
            }
            if (empty($data['filepath']) || $data['filepath'] == null) {
                return back()->with('error', 'Image is requird');
            }

            if (empty($data['price']) || $data['price'] == null) {
                return back()->with('error', 'Price is requird');
            }
            if ($data['offer_price'] > $data['price']) {
                return back()->with('error', 'Offer Price Must be less than Main Price');
            }
            if(empty($data['offer_price']) || $data['offer_price'] != null){
                $discound =  ceil(($data['price'] - $data['offer_price'])/$data['price'] *100);
              }else{
                  $discound = null;
              }

            if (!empty($data['status'])) {
                $status = '1';
            } else {
                $status = '0';
            }
        product::where('id', $id)->update([
        'title' => $data['title'],
        'ar_title' => $data['ar_title'],
        'image' => $data['filepath'],
        'size_guid' => $data['size_guid'],
        'additional_info' => $data['additional_info'],
        'return_policy' => $data['return_policy'],
        'description' => $data['comment'],
        'Summary' => $data['summary'],
        'ar_additional_info' => $data['ar_additional_info'],
        'ar_return_policy' => $data['ar_return_policy'],
        'ar_description' => $data['ar_comment'],
        'ar_Summary' => $data['ar_summary'],
        'category_id' => $data['category'],
        'stock' => $data['stock'],
        'price' => $data['price'],
        'offer_price' => $data['offer_price'],
        'discound' => $discound,
        'child_category_id' => $data['child_category'],
        'vendor_id' => Auth::guard('seller')->user()->id,
        'status' => $status,
        ]);
        return back()->with('message','The Product has been updated');

        }else{
            return back()->with('error','this item is not found');
        }
    }

    public function get_category_child_by_parent_id(Request $request,$id)
    {

        $category = category::find($request->id);

        if ($category) {
            $child_category = category::get_category_child_by_parent_id($request->id);
            if (count($child_category) <= 0) {
                return response()->json(['status'=>false,'data'=>null,'msg'=>'parent data'  ]);
            }
                return response()->json(['status'=>true,'data'=>$child_category,'msg'=>'data is there']);
        }else{
            return response()->json([
                'status'=>false,
                'data'=>null,
                'msg'=>'Data Not Found'
            ]);
        }
    }

    // delete the product

    public function deletproducts($id)
    {
        #delete the product
        $delete_current_product = product::find($id);
        if ($delete_current_product) {
            product::where('id', $id)->delete();
            return back()->with('message', 'The Product has been deleted');
        } else {
            return back()->with('error', 'The product is not found');
        }
    }

}
