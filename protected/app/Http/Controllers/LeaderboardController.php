<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller,
  Illuminate\Support\Facades\DB as DB,
  Illuminate\Http\Request;


class LeaderboardController extends Controller
{

  public function topList(){
    $topList = DB::select(DB::raw("CALL score_read()"));
    return view('leaderboards')->with('toplists',$topList);
  }

}
