<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\sponserAds;
use Illuminate\Http\Request;

class SponserAdsController extends Controller
{
    public function viewaads()
    {
        $ads = sponserAds::get();
        
        return view('backend.backend_pages.sponserAds.viewads',compact('ads'));
    }

    public function createads()
    {
        $vendors = Seller::where('status',1)->get();
       return view('backend.backend_pages.sponserAds.addnewads',compact('vendors'));
    }


    // create the banner
public function addads(Request $request)
{
    $data = $request->all();
    //check the inputs
    // check if the title is empty
    if (empty($data['image_place'])) {
        return back()->with('error',' Select Image place is requird');
    }
   
    if (empty($data['vendor_shop_name'])) {
        $vendors = null;
    }else{
       $vendors = $data['vendor_shop_name'];
    }
    if (empty($data['en_image'])) {
        return back()->with('error', 'Image is requird');
    }
    if (empty($data['ar_image'])) {
        return back()->with('error', 'Image is requird');
    }
    if(!empty($data['status'])){
        $status = 1;
                }else{
        $status = 0;
                }
   
    $insertbanner = new sponserAds();
    $insertbanner->image_English = $data['en_image'];
    $insertbanner->image_Arabic = $data['en_image'];
    $insertbanner->seller_id = $vendors;
    $insertbanner->image_place = $data['image_place'];
    $insertbanner->status = $status;
    $insertbanner->save();
    // insert the data
    return back()->with('message','You have insert a new sposer Ads');

}

public function editads()
{
    # code...
}

}
