@extends("layouts.base")


@section("content")
    <div class="d-flex flex-column">
        <x-game-list :games="$games" ></x-game-list>
        <x-game-pagination :games="$allGames"></x-game-pagination>
    </div>
@endsection
