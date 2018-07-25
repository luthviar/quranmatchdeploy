<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller,
  Illuminate\Support\Facades\DB as DB,
  App\Http\Controllers\Leaderboard\LeaderboardListController as Leaderboard,
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
    if (Auth::user()){
      $leaderboard = new Leaderboard();
      $id = Auth::user()->id;
      $totalMatch = DB::table('score')->where('idUser','=',$id)->where('categorys','=',$request->gameType)->first();
      $fastest =  $request->moves;
      if($totalMatch == null){
        $match =0;
        $total =$request->moves;
      }else{
        $match = $totalMatch->totalmatch;
        $total = $totalMatch->totalmoves+$request->moves;
        if($totalMatch->fastestmoves < $fastest){
          $fastest = $totalMatch->fastestmoves;
        }
      }

      $totalMatch_now = $match + 1;
      DB::unprepared(DB::raw("CALL score_delete($id,$request->gameType,$match)"));
      DB::unprepared(DB::raw("CALL score_insert($id, $fastest, '00:00:00',$request->gameType,$totalMatch_now, $total)"));
    }
  }
}
