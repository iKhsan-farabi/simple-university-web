<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    //
    public function index(){
        $userid = Auth::id();
        $aktivitas = Activity::where('user_id' ,$userid)->get();
        return view('activity' , compact('aktivitas'));
    }
}
