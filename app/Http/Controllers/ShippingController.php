<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    //view table of shippings

    public function view_shipping()
    {
        $shippings = Shipping::get();
        return view('backend.backend_pages.shipping.viewshipping',compact('shippings'));
    }
    public function create_shipping()
    {
        return view('backend.backend_pages.shipping.addnewshipping');
    }

    public function add_shipping(Request $request)
    {
        $data = $request->all();

        if (empty($data['deliver_time']) || $data['deliver_time'] == null
        ) {
            return back()->with('error', 'This Feild is required');
        }

        if (empty($data['deliver_charge']) || $data['deliver_charge'] == null) {
            return back()->with('error', 'This Feild is required');
        }

        if (empty($data['shipping_address']) || $data['shipping_address'] == null) {
            return back()->with('error', 'This Feild is required');
        }

        if (empty($data['status'])) {
            $status = 0;
        } else {
            $status = 1;
        }

        $newshipping = new Shipping();

        $newshipping->shipping_address = $data['shipping_address'];
        $newshipping->delivery_Time = $data['deliver_time'];
        $newshipping->delivery_charge = $data['deliver_charge'];
        $newshipping->status = $status;
        $newshipping->save();

        return back()->with('message', 'you have added new shipping');
    }

    public function edit_shipping(Request $request, $id)
    {
        $current_shipping = Shipping::find($id);

        if ($current_shipping) {
            return view('backend.backend_pages.shipping.editshipping', compact('current_shipping'));
        } else {
            return back()->with('error', 'This shipping is not Exits');
        }
    }

    public function update_shipping(Request $request, $id)
    {
        $current_shipping = Shipping::find($id);

        if ($current_shipping) {
            $data = $request->all();

            if (
                empty($data['deliver_time']) || $data['deliver_time'] == null
            ) {
                return back()->with('error', 'This Feild is required');
            }

            if (empty($data['deliver_charge']) || $data['deliver_charge'] == null) {
                return back()->with('error', 'This Feild is required');
            }

            if (empty($data['shipping_address']) || $data['shipping_address'] == null) {
                return back()->with('error', 'This Feild is required');
            }

            if (empty($data['status'])) {
                $status = 0;
            } else {
                $status = 1;
            }

            Shipping::where('id', $id)->update([
                'shipping_address' => $data['shipping_address'],
                'delivery_charge' => $data['deliver_charge'],
                'delivery_Time' => $data['deliver_time'],
                'status' => $status,
            ]);

            return back()->with('message', 'your shipping has been updated');
        } else {
            return back()->with('error', 'This shipping is not Exits');
        }
    }
    // delete funstion
    public function delet_shipping($id)
    {
        $delete_current_shipping = Shipping::find($id);
        if ($delete_current_shipping) {
            Shipping::where('id', $id)->delete();
            return back()->with('message', 'The shipping has been deleted');
        } else {
            return back()->with('error', 'The ID is not found');
        }
    }
}
