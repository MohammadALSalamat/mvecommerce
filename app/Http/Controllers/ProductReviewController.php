<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function reviewSubmit(Request $request,$slug)
    {
        $data= $request->all();
        if (empty($data['rating'])) {
            return back()->with('error','you have to rate us first');
        }
        if(empty($data['user_name']) || $data['user_name'] == null){
            return back()->with('error','you have to add you name');
        }
        $create_review = new ProductReview();
        $create_review->user_id = $data['user_id'];
        $create_review->product_id = $data['product_id'];
        $create_review->rate = $data['rating'];
        $create_review->review = $data['review'];
        $create_review->save();
        
        return back()->with('message','Thank you for your feedback to our product');

        
    }
}
