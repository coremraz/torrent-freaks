@extends('layouts.base')

@section('content')
    <x-game-info-block
        :game="$game">
    </x-game-info-block>
    <x-game-description>
        {!! $game->description !!}
    </x-game-description>

    <x-game-screenshots title='{{$game->title}}'>
        @foreach($game->screenshots as $screenshot)
            <img class="screenshot img-fluid w-25 m-2 rounded"
                 src='{{ asset('games-files/' . $game->path_title . "/screenshots/". $screenshot)}}'
                 alt="скриншот {{$game->title}}">
        @endforeach
    </x-game-screenshots>
    <x-game-download :game="$game">

    </x-game-download>

@endsection()

