<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\category;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use PhpOption\None;

class ProductController extends Controller
{
    //view the products page
    public function viewproducts()
    {
        $products = product::get();
       return view('backend.backend_pages.products.viewproduct',compact('products'));
    }

    //view the products page
    public function createproducts()
    {
        $brands = brand::get();
        $vendors = User::where('role','vendor')->get();
        $categories = category::where('is_parent',0)->get();
       return view('backend.backend_pages.products.addproduct',compact('brands','vendors','categories'));
    }

    public function addproducts(Request $request)
    {
        //insert data of the product

        $data = $request->all();
         // check if the title is empty
         if (empty($data['title']) || $data['title'] == null) {
            return back()->with('error', 'Title is requird');
        }
        if (empty($data['slug']) || $data['slug'] == null) {
            return back()->with('error', 'Slug is requird');
        }
        if (empty($data['brand']) || $data['brand'] == 'none' || $data['brand'] ==  null) {
            $brand = null;
        }else{
            $brand = $data['brand'];
        }
        if (empty($data['vendor']) || $data['vendor'] == 'none' || $data['vendor'] == null) {
            $vendor = null;
        }else{
            $vendor = $data['vendor'];
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
        if (empty($data['filepath']) || $data['filepath'] == null) {
            return back()->with('error', 'Image is requird');
        }

        if (empty($data['price']) || $data['price'] == null) {
            return back()->with('error', 'Price is requird');
        }
        if ($data['offer_price'] > $data['price'] ) {
            return back()->with('error', 'Offer Price Must be less than Main Price');
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
        // insert the data
        $addproduct = new product();
        $addproduct->title = $data['title'];
        $addproduct->slug = $data['slug'];
        $addproduct->image = $data['filepath'];
        $addproduct->description = $data['comment'];
        $addproduct->Summary = $data['summary'];
        $addproduct->category_id = $data['category'];
        $addproduct->size = $data['size'];
        $addproduct->conditions = $data['condition'];
        $addproduct->stock = $data['stock'];
        $addproduct->price = $data['price'];
        $addproduct->offer_price = $data['offer_price'];
        $addproduct->discound = $data['discound'];
        $addproduct->brand_id = $brand;
        $addproduct->child_category_id = $child_cat;
        $addproduct->vendor_id = $vendor;
        $addproduct->status = $status;
        $addproduct->save();
        return back()->with('message','your product has been created');
    }
    // edit Products form
    public function editproducts($id)
    {
        $current_product= product::find($id); // get the current category
        $brands = brand::get();
            $vendors = User::where('role','vendor')->get();
            $categories = category::where('is_parent',0)->get();
        if ($current_product) {

            return view('backend.backend_pages.products.editproduct', compact('current_product','brands','vendors','categories'));
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
            if (empty($data['slug']) || $data['slug'] == null) {
                return back()->with('error', 'Slug is requird');
            }
            if (empty($data['brand']) || $data['brand'] == 'none' || $data['brand'] ==  null) {
                $brand = null;
            }else{
                $brand = $data['brand'];
            }
            if (empty($data['vendor']) || $data['vendor'] == 'none' || $data['vendor'] == null) {
                $vendor = null;
            }else{
                $vendor = $data['vendor'];
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
            if (empty($data['filepath']) || $data['filepath'] == null) {
                return back()->with('error', 'Image is requird');
            }

            if (empty($data['price']) || $data['price'] == null) {
                return back()->with('error', 'Price is requird');
            }
            if ($data['offer_price'] > $data['price']) {
                return back()->with('error', 'Offer Price Must be less than Main Price');
            }


            if (!empty($data['status'])) {
                $status = '1';
            } else {
                $status = '0';
            }
            product::where('id', $id)->update([
        'title' => $data['title'],
        'slug' => $data['slug'],
        'image' => $data['filepath'],
        'description' => $data['comment'],
        'Summary' => $data['summary'],
        'category_id' => $data['category'],
        'size' => $data['size'],
        'conditions' => $data['condition'],
        'stock' => $data['stock'],
        'price' => $data['price'],
        'offer_price' => $data['offer_price'],
        'discound' => $data['discound'],
        'brand_id' => $brand,
        'child_category_id' => $data['child_category'],
        'vendor_id' => $vendor,
        'status' => $status,
        ]);
        return back()->with('message','The Product has been updated');

        }else{
            return back()->with('error','this item is not found');
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