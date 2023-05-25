<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\User;
use App\Models\Matkul;
use App\Models\Activity;
use App\Models\Profile;
use App\Models\Beasiswa;
use App\Models\Pendidik;
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
    public function admin(){
        // Hitung data pendidik
        $jmlhuser = User::count();
        $jmlhberita = News::count();
        $jmlhpendidik = Pendidik::count();
        $pendidik = Pendidik::latest()->take(5)->get();
        $berita = News::latest()->take(5)->get();
        $aktivitasharian = Activity::latest()->take(5)->get();
        return view('admin.index' , compact('jmlhuser', 'jmlhberita','jmlhpendidik', 'aktivitasharian','pendidik','berita'));
    }
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
        $profile = Profile::all();

        return view('home', compact('matkul' , 'pendidik','profile'));
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
