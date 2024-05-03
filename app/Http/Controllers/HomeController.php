<?php

namespace App\Http\Controllers;

use App\Http\Controllers\GameController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index()
    {
        $allGames =  GameController::getAllGames();
        $games = [];
        foreach ($allGames as $game) {
            $games[] = GameController::formatGame([$game]);
    }

        return view('home.index', compact('games', 'allGames'));
    }


}
