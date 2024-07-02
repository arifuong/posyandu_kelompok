<?php

namespace App\Http\Controllers;

use App\Models\DataIbu;
use App\Models\DataBayi;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function dataibu(){
        $data = DataIbu::select('nik')->distinct()->get();
        return view('user.ibu', compact('data'));
    }
    public function getDataByNik($nik)
    {
        $data = DataIbu::where('nik', $nik)->first();
        return response()->json($data);
    }
    public function databayi(){
        $data = DataBayi::select('nik')->distinct()->get();
        return view('user.bayi', compact('data'));
    }
    public function getDataByNik2($nik)
    {
        $data = DataBayi::where('nik', $nik)->first();
        return response()->json($data);
    }
}
