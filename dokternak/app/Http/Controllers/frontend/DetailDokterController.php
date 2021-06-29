<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dokter;
use App\Models\Jabatan;

class DetailDokterController extends Controller
{
    //
    public function index()
    {
        $dokter = DB::table('dokter')
        ->join('jabatan','jabatan.id_jabatan', '=', 'dokter.id_jabatan')
        ->get();

        return view('frontend.detaildokter', compact('dokter'));

    }

    public function detail($id) {
        return view('frontend.detaildokter',compact('dokter'));
    }

}
        // $peternak = DB::table('peternak')->get();
        // return view('backend.peternak.index',compact('peternak'));

        // $jabatans = DB::table('jabatan')->get();
        // return view ('frontend.detaildokter', compact('jabatan'))->with('jabatan',$jabatans);
        //,compact('tutorial'))->with('tutorial', $tutorial);
        // return view('frontend.detaildokter', compact('jabatan'))->with('jabatan',$jabatan);