<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = \App\Models\Pasien::latest()->paginate(10);
        return view('pasien_index', ['pasien' => $pasien]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'no_pasien' => 'required|unique:pasiens,no_pasien',
            'nama' => 'required',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'alamat' => 'nullable',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $pasien = new \App\Models\Pasien($requestData);
        $pasien->foto = $request->file('foto')->store('public');
        $pasien->save();

        return back()->with('pesan', 'Data sudah disimpan');
    }

    public function edit(string $id)
{
    $data['pasien'] = \App\Models\Pasien::findOrFail($id);
    return view('pasien_edit', $data);
}


    public function destroy(string $id)
{
    $pasien = \App\Models\Pasien::findOrFail($id);
    $pasien->delete();
    return back()->with('pesan', 'Data sudah dihapus');
}


}
