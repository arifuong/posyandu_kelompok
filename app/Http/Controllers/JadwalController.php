<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::all();
        return view('jadwal', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namajadwal' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'khusus' => 'required',
        ]);

        $data = new Jadwal([
            'namajadwal' => $request->get('namajadwal'),
            'tanggal' => $request->get('tanggal'),
            'keterangan' => $request->get('keterangan'),
            'khusus' => $request->get('khusus'),
           
        ]);

        $data->save();

        return redirect()->route('jadwal')->with('success', 'Jadwal berhasil disimpan');
    }

    public function edit($id)
    {
        $data = Jadwal::findOrFail($id);
        return view('crud.editjadwal', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namajadwal' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'khusus' => 'required',
        ]);

        $data = Jadwal::findOrFail($id);
        $data->update([
            'namajadwal' => $request->get('namajadwal'),
            'tanggal' => $request->get('tanggal'),
            'keterangan' => $request->get('keterangan'),
            'khusus' => $request->get('khusus'),
           
        ]);

        return redirect()->route('jadwal')->with('success', 'Jadwal berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = Jadwal::findOrFail($id);
        $data->delete();

        return redirect()->route('jadwal')->with('success', 'Jadwal berhasil dihapus');
    }
}
