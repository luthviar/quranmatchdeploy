<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller,
  Illuminate\Support\Facades\DB as DB,
  App\Http\Controllers\Leaderboard\LeaderboardsController as Leaderboard,
  Illuminate\Http\Request;

use Response;
use Auth;

class LeaderboardController extends Controller
{

  public function topList(){
    $data = [
    $fastestMoves = DB::select(DB::raw("CALL score_read_fastest_moves()")),
    $fastestTimes = DB::select(DB::raw("CALL score_read_fastest_times()")),
    $totalMatch = DB::select(DB::raw("CALL score_read_total_match()")),
    $totalTimes = DB::select(DB::raw("CALL score_read_total_times()")),
    $totalMoves = DB::select(DB::raw("CALL score_read_total_moves()")),
    ];

    $data2 = DB::table('score')->limit(20)->get();

    return view('scoreboard')->with('data',$data2);
  }

  public function result(Request $request){
    $sen['success'] = true;
    $sen['result'] = $request->toArray();
    If (Auth::user()){
      $leaderboard = new Leaderboard(Auth::user()->id);
      if(!($leaderboard->exist)){
          $email =Auth::user()->id;
          DB::unprepared(DB::raw("CALL score_insert('$email','$request->moves','00:00:00','$request->gameType')"));
      }
    }
  }



}
