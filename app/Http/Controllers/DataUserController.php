<?php
namespace App\Http\Controllers;

use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('user', compact('data'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required'
        ]);
        $dataUser = User::create($request->all());

        $dataUser->save();

        return redirect()->route('user')->with('success', 'Data user berhasil disimpan');
    }
    public function edit($id)
    {
        $dataUser = User::findOrFail($id);
        return view('crud.edituser', compact('dataUser'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $dataUser = User::findOrFail($id);
        $dataUser->update($request->all());
        
        $dataUser->save();
        return redirect()->route('user')->with('success', 'Data user berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dataUser = User::findOrFail($id);
        $dataUser->delete();

        return redirect()->route('user')->with('success', 'Data user berhasil dihapus');
    }
}