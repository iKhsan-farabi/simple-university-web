<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{


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
        $profile = Profile::all();

        return view('admin/profile.index', compact('profile'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman tambah data profile";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        return view('admin/profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} menambah data baru profile";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            // Tambahkan validasi untuk setiap field yang diperlukan
        ]);

        // Simpan data ke basis data
        $profile = new Profile;
        $profile->visi = $request->input('visi');
        $profile->misi = $request->input('misi');
        // Setel nilai field lainnya jika ada
        $profile->save();

        return Redirect::route('profile.create')->with('success', 'Data profile berhasil disimpan');
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
    public function edit($id)
    {
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman edit profile";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $profile = Profile::findOrFail($id); // Mengambil data pendidik berdasarkan ID
        return view('admin/profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */


     
    public function update(Request $request, $id)
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} mengubah data profile";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $validatedData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $profile = Profile::findOrFail($id); // Mengambil data profile berdasarkan ID
        $profile->update($validatedData); // Melakukan update data profile dengan data yang valid

        return Redirect::route('profile.index')->with('success', 'Data profile berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} menghapus data profile";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $profile = Profile::findOrFail($id); // Mengambil data profile berdasarkan ID
        $profile->delete(); // Menghapus data profile

        return Redirect::route('profile.index')->with('success', 'Data profile berhasil dihapus');
    }

}
