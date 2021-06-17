<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\dokter;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class DataDokterController extends Controller
{
    public function index()
    {
        $dtdokter = DB::table('dokter')->get();
        return view('backend.dokter.index', compact('dtdokter'));
    }


    public function create()
    {
        $dtdokter = null;
        return view('backend.dokter.create',compact('dtdokter'));
    }

    public function store(Request $request)
    {
        // DB::table('dokter')->insert([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'alamat' => $request->alamat,
        //     'tempat' => $request->tempat,
        //     'telpon' => $request->telpon,
        //     'foto' => $request->foto,
        //     'id_jabatan' => $request->id_jabatan,
        //     'jadwal_kerja' => $request->jadwal_kerja,
        //     'username' => $request->username,
        //     'password' => Hash::make($request['password']),

        $message = [
            'numeric' => ':attributer harus diisi nomor.'
        ];

        $validator = FacadesValidator::make($request->all(),[
            // 'nama' => 'required|string|max:100',
            // 'tingkatan' => 'required|numeric',
        ], $message)->validate();

        $role = 1;

        $data_simpan = [
            
            'nama' => $request->nama,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat' => $request->tempat,
            'telpon' => $request->telpon,
            'foto' => $request->foto,
            'id_jabatan' => $request->id_jabatan,
            'jadwal_kerja' => $request->jadwal_kerja,
            'username' => $request->username,
            'password' => Hash::make($request['password']),
        ];

        dokter::create($data_simpan);

        return redirect()->route('dokter.index')
                        ->with('success','Data dokter baru telah berhasil disimpan');

    }

    public function edit($id)
    {
        $dtdokter = Dokter::where('id_dokter',$id)->first();
        return view('backend.dokter.create',compact('dtdokter'));
    }

    public function update(Request $request, $id)
    {
        $message = [
            'numeric' => ':attributer harus diisi nomor.'
        ];

        $validator = FacadesValidator::make($request->all(),[
            // 'nama' => 'required|string|max:100',
            // 'tingkatan' => 'required|numeric',
        ], $message)->validate();

        $data_simpan = [
            'nama' => $request->nama,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat' => $request->tempat,
            'telpon' => $request->telpon,
            'foto' => $request->foto,
            'id_jabatan' => $request->id_jabatan,
            'jadwal_kerja' => $request->jadwal_kerja,
            'username' => $request->username,
            'password' => Hash::make($request['password']),
        ];

        Dokter::where('id_dokter', $id)->update($data_simpan);

        return redirect()->route('dokter.index')
                        ->with('success','Data dokter telah berhasil diperbarui');

    }

    public function destroy($id)
    {
        $dtdokter = Dokter::where('id_dokter',$id)->delete();
        return redirect()->route('dokter.index')
                        ->with('success','Data artikel telah berhasil dihapus');
    }
}
