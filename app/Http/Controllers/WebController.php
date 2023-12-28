<?php

namespace App\Http\Controllers;

use App\Models\FavoriteGames;
use App\Models\Game;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;


class WebController extends Controller
{
    public function index(){
        return view('homePage.home.index');
    }
    public function game(){
        return view('homePage.game.game');
    }
    public function favoriteGame(){
        return view('homePage.game.mygame');
    }
    public function gameDetails($slug){
        $game = Game::where('slug',$slug)->first();
        return view('homePage.game.details',compact('game'));
    }

    public function favoriteSave(Request $request){
        if(Auth::check()) {
            $game = new FavoriteGames();
            $game->user_id = auth()->user()->id;
            $game->game_id = $request->game_id;
            return redirect()->back()->with('success','Game added to Your Favorite List');
        }else{
            return redirect()->route('login')->with('error','Please Login First');
        }
    }

}
