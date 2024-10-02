<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::latest()->paginate(10);
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|stri    ng:min:5',
            'tempat_lahir'=> 'required|string:min:5',
             'tanggal_lahir' => 'required|date',
            'alamat'=> 'required|string:min:5',
            'asal_sekolah'=> 'required|string:min:5',
            'email'=> 'required|string:min:5',
            'foto'=> 'required|mimes:png,jpg,jpeg|max:2048',
            'scan_kk'=> 'required|mimes:png,jpg,jpeg|max:2048',




            
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/siswa', $foto->hashName());

        $scan_kk = $request->file('scan_kk');
        $scan_kk->storeAs('public/siswa', $scan_kk->hashName());

        Siswa::create([
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
         'foto' => $foto->hashName(),
'scan_kk' => $scan_kk->hashName(),
        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
