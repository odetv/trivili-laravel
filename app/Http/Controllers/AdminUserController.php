<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Daftar User Trivili";
        $users = new User();

        if(isset($_GET['s'])){
            $s = $_GET['s'];
            $users = $users->where('name', 'like', "%$s%");
        }
        if(isset($_GET['id'])&&$_GET['id']!=''){
            $users=$users->where('id', $_GET['id']);
        }

        $users = $users->latest()->paginate(5);

        return view('admin.adminUserView',compact('title', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Buat Akun Baru";
        $users=User::all();
        return view('admin.adminUserInput', compact('title','users'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Kolom Atribut harus lengkap!',
            'date'     => 'Kolom Atribut harus tanggal!',
            'numeric'  => 'Kolom Atribut harus angka!',
        ];

        $validasi = $request->validate([
            'is_admin'=>'required:users',
            'user_photo'=>'required:users',
            'name'=>'required:users|max:255',
            'email'=>'required:users|max:255',
            'password'=>'required:users|max:255'
        ],$message);

        if ($request->hasFile('user_photo')) {
            $fileName = time() . $request->file('user_photo')->getClientOriginalName();
            $path = $request->file('user_photo')->storeAs('user_photo', $fileName);
            $validasi['user_photo'] = $path;
        }
        $validasi['password'] = Hash::make($validasi['password']);
        $validasi['id'] = Auth::id();
        User::create($validasi);
        return redirect('admin-user')->with('success','Data berhasil tersimpan');
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
        $title = "Edit Data User";
        $users=User::all();
        $user = User::where('id', $id)->get()->first();
        return view('admin.adminUserInput', compact('title', 'users','user'));
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
            'is_admin'=>'required:users',
            'name'=>'required:users|max:255',
            'email'=>'required:users|max:255',
            'password'=>'required:users|max:255'
        ],$message);
        if($request->hasFile('user_photo')){
            $fileName = time() . $request->file('user_photo')->getClientOriginalName();
            $path = $request->file('user_photo')->storeAs('user_photo',$fileName);
            $validasi['user_photo'] = $path;
            $user = User::where('id', $id)->get()->first();
            Storage::delete('user_photo');
        }
        $validasi['password'] = Hash::make($validasi['password']);
        User::where('id', $id)->update($validasi);
        $users=User::all();
        return redirect('admin-user')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->get()->first();
        if($user != null){
            // Storage::delete('user_photo');
            $user = User::where('id', $id)->get()->first();
            User::where('id', $id)->delete();
        }
        return redirect('admin-user')->with('success','Data berhasil di hapus');
    }
}
