<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tutorial;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class DataTutorialController extends Controller
{
    public function index()
    {
        $tutorial = DB::table('tutorial')->get();
        return view('backend.data_tutorial.index', compact('tutorial'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $tutorial = null;
        return view('backend.data_tutorial.create',compact('tutorial'));
    }

    public function store(Request $request)
    {
        // DB::table('users')->insert([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request['password']),
        // ]);

        $message = [
            'numeric' => ':attributer harus diisi nomor.'
        ];

        $validator = FacadesValidator::make($request->all(),[
            // 'nama' => 'required|string|max:100',
            // 'tingkatan' => 'required|numeric',
        ], $message)->validate();

        $role = 1;

        $data_simpan = [
            'judul_tutorial' => $request->judul_tutorial,
            'isi' =>$request->isi,
            'icon' =>$request->icon,
        ];

        tutorial::create($data_simpan);

        return redirect()->route('data_tutorial.index')
                        ->with('success','Data tutorial baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $tutorial = Tutorial::where('id_tutorial',$id)->first();
        return view('backend.data_tutorial.create',compact('tutorial'));
    }

    public function update(Request $request, $id)
    {
        // DB::table('users')->where('id',$request->id)->update([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request['password']),
        // ]);

        $message = [
            'numeric' => ':attributer harus diisi nomor.'
        ];

        $validator = FacadesValidator::make($request->all(),[
            // 'nama' => 'required|string|max:100',
            // 'tingkatan' => 'required|numeric',
        ], $message)->validate();

        $data_simpan = [
            'judul_tutorial' => $request->judul_tutorial,
            'isi' =>$request->isi,
            'icon' =>$request->icon,
        ];

        Tutorial::where('id_tutorial', $id)->update($data_simpan);

        return redirect()->route('data_tutorial.index')
                        ->with('success','Data tutorial telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $tutorial = Tutorial::where('id_tutorial',$id)->delete();
        return redirect()->route('data_tutorial.index')
                        ->with('success','Data tutorial telah berhasil dihapus');
    }
}
