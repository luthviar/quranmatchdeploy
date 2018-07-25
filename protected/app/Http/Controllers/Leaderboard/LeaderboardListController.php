<?php

namespace App\Http\Controllers\Leaderboards;

/**
 * @author Faisal Rizky <isalriz9@gmail.com>
 * @copyright 2018 QuranMatch
 */

use App\Http\Controllers\Controller,
  Illuminate\Support\Facades\DB as DB,
  Illuminate\Http\Request;


class LeaderboardListController extends Controller
{
  public $id;
  public $username;
  public $totalMoves;
  public $totalMatch;
  public $totalTimes;
  public $fastestTimes;
  public $fastestMoves;
  public $category;
  public $createdat;
  public $updatedat;
  public $exist;

   public function __construct($id = false)
   {
     $this->id = $id;
     if($id){
         $item = DB::table('score')
           ->where('id', $id)
           ->first();
             if($item){
                 $this->id           	      = $item->id;
                 $this->username           	= $item->username;
                 $this->totalMoves     	    = $item->totalmoves;
                 $this->totalMatch    	    = $item->totalmatch;
                 $this->totalTimes     	    = $item->totaltimes;
                 $this->fastestMoves     	  = $item->fastestmoves;
                 $this->fastestTimes     	  = $item->fastestimes;
                 $this->category        	  = $item->categorys;
                 $this->createdat        	  = $item->created_at;
                 $this->updatedat         	= $item->updated_at;
                 $this->exist        	      = true;
             }
             else{
                 $this->exist    = false;
             }
     }
   }


}




}
