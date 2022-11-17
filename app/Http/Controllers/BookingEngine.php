<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingEngine extends Controller
{
    public function index(){
        $x=12345;
        $y=67890;
        $hasil=$x*$y;
        $nama='-';
        $email='-';
        $alamat='-';
        $provinsi='-';
        $negara='-';
        $pos='-';
        return view('booking.booking', compact('hasil','x','y','nama','email','alamat','provinsi','negara','pos'));
    }
}
