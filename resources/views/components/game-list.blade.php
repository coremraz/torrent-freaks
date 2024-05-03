@props(['games'])

<div class="d-flex align-items-start row">
    @foreach($games as $game)
        <x-game-card :game="$game"/>
    @endforeach

</div>
