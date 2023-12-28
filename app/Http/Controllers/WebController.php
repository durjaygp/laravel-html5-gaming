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
            $userId = auth()->user()->id;
            $gameId = $request->game_id;

            // Check if the combination already exists
            $existingFavorite = FavoriteGames::where('user_id', $userId)
                ->where('game_id', $gameId)
                ->first();

            if ($existingFavorite) {
                return redirect()->back()->with('warning','Game is already in Your Favorite List');
            }

            // If not, save the new record
            $game = new FavoriteGames();
            $game->user_id = $userId;
            $game->game_id = $gameId;
            $game->save();

            return redirect()->back()->with('success','Game added to Your Favorite List');
        } else {
            return redirect()->route('login')->with('warning','Please Login First');
        }
    }


}
