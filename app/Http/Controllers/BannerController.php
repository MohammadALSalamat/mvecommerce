<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function viewbanners(){
    //fetch banners data
    $banners = banner::get();

return view('backend.backend_pages.banners.viewbanners',compact('banners'));
    }
// view create table
    public function createbanner(){
        return view('backend.backend_pages.banners.addnewbanner');
    }

    // create the banner
public function addbanner(Request $request)
    {
        $data = $request->all();
        //check the inputs
        // check if the title is empty
        if (empty($data['title'])) {
            return back()->with('error','Title is requird');
        }
        if (empty($data['slug'])) {
            return back()->with('error', 'Slug is requird');
        }
        if (empty($data['comment'])) {
            return back()->with('error', 'Description is requird');
        }
        if (empty($data['filepath'])) {
            return back()->with('error', 'Image is requird');
        }
        if(!empty($data['status'])){
            $status = 'Active';
                    }else{
            $status = 'Inactive';
                    }
        if (!empty($data['is_banner'])) {
            $is_banner = '1';
        } else {
            $is_banner = '0';
        }
        $bannerslug = banner::where('slug',$data['slug'])->count();
        if($bannerslug > 0){
            $newslug =$data['slug'].rand(1,10000000000);
        }else{
            $newslug = $data['slug'];
        }
        $insertbanner = new banner;
        $insertbanner->image = $data['filepath'];
        $insertbanner->title = $data['title'];;
        $insertbanner->slug = $newslug;
        $insertbanner->description = $data['comment'];
        $insertbanner->status = $status;
        $insertbanner->is_banner = $is_banner;
        $insertbanner->save();
        // insert the data
        return back()->with('message','You have insert a new banner');

    }

    public function editbanner($id)
    {
        $current_banner = banner::find($id);

        if ($current_banner) {
            return view('backend.backend_pages.banners.editbanners', compact('current_banner'));
        }else{
            return back()->with('error','The ID is not found');
        }

    }
    public function updatebanner(Request $request,$id)

    {
        $data = $request->all();
        //check the inputs
        // check if the title is empty
        if (empty($data['title'])) {
            return back()->with('error', 'Title is requird');
        }
        if (empty($data['slug'])) {
            return back()->with('error', 'Slug is requird');
        }
        if (empty($data['comment'])) {
            return back()->with('error', 'Description is requird');
        }
        if (empty($data['filepath'])) {
            return back()->with('error', 'Image is requird');
        }
        if (!empty($data['status'])) {
            $status = 'Active';
        } else {
            $status = 'Inactive';
        }
        $bannerslug = banner::where('slug', $data['slug'])->where('id', '!=', $id)->count();
        if ($bannerslug > 0) {
            $newslug = $data['slug'] . rand(1, 10000000000);
        } else {
            $newslug = $data['slug'];
        }
        if (!empty($data['is_banner'])) {
            $is_banner = '1';
        } else {
            $is_banner = '0';
        }
        banner::where('id',$id)->update([
        'image' => $data['filepath'],
        'title' => $data['title'],
        'slug' => $newslug,
        'description' => $data['comment'],
        'status' => $status,
            'is_banner' => $is_banner
        ]);
        return back()->with('message','The Banner has been updated');

    }
    // delete funstion
    public function deletbanner($id)
    {
        $delete_current_banner = banner::find($id);
        if ($delete_current_banner) {
            banner::where('id',$id)->delete();
            return back()->with('message','The banner has been deleted');
        } else {
            return back()->with('error', 'The ID is not found');
        }
    }
}
