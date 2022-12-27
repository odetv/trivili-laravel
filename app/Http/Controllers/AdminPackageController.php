<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\Packages;
use App\Models\Rates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class AdminPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $title = "Daftar Paket Wisata";
        $packages = new Packages;
        if(isset($_GET['s'])){
            $s = $_GET['s'];
            $packages = $packages->where('package_name', 'like', "%$s%");
        }
        if(isset($_GET['comunity_id'])&&$_GET['comunity_id']!=''){
            $packages=$packages->where('comunity_id', $_GET['comunity_id']);
        }

        $packages = $packages->latest()->paginate(5);
        $comunities=Comunity::all();

        return view('admin.adminPackageView',compact('title', 'packages','comunities'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function package()
    {
        $title = "Daftar Paket Wisata";
        $packages = new Packages;
        if(isset($_GET['s'])){
            $s = $_GET['s'];
            $packages = $packages->where('package_name', 'like', "%$s%");
        }
        if(isset($_GET['comunity_id'])&&$_GET['comunity_id']!=''){
            $packages=$packages->where('comunity_id', $_GET['comunity_id']);
        }

        $packages = $packages->latest()->paginate(5);
        $comunities=Comunity::all();

        return view('admin.adminPackageView',compact('title', 'packages','comunities'));
        
    }

    public function comunity($id){
        $comunity=Comunity::where('comunity_id',$id)->first();
        $title='Komunitas '.$comunity->comunity_name;
        $packages = $comunity->packages;
        $comunities=Comunity::all();
        return view('admin.adminPackageView',compact('title','packages','comunities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Paket Wisata";
        $packages=Packages::all();
        $rates=Rates::all();
        $comunities=Comunity::all();
        return view('admin.adminPackageInput', compact('title','packages','rates','comunities'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Kolom Atribut harus lengkap!',
            'date'     => 'Kolom Atribut harus tanggal!',
            'numeric'  => 'Kolom Atribut harus angka!',
        ];
        $validasi = $request->validate([
            'package_code'=>'required:packages|max:255',
            'package_name'=>'required:packages|max:255',
            'package_desc'=>'required:packages|max:1024',
            'package_price'=>'numeric:packages',
            'location_name'=>'required:packages|max:255',
            'comunity_id'=>'required:packages|max:255',
            'feature_img'=>'required:packages'
        ],$message);
        if($request->hasFile('feature_img')){
            $fileName = time() . $request->file('feature_img')->getClientOriginalName();
            $path = $request->file('feature_img')->storeAs('features_img',$fileName);
            $validasi['feature_img'] = $path;
        }
        $validasi['package_id'] = Auth::id();
        $packages=Packages::all();
        $rates=Rates::all();
        $comunities=Comunity::all();
        Packages::create($validasi);
        return redirect('admin-package')->with('success','Data berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Packages::where('package_id', $id)->get()->first();
        $title = "Edit Paket Wisata";
        $comunities=Comunity::all();
        $comunity = Comunity::where('comunity_id', $id)->get()->first();
        return view('admin.adminPackageInput', compact('title', 'package', 'comunities','comunity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'required' => 'Kolom Atribut harus lengkap!',
            'date'     => 'Kolom Atribut harus tanggal!',
            'numeric'  => 'Kolom Atribut harus angka!',
        ];
        $validasi = $request->validate([
            'package_code'=>'required:packages|max:255',
            'package_name'=>'required:packages|max:255',
            'package_desc'=>'required:packages|max:1024',
            'package_price'=>'numeric:packages',
            'location_name'=>'required:packages|max:255',
            'comunity_id'=>'required:packages|max:255'

        ],$message);
        if($request->hasFile('feature_img')){
            $fileName = time() . $request->file('feature_img')->getClientOriginalName();
            $path = $request->file('feature_img')->storeAs('features_img',$fileName);
            $validasi['feature_img'] = $path;
            $package = Packages::where('package_id', $id)->get()->first();
            Storage::delete($package->feature_img);
        }
        
        // $validasi['package_id'] = Auth::id();
        Packages::where('package_id', $id)->update($validasi);
        $comunities=Comunity::all();
        return redirect('admin-package')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Packages::where('package_id', $id)->get()->first();
        if($package != null){
            Storage::delete($package->feature_img);
            $package = Packages::where('package_id', $id)->get()->first();
            Packages::where('package_id', $id)->delete();
        }
        return redirect('admin-package')->with('success','Data berhasil di hapus');
    }
}
