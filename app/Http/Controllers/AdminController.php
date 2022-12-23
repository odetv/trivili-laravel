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

class AdminController extends Controller
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
        if (isset($_GET['s'])) {
            $s = $_GET['s'];
            $packages = $packages->where('package_name', 'like', "%$s%");
        }

        if(isset($_GET['comunity_id'])&&$_GET['comunity_id']!=''){
            $packages=$packages->where('comunity_id', $_GET['comunity_id']);
        }

        $packages = Packages::paginate(5);
        $comunities=Comunity::all();
        
        return view('admin.daftarpaket',compact('title', 'packages','comunities'));
    }

    // function action(Request $request)
    // {
    //     if($request->ajax())
    //     {
    //         $output = '';
    //         $query = $request->get('query');
    //         if($query != '') {
    //             $data = DB::table('packages')
    //                 ->where('package_name', 'like', '%'.$query.'%')
    //                 ->get();
                    
    //         } else {
    //             $data = DB::table('packages')
    //                 // ->orderBy('package_id', 'desc')
    //                 ->get();
    //         }
             
    //         $total_row = $data->count();
    //         if($total_row > 0){
    //             foreach ($data as $item)
    //             {
    //                 $output .= '
    //                 <tr>
    //                         <td class="px-6 py-4 whitespace-nowrap">
    //                             <div class="flex items-center"><input type="checkbox" name="" id="">
    //                                 <div class="flex-shrink-0 h-10 w-10 ml-5">
    //                                     <img class="h-10 w-10 rounded-full"
    //                                         src="'.asset('storage/' . $item->feature_img).'" alt="">
    //                                 </div>
    //                                 <div class="ml-4">
    //                                     <div class="text-sm font-medium text-gray-900">
    //                                         <!-- Menampilkan elemen nama dari object item -->
    //                                         '.$item->package_name.'
    //                                     </div>
    //                                     <div class="text-sm text-gray-500">
    //                                         Kode Paket : '.$item->package_code.'
    //                                     </div>
    //                                     <div class="text-sm text-gray-500">
    //                                         Lokasi : '.$item->location_name.'
    //                                     </div>
    //                                 </div>
    //                             </div>
    //                         </td>
    //                         <td class="px-6 py-4 whitespace-nowrap">
    //                             <div class="text-sm text-gray-900">'.$item->package_price.'</div>
    //                         </td>
    //                         <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
    //                         <a
    //                             href="{{ route("paket.comunity", $item->comunity->comunity_name) }}">'.$item->comunity_id.'</a>
    //                         </td>
    //                         <td
    //                             class="px-6 py-4 lg:whitespace-normal md:whitespace-normal tablet:whitespace-normal whitespace-nowrap text-sm text-gray-500">
    //                             '.$item->package_desc.'
    //                         </td>
    //                         <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    //                             <form action="'.route('admin.destroy', $item->package_id).'" method="POST">
    //                                 <!-- Form lengkap dengan token csrf untuk method(DELETE)-->
    //                                 <!-- link untuk edit-->
    //                                 <a href="'.route('admin.edit', $item->package_id).'"
    //                                     class="text-primary hover:text-secondary transition duration-300 ease-in-out">Edit</a>
    //                                 <!-- button action untuk delete-->
    //                                 <button class="text-red-600 hover:text-red-900 transition duration-300 ease-in-out"
    //                                     onclick="return confirm'.('Anda Yakin ?').'" type="submit">Del</button>
    //                             </form>
    //                         </td>

    //                 </tr>
    //                 ';
    //             }
    //         } else {
    //             $output = '
    //             <tr>
    //                 <td align="center" colspan="5">Data tidak ditemukan!</td>
    //             </tr>
    //             ';
    //         }
    //         $data = array(
    //             'table_data'  => $output,
    //             'total_data'  => $total_row
    //         );
    //         echo json_encode($data);
    //     }
    // }

    public function comunity($id){
        //memanggil kelompok berdasarkan id_kelompok
        $comunity=Comunity::where('comunity_id',$id)->first();
        //menampilkan nama kelompok pada title
        $title='Komunitas '.$comunity->comunity_name;
        //memanggil daftar berdasarkan kelompok
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
