<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('homePage.home.index');
    }
    public function game(){
        return view('homePage.game.game');
    }
    public function gameDetails($slug){
        $game = Game::where('slug',$slug)->first();
        return view('homePage.game.details',compact('game'));
    }
}
