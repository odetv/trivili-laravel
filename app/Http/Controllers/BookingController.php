<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Rates;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function package(){      
        $packages=Packages::all();
        $rates=Rates::all();
        return view('booking.package', compact('packages','rates'));
    }
    public function checkout(){      
        $packages=Packages::all();
        $rates=Rates::all();
        return view('booking.checkout', compact('packages','rates'));
    }
}
