<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Rates;
use App\Models\Comunity;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function package(){      
        $packages=Packages::all();
        $rates=Rates::all();
        $comunities=Comunity::all();
        return view('booking.package', compact('packages','rates','comunities'));
    }
    public function checkout(){      
        $packages=Packages::all();
        $rates=Rates::all();
        return view('booking.checkout', compact('packages','rates'));
    }

    public function addToCart($package_id)
    {
        $package = Packages::findOrFail($package_id);
        $checkout = session()->get('checkout', []);
        if(isset($checkout[$package_id])) {
            $checkout[$package_id]['quantity']++;
        }  else {
            $checkout[$package_id] = [
                "package_name" => $package->package_name,
                "feature_img" => $package->feature_img,
                "package_price" => $package->package_price,
                "location_name" => $package->location_name,
                "quantity" => 1
            ];
        }
        session()->put('checkout', $checkout);
        return redirect()->back()->with('success', 'Packages add to checkout successfully!');
    }
 
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $checkout = session()->get('checkout');
            $checkout[$request->id]["quantity"] = $request->quantity;
            session()->put('checkout', $checkout);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
            $checkout = session()->get('checkout');
            if(isset($checkout[$request->id])) {
                unset($checkout[$request->id]);
                session()->put('checkout', $checkout);
            }
            session()->flash('success', 'Packages successfully removed!');
        }
    }

    public function detailPackage($package_id)
    {
        $package = Packages::findOrFail($package_id);
        $detail = session()->get('detail', []);
        if(isset($detail[$package_id])) {
            $detail[$package_id];
        }  else {
            $detail[$package_id] = [
                "package_name" => $package->package_name,
                "feature_img" => $package->feature_img,
                "package_price" => $package->package_price,
                "location_name" => $package->location_name
            ];
        }
        session()->put('detail', $detail);
        // return redirect()->back()->with('success', 'Packages add to detail successfully!');
    }
}
