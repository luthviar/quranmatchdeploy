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
        return view('welcome');
    }

    public function guestMode() {
        $quran = DB::table('qurans')->where('no_surat','=',rand(1,114))->limit(8)->get();

//        dd($quran);

        return view('main')->with('quran',$quran);
    }
}