<?php

namespace App\Http\Controllers;

use App\Models\DataBayi;
use Illuminate\Http\Request;

class DataBayiController extends Controller
{
    public function index(){
        $data = DataBayi::all();
        return view('databayi', compact('data'));
    }
    public function store(Request $request){
        $request->validate([
            'NIK' => 'required',
            'umur' => 'required',
            'jeniskelamin' => 'required',
            'nama_orangtua' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'jenis_imunisasi' => 'required',
            'lingkar_kepala' => 'required',
            'riwayat_penyakit' => 'required',
            'status_penyakit' => 'required',
            'jenis_asi' => 'required',
            'lama_menyusui' => 'required',
            'perkembangan' => 'required',
        ]);

        $dataBayi = new DataBayi([
            'NIK' => $request->get('NIK'),
            'umur' => $request->get('umur'),
            'jeniskelamin' => $request->get('jeniskelamin'),
            'nama_orangtua' => $request->get('nama_orangtua'),
            'berat_badan' => $request->get('berat_badan'),
            'tinggi_badan' => $request->get('tinggi_badan'),
            'jenis_imunisasi' => $request->get('jenis_imunisasi'),
            'lingkar_kepala' => $request->get('lingkar_kepala'),
            'riwayat_penyakit' => $request->get('riwayat_penyakit'),
            'status_penyakit' => $request->get('status_penyakit'),
            'jenis_asi' => $request->get('jenis_asi'),
            'lama_menyusui' => $request->get('lama_menyusui'),
            'perkembangan' => $request->get('perkembangan'),
        ]);

        $dataBayi->save();

        return redirect()->route('bayi')->with('success', 'Data bayi berhasil disimpan');

    }
    public function edit($id)
    {
        $dataBayi = DataBayi::findOrFail($id);
        return view('crud.editBayi', compact('dataBayi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'NIK' => 'required',
            'umur' => 'required',
            'jeniskelamin' => 'required',
            'nama_orangtua' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'jenis_imunisasi' => 'required',
            'lingkar_kepala' => 'required',
            'riwayat_penyakit' => 'required',
            'status_penyakit' => 'required',
            'jenis_asi' => 'required',
            'lama_menyusui' => 'required',
            'perkembangan' => 'required',
        ]);

        $dataBayi = DataBayi::findOrFail($id);
        $dataBayi->update($request->all());

        return redirect()->route('bayi')->with('success', 'Data bayi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dataBayi = DataBayi::findOrFail($id);
        $dataBayi->delete();

        return redirect()->route('bayi')->with('success', 'Data bayi berhasil dihapus');
    }
}
