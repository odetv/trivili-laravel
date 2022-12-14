<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Rates;
use App\Models\Comunity;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function package(){      
        $packages = Packages::latest()->paginate(5);
        $rates=Rates::all();
        $comunities=Comunity::all();
        return view('package.package', compact('packages','rates','comunities'));
    }

    public function detail($package_id){

        $data = Packages::find($package_id);
        return view('package.detail', ['package' => $data]);
    }

    public function search(Request $request){
        $data = Packages::where('package_name', 'like', '%'.$request->input('query').'%')->get();
        return view('package.search',['packages' => $data]);
    }

    public function checkout(){      
        $packages=Packages::all();
        $total = 0;
        if (session('checkout')){
            foreach (session('checkout') as $package_id => $details)
            $total += $details['package_price'] * $details['quantity'];
            $subtotal = $details['package_price'] * $details['quantity'];
        }
       
        // $checkout = session()->get('checkout', []);
        // dd($checkout);
        return view('package.checkout', compact('packages', 'total', 'subtotal', 'details'));
    }

    public function addToCart($package_id){
        $package = Packages::findOrFail($package_id);
        $checkout = session()->get('checkout', []);
        if(isset($checkout[$package_id])) {
            $checkout[$package_id]['quantity']++;
        }  else {
            $checkout[$package_id] = [
                "package_id" => $package->package_id,
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
 
    public function update(Request $request){
        if($request->id && $request->quantity){
            $checkout = session()->get('checkout');
            $checkout[$request->id]["quantity"] = $request->quantity;
            session()->put('checkout', $checkout);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
 
    public function remove(Request $request){
        if($request->id) {
            $checkout = session()->get('checkout');
            if(isset($checkout[$request->id])) {
                unset($checkout[$request->id]);
                session()->put('checkout', $checkout);
            }
            session()->flash('success', 'Packages successfully removed!');
        }
    }

    public function detailPackage($package_id){
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
