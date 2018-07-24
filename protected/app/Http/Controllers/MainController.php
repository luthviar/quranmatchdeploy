<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use DB;
use Auth;
use Carbon\Carbon;
use Session;

class MainController extends Controller
{
    public function index(){
        return view('mainhome');
    }

    public function guestMode() {
        $quran = DB::table('qurans')->where('no_surat','=',rand(68,114))->limit(4)->get();



        return view('main')->with('quran',$quran);
    }

    public function guestModeEasy() {
        $quran = DB::table('qurans')->where('no_surat','=',rand(68,114))->limit(4)->get();



        return view('play2')->with('quran',$quran);
    }

    public function guestModeMedium() {
        $quran = DB::table('qurans')->where('no_surat','=',rand(68,114))->limit(8)->get();



        return view('play2')->with('quran',$quran);
    }

    public function guestModeHard() {
        $quran = DB::table('qurans')->where('no_surat','=',rand(68,114))->limit(10)->get();



        return view('play2')->with('quran',$quran);
    }
}