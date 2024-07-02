<?php

namespace App\Http\Controllers;

use App\Models\DataIbu;
use Illuminate\Http\Request;

class DataIbuController extends Controller
{
    public function index(){
        $data = DataIbu::all();
        return view('dataibu', compact('data'));
    }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'NIK' => 'required',
            'Usia_kehamilan' => 'required',
            'jumlah_kehamilan' => 'required',
            'riwayat_persalinan_sebelumnya' => 'required',
            'kesehatan_janin' => 'required',
            'riwayat_penyakit' => 'required',
            'vitamin' => 'required',
            'imunisasi' => 'required',
            'tanggal_melahirkan' => 'required',

        ]);

        $dataIbu = new DataIbu([
            'nama' => $request->get('nama'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'alamat' => $request->get('alamat'),
            'NIK' => $request->get('NIK'),
            'Usia_kehamilan' => $request->get('Usia_kehamilan'),
            'jumlah_kehamilan' => $request->get('jumlah_kehamilan'),
            'riwayat_persalinan_sebelumnya' => $request->get('riwayat_persalinan_sebelumnya'),
            'kesehatan_janin' => $request->get('kesehatan_janin'),
            'riwayat_penyakit' => $request->get('riwayat_penyakit'),
            'vitamin' => $request->get('vitamin'),
            'imunisasi' => $request->get('imunisasi'),
            'tanggal_melahirkan' => $request->get('tanggal_melahirkan'),

        ]);

        $dataIbu->save();

        return redirect()->route('ibu')->with('success', 'Data ibu berhasil disimpan');

    }
    public function edit($id)
    {
        $dataIbu = DataIbu::findOrFail($id);
        return view('crud.editIbu', compact('dataIbu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'NIK' => 'required',
            'Usia_kehamilan' => 'required',
            'jumlah_kehamilan' => 'required',
            'riwayat_persalinan_sebelumnya' => 'required',
            'kesehatan_janin' => 'required',
            'riwayat_penyakit' => 'required',
            'vitamin' => 'required',
            'imunisasi' => 'required',
            'tanggal_melahirkan' => 'required',
        ]);

        $dataibu = DataIbu::findOrFail($id);
        $dataibu->update($request->all());

        return redirect()->route('ibu')->with('success', 'Data ibu berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dataibu = DataIbu::findOrFail($id);
        $dataibu->delete();

        return redirect()->route('ibu')->with('success', 'Data ibu berhasil dihapus');
    }
}
