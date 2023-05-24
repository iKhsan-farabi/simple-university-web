<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Activity;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function lihat(){
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman daftar berita";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $news = News::all();
        return view('news' , compact('news'));
     }
    public function index()
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman daftar berita";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $news = News::all();
        return view('admin/news.index' , compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman buat berita baru";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        return view('admin/news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuat data berita baru";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image' => 'nullable'
        ]);
    

        $news = new News();
        $news->title = $request->input('title');
        $news->slug = Str::slug($request->input('slug'));
        $news->content = $request->input('content');
        $news->author = $request->input('author');
        $news->save();

        return Redirect::route('news.create')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka berita tujuan";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
    $news = News::where('slug', $slug)->firstOrFail();
        $similarpost = News::all();
        return view('admin/news.show' , compact('news','similarpost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($news)
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} membuka halaman edit data berita";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $news = News::findOrFail($news);
        return view('admin/news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $news)
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} merubah data berita";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'author' => 'required'
        ]);
    
        $news = News::findOrFail($news); // Mengambil data news berdasarkan ID
        $news->update($validatedData); // Melakukan update data pendidik dengan data yang valid
    
        return Redirect::route('news.index')->with('success', 'Data news berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($news)
    {
        //
        if(Auth::check()){
            $user = Auth::user();
            $activities = "Pengguna dengan nama {$user->name} menghapus data berita";

            Activity::create([
                'user_id' => auth()->id(),
                'activity' => $activities,
            ]);
    
        }
        $news = News::findOrFail($news);
        $news->delete();

        return Redirect::route('news.index')->with('success', 'Data News Berhasil Dihapus');
    }
}
