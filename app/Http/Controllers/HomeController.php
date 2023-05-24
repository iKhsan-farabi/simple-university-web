<?php

namespace App\Http\Controllers;
use App\Models\Matkul;
use App\Models\Pendidik;
use App\Models\Activity;
use App\Models\Beasiswa;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman landing page";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $pendidik = Pendidik::all();
        $matkul = Matkul::all();
        return view('home', compact('matkul' , 'pendidik'));
    }
    public function dosen(){

        
        $pendidik = Pendidik::all();
        return view('dosen', compact('pendidik'));

    }
    public function matkul(){

        
        $matkul = Matkul::all();
        return view('matkul', compact('matkul'));
        
    }
    public function beasiswa(){

        
        $beasiswa = Beasiswa::all();
        return view('beasiswa', compact('beasiswa'));
        
    }
}
