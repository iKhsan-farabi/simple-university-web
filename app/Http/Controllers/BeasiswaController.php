<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman daftar beasiswa";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $beasiswa = Beasiswa::all();
        return view('admin.mahasiswa.beasiswa.index' , compact('beasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman tambah data beasiswa";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        return view('admin.mahasiswa.beasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} menambah data baru beasiswa";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
         $validatedData = $request->validate([
            'nama' => 'required',
            'start' => 'required',
            'end' => 'required',
            'kuota' => 'required'
        ]);

        $beasiswa = new Beasiswa();
        $beasiswa->nama = $request->input('nama');
        $beasiswa->start = $request->input('start');
        $beasiswa->end = $request->input('end');
        $beasiswa->kuota = $request->input('kuota');
        $beasiswa->save();

        return Redirect::route('beasiswa.create')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Beasiswa $beasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($beasiswa)
    {
        
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman edit data beasiswa";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $beasiswa = Beasiswa::findOrFail($beasiswa);
        return view('admin.mahasiswa.beasiswa.edit', compact('beasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $beasiswa)
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} mengubah data beasiswa";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $validatedData = $request->validate([
            'nama' => 'required',
            'start' => 'required',
            'end' => 'required',
            'kuota' => 'required'

        ]);
    
        $beasiswa = Beasiswa::findOrFail($beasiswa); // Mengambil data pendidik berdasarkan ID
        $beasiswa->update($validatedData); // Melakukan update data pendidik dengan data yang valid
    
        return Redirect::route('beasiswa.index')->with('success', 'Data beasiswa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($beasiswa)
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} menghapus data beasiswa";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $beasiswa = Beasiswa::findOrFail($beasiswa);
        $beasiswa->delete();

        return Redirect::route('beasiswa.index')->with('success', 'Data beasiswa Berhasil Dihapus');
    }
}
