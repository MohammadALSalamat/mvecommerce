<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //view the brand table
    public function viewBrand()
    {
        //fetch banners data
        $brands = brand::get();
        return view('backend.backend_pages.brands.viewbrand',compact('brands'));

    }
    // view create table
    public function createBrand(){
        return view('backend.backend_pages.brands.addnewbrand');
    }

     // create the Brand
public function addBrand(Request $request)
{
    $data = $request->all();

    //check the inputs
    // check if the title is empty
    if (empty($data['title'])) {
        return back()->with('error','Title is requird');
    }
    if (empty($data['image'])) {
        return back()->with('error', 'Image is requird');
    }
    if(!empty($data['status'])){
        $status = '1';
                }else{
        $status = '0';
                }

    $insertbanner = new brand();
    $insertbanner->image = $data['image'];
    $insertbanner->title = $data['title'];;
    $insertbanner->status = $status;
    $insertbanner->save();
    // insert the data
    return back()->with('message','You have insert a new banner');

}
public function editBrand($id)
    {
        $current_brand = brand::find($id);

        if ($current_brand) {
            return view('backend.backend_pages.brands.editbrand', compact('current_brand'));
        }else{
            return back()->with('error','The ID is not found');
        }

    }
    public function updateBrand(Request $request,$id)

    {
        $data = $request->all();
        //check the inputs
        // check if the title is empty
        if (empty($data['title'])) {
            return back()->with('error', 'Title is requird');
        }
        
        if (empty($data['image'])) {
            return back()->with('error', 'Image is requird');
        }
        if (!empty($data['status'])) {
            $status = '1';
        } else {
            $status = '0';
        }
       
        brand::where('id',$id)->update([

        'image' => $data['image'],
        'title' => $data['title'],
        'status' => $status
        ]);
        return back()->with('message','The Brand has been updated');

    }




 // delete funstion
 public function deletBrand($id)
 {
     $delete_current_brand = brand::find($id);
     if ($delete_current_brand) {
        brand::where('id', $id)->delete();
         return back()->with('message', 'The brand has been deleted');
     } else {
         return back()->with('error', 'The ID is not found');
     }
 }
}
