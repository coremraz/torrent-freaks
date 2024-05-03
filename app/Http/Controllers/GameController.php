<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public static function index()
    {

        $game = self::formatGame(self::getGame());
        return view('game.index', compact('game'));
    }

    public static function getAllGames()
    {
        return DB::table('games')->paginate(15);
    }

    private static function getGame()
    {
        $url = url()->current();
        $game = explode('/', $url)[4];
        return DB::select('select * from games where url = ?', [$game]);
    }

    public static function findGame(Request $request)
    {
        $allGames = DB::table('games')
            ->where('title', 'like', '%' . $request->input('findGame') . '%')->paginate(15);

        $games = [];
        foreach ($allGames as $game) {
            $games[] = GameController::formatGame([$game]);
        }

        return view('home.index', compact('games', 'allGames'));
    }

    public static function filterGame(Request $request)
    {
        $allGames = DB::table('games')
            ->where('genre', 'like', '%' . $request->input('name') . '%')->paginate(15)->withQueryString();;

        $games = [];
        foreach ($allGames as $game) {
            $games[] = GameController::formatGame([$game]);
        }

        return view('home.index', compact('games', 'allGames'));

    }

    public static function formatGame($game)
    {

        $genres = explode(",", $game[0]->genre);
        $lang = explode(",", str_replace(" ", "", $game[0]->lang));
        $screenshots = explode(",", str_replace(" ", "", $game[0]->screenshots));

        return (object)[
            'title' => $game[0]->title,
            'path_title' => $game[0]->path_title,
            'cover' => $game[0]->cover,
            'description' => $game[0]->description,
            'info' =>
                (object)[
                    'release_date' => $game[0]->release_date,
                    'genre' => $genres,
                    'developer' => $game[0]->developer,
                    'version' => $game[0]->version,
                    'lang' => $lang,
                    'crack' => $game[0]->crack,
                ],
            'screenshots' => $screenshots,
            'download' => $game[0]->download,
            'url' => $game[0]->url,
        ];
    }
}
