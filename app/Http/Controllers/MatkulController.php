<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\Matkul;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman mata kuliah";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $matkul = Matkul::all();
        return view('admin.mahasiswa.matkul.index', compact('matkul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman tambah data mata kuliah";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        return view('admin.mahasiswa.matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuat data mata kuliah baru";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $validatedData = $request->validate([
            'nama' => 'required',
            'kategori' => 'required'
        ]);

        $matkul = new Matkul();
        $matkul->nama = $request->input('nama');
        $matkul->kategori = $request->input('kategori');
        $matkul->save();

        return Redirect::route('matkul.create')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matkul $matkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($matkul)
    {
        
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman edit mata kuliah";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $matkul = Matkul::findOrFail($matkul);
        return view('admin.mahasiswa.matkul.edit', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $matkul)
    {
        
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} mengubah data mata kuliah";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $validatedData = $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
        ]);
    
        $matkul = Matkul::findOrFail($matkul); // Mengambil data pendidik berdasarkan ID
        $matkul->update($validatedData); // Melakukan update data pendidik dengan data yang valid
    
        return Redirect::route('matkul.index')->with('success', 'Data matkul berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($matkul)
    {
       
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} menghapus data mata kuliah";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $matkul = Matkul::findOrFail($matkul);
        $matkul->delete();

        return Redirect::route('matkul.index')->with('success', 'Data Matkul Berhasil Dihapus');
    }
}
