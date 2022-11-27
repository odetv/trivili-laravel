<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Rates;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        // $x=12345;
        // $y=67890;
        // $hasil=$x*$y;
        // $nama='-';
        // $email='-';
        // $alamat='-';
        // $provinsi='-';
        // $negara='-';
        // $pos='-';
        // return view('booking.booking', compact('hasil','x','y','nama','email','alamat','provinsi','negara','pos'));
        // return view('booking.booking');
        
        $packages=Packages::all();
        $rates=Rates::all();
        return view('booking.booking', compact('packages','rates'));
    }
}
