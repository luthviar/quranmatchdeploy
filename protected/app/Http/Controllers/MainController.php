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

        $quran = DB::table('qurans')->where('no_surat','=',rand(1,114))->limit(8)->get();
        $type = "guestMode";
        return view('play2')->with('quran',$quran)->with('type',$type);
    }

    public function modeEasy() {
        $quran = DB::table('qurans')->where('no_surat','=',rand(78,114))->limit(4)->get();
        $type = "1";


        return view('play2')->with('quran',$quran)->with('type',$type);
    }

    public function modeMedium() {
        $quran = DB::table('qurans')->where('no_surat','=',rand(67,114))->limit(8)->get();
        $type = "2";


        return view('play2')->with('quran',$quran)->with('type',$type);
    }

    public function modeHard() {
        $quran = DB::table('qurans')->where('no_surat','=',rand(2,114))->limit(10)->get();
        $type = "3";


        return view('play2')->with('quran',$quran)->with('type',$type);
    }
}
