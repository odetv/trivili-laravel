<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\Packages;
use App\Models\Rates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Packages::all();
        $title = "Daftar Paket Wisata";
        $package = new Packages;
        if (isset($_GET['s'])) {
            $s = $_GET['s'];
            $package = $package->where('package_name', 'like', "%$s%");
        }

        if(isset($_GET['package_id'])&&$_GET['package_id']!=''){
            $package=$package->where('comunity_id', $_GET['package_id']);
        }
   
        $package = $package->paginate(100);
        $packages=Packages::all();
        $rates=Rates::all();
        $comunities=Comunity::all();
        return view('admin.daftarpaket', compact('title', 'package','comunities'));
    }

    public function comunity($id){
        //memanggil kelompok berdasarkan id_kelompok_tani
        $comunity=Comunity::where('comunity_id',$id)->first();
        //menampilkan nama kelompok pada title
        $title='Komunitas '.$comunity->comunity_name;
        //memanggil daftar petani berdasarkan kelompok
        $package=$comunity->package;
        $comunities=Comunity::all();
        return view('admin.daftarpaket',compact('title','package','comunities'));
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
        return view('admin.inputpaket', compact('title','packages','rates','comunities'));
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
            'package_name'=>'required:packages|max:255',
            'package_desc'=>'required:packages|max:255',
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
        return redirect('admin')->with('success','Data berhasil tersimpan');
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
        return view('admin.inputpaket', compact('title', 'package', 'comunities','comunity'));
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
            'package_name'=>'required:packages|max:255',
            'package_desc'=>'required:packages|max:255',
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
        return redirect('admin')->with('success','Data berhasil di update');
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
        return redirect('admin')->with('success','Data berhasil di hapus');
    }
}
