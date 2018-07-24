<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller,
  Illuminate\Support\Facades\DB as DB,
  Illuminate\Http\Request;


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
    return view('leaderboards')->with('data',$data);
  }

}
