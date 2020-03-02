<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PlayerController extends Controller
{

    //shows list of all players
    public function list(){

        $request = Request::create('/api/players', 'GET');
        $players = json_decode(Route::dispatch($request)->getContent());

        return view('player.list', [
            'players' => $players,
        ]);
    }

    //shows stats of a single player
    public function showPlayer($id){

        $request = Request::create('/api/player/'.$id, 'GET');
        $response = json_decode(Route::dispatch($request)->getContent());

        $success = $response->success;
        $status = $success->status;
   
        if($status == 1){
            $player = $response->data;
            
            return view('player.individual', [
                'player' => $player,
            ]);
        }else{
            $message = $response->data;
            
            return view('player.nodata', [
                'message' => $message,
            ]);
        }
        
    }
}
