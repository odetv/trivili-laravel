<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\Packages;
use App\Models\Rates;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $packages = Packages::paginate(3);
        $rates=Rates::all();
        $comunities=Comunity::all();
        return view('dashboard', compact('packages','rates','comunities'));
    }
}
