<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\Packages;
use App\Models\Rates;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $package = Packages::all();
        $packages=Packages::all();
        $rates=Rates::all();
        $comunities=Comunity::all();
        return view('dashboard', compact('packages','rates','comunities'));
    }
}
