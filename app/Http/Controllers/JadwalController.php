<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(){
        $data = Jadwal::all();
        return view('jadwal', compact('data'));
    }
    public function store(request $request){
        $request->validate([
            'namajadwal' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'khusus' => 'required',
            'created_at' => 'required',
        ]);
        $data = new Jadwal([
            'namajadwal' => $request->get('namajadwal'),
            'tanggal' => $request->get('tanggal'),
            'keterangan' => $request->get('keterangan'),
            'khusus' => $request->get('khusus'),
            'created_at' => $request->get('created_at'),
        ]);

        $data->save();

        return redirect()->route('jadwal')->with('success', 'jadwal berhasil disimpan');

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
            'created_at' => 'required',
        ]);

        $data = Jadwal::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('jadwal')->with('success', 'jadwal berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = Jadwal::findOrFail($id);
        $data->delete();

        return redirect()->route('jadwal')->with('success', 'jadwal berhasil dihapus');
    }

}

