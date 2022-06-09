<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //view Categories
    public function viewCategory()
    {
        $categories = category::get();

        //get all the data from category tabel
        return view('backend.backend_pages.categories.viewcategories',compact('categories'));
    }

    // view create Form
    public function createCategory()
    {
        // add the parents to add form
        $parent_categories = category::where('is_parent','0')->get();

        return view('backend.backend_pages.categories.addnewcategories',compact('parent_categories'));
    }

    // add the new record to database
    public function addCategory(Request $request)
    {
        //validate the code
        $data = $request->all();
        // check if the title is empty
        if (empty($data['title']) || $data['title'] == null) {
            return back()->with('error', 'Title is requird');
        }
        if (empty($data['ar_title']) || $data['ar_title'] == null) {
            return back()->with('error', 'Title is requird');
        }
        if (empty($data['description'])) {
            return back()->with('error', 'Description is requird');
        }
        if (empty($data['ar_description'])) {
            return back()->with('error', 'Description is requird');
        }
        if (empty($data['image'])|| $data['image'] == null) {
            return back()->with('error', 'Image is requird');
        }


        if (!empty($data['status'])) {
            $status = '1';
        } else {
            $status = '0';
        }
        if (!empty($data['is_perant'])) {
            $parent = '0';
            $parent_id = null;
        }else{
            $parent= '1';
            $parent_id = $data['parent_id'];

        }

        // insert the data
        $addCategory = new category();
        $addCategory->title = $data['title'];
        $addCategory->ar_title = $data['ar_title'];
        $addCategory->image = $data['image'];
        $addCategory->ar_image = $data['ar_image'];
        $addCategory->description = $data['description'];
        $addCategory->ar_description = $data['ar_description'];
        $addCategory->is_parent = $parent;
        $addCategory->parent_id = $parent_id;
        $addCategory->status = $status;
        $addCategory->save();
        return back()->with('message','The category has been added');
    }

    // edit category form
    public function editCategory($id)
    {
        $current_category = category::find($id); // get the current category
        $parent_categories = category::where('is_parent' , 0)->get();

        if ($current_category) {
            return view('backend.backend_pages.categories.editcategories', compact('current_category', 'parent_categories'));
        } else {
            return back()->with('error', 'The ID is not found');
        }
    }

    //update category
    public function updateCategory(Request $request,$id)
    {
        $data = $request->all();
        // check if the title is empty
        if (empty($data['title']) || $data['title'] == null) {
            return back()->with('error', 'Title is requird');
        }
        if (empty($data['description'])) {
            return back()->with('error', 'Description is requird');
        }
        if (empty($data['image']) || $data['image'] == null) {
            return back()->with('error', 'Image is requird');
        }


        if (!empty($data['status'])) {
            $status = '1';
        } else {
            $status = '0';
        }
        if (!empty($data['is_perant'])) {
            $parent = '0';
            $parent_id = null;
        } else {
            $parent = '1';
            $parent_id = $data['parent_id'];
        }

        category::where('id',$id)->update([
                'title' => $data['title'],
                'ar_title' => $data['ar_title'],
                'image' => $data['image'],
                'ar_image' => $data['ar_image'],
                'description' => $data['description'],
                'ar_description' => $data['description'],
                'is_parent' => $parent,
                'parent_id' => $parent_id,
                'status' => $status
                ]);
                return back()->with('message','Your Category has been updated');
    }

    //get the category child compacte it in model

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

    // delete funstion
    public function deletCategory($id)
    {
        $delete_current_category = Category::find($id);
        if ($delete_current_category) {
            Category::where('id', $id)->delete();
            return back()->with('message', 'The Category has been deleted');
        } else {
            return back()->with('error', 'The ID is not found');
        }
    }
}
