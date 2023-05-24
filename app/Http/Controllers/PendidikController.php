<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Pendidik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class PendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Auth::check()) {
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman data dosen";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
        }
        $pendidik = Pendidik::whereIn('jabatan', ['Dosen', 'Staff'])->get();

        return view('admin/pendidik.index', compact('pendidik'));
    }
    public function pimpinan()
    {

        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman data pimpinan";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        // Mengambil data pendidik dengan jabatan "pimpinan" dan "rektor" saja
        $pimpinan = Pendidik::whereIn('jabatan', ['Ketua Prodi', 'Dekan', 'Rektor'])->get();

        return view('admin/pendidik.pimpinan', compact('pimpinan'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman tambah data staff & pendidik";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        return view('admin/pendidik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} menambah data baru staff & pendidik";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'nama' => 'required',
            'nip' => 'required|numeric',
            'jabatan' => 'required',
            // Tambahkan validasi untuk setiap field yang diperlukan
        ]);

        // Simpan data ke basis data
        $pendidik = new Pendidik;
        $pendidik->nip = $request->input('nip');
        $pendidik->nama = $request->input('nama');
        $pendidik->jabatan = $request->input('jabatan');
        // Setel nilai field lainnya jika ada
        $pendidik->save();

        return Redirect::route('pendidik.create')->with('success', 'Data pendidik berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($pendidik)
    {
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman edit staff & pendidik";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $pendidik = Pendidik::findOrFail($pendidik); // Mengambil data pendidik berdasarkan ID
        return view('admin/pendidik.edit', compact('pendidik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $pendidik)
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} mengubah data staff & pendidik";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $validatedData = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
        ]);

        $pendidik = Pendidik::findOrFail($pendidik); // Mengambil data pendidik berdasarkan ID
        $pendidik->update($validatedData); // Melakukan update data pendidik dengan data yang valid

        return Redirect::route('pendidik.index')->with('success', 'Data pendidik berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pendidik)
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} menghapus data staff & pendidik";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $pendidik = Pendidik::findOrFail($pendidik); // Mengambil data pendidik berdasarkan ID
        $pendidik->delete(); // Menghapus data pendidik

        return Redirect::route('pendidik.index')->with('success', 'Data pendidik berhasil dihapus');
    }
}
