<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use Illuminate\Support\Facades\DB;

class PlayerApiController extends Controller
{
    //get all players including the columns id, first_name and second_name
    public function players(){

        //using raw sql
        $players = DB::select('select id, first_name, second_name 
                            from players 
                            order by id ASC');
                            
        return response()->json($players, 200);
        
    }

    //get a single player using id
    public function getPlayerById($id) {

        //using raw sql
        $player = DB::select('select * from players 
                            where id = ?', [$id]);
        
        if(count($player)){
            return response()->json(array('data'=>$player[0],'success'=>["status" => 1]), 200);
        }else{
            return response()->json(array('data'=>["message" => "Player not found!"],'success'=>["status" => 0]), 404);
        }
    }
}
