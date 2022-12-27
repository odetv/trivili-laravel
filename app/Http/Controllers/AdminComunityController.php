<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\Packages;
use App\Models\Rates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminComunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Daftar Komunitas Paket Wisata";
        $comunities = new Comunity;
        if(isset($_GET['s'])){
            $s = $_GET['s'];
            $comunities = $comunities->where('comunity_name', 'like', "%$s%");
        }
        
        if(isset($_GET['comunity_id'])&&$_GET['comunity_id']!=''){
            $comunities=$comunities->where('comunity_id', $_GET['comunity_id']);
        }
        $comunities = $comunities->latest()->paginate(5);
        
        return view('admin.adminComunityView',compact('title', 'comunities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function comunity($id){
        //memanggil kelompok berdasarkan id_kelompok
        $comunity=Comunity::where('comunity_id',$id)->first();
        //menampilkan nama kelompok pada title
        $title='Komunitas '.$comunity->comunity_name;
        //memanggil daftar berdasarkan kelompok
        $comunities=Comunity::all();
        return view('admin.adminComunityView',compact('title','comunities'));
    }
    public function create()
    {
        $title = "Input Komunitas Paket Wisata";
        $comunities=Comunity::all();
        return view('admin.adminComunityInput', compact('title','comunities'));
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
            'comunity_name'=>'required:comunities|max:255',
            'comunity_location'=>'required:comunities|max:255',
            'contact'=>'required:comunities|max:255',
            'comunity_desc'=>'required:comunities|max:1024',
            'comunity_logo'=>'required:comunities'
            
        ],$message);
        if($request->hasFile('comunity_logo')){
            $fileName = time() . $request->file('comunity_logo')->getClientOriginalName();
            $path = $request->file('comunity_logo')->storeAs('comunity_logo',$fileName);
            $validasi['comunity_logo'] = $path;
        }
        $validasi['comunity_id'] = Auth::id();
        $comunities=Comunity::all();
        Comunity::create($validasi);
        return redirect('admin-comunity')->with('success','Data berhasil tersimpan');
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
        $title = "Edit Komunitas Paket Wisata";
        $comunities=Comunity::all();
        $comunity = Comunity::where('comunity_id', $id)->get()->first();
        return view('admin.adminComunityInput', compact('title', 'comunities','comunity'));
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
            'comunity_name'=>'required:comunities|max:255',
            'comunity_location'=>'required:comunities|max:255',
            'contact'=>'required:comunities|max:255',
            'comunity_desc'=>'required:comunities|max:1024'

        ],$message);
        if($request->hasFile('comunity_logo')){
            $fileName = time() . $request->file('comunity_logo')->getClientOriginalName();
            $path = $request->file('comunity_logo')->storeAs('comunity_logo',$fileName);
            $validasi['comunity_logo'] = $path;
            $comunity = Comunity::where('comunity_id', $id)->get()->first();
            Storage::delete('comunity_logo');
        }

        Comunity::where('comunity_id', $id)->update($validasi);
        $comunities=Comunity::all();
        return redirect('admin-comunity')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comunity = Comunity::where('comunity_id', $id)->get()->first();
        if($comunity != null){
            Storage::delete('comunity_logo');
            $comunity = Comunity::where('comunity_id', $id)->get()->first();
            Comunity::where('comunity_id', $id)->delete();
        }
        return redirect('admin-comunity')->with('success','Data berhasil di hapus');
    }
}
