@props(['game'])

<div class="mb-4 d-flex w-auto flex-column m-1 align-items-center justify-content-center shadow z-n1" style="max-width: 45vh">
    <div class="w-auto d-flex align-items-center justify-content-center bg-card rounded-3 ">
        <div class="d-flex flex-column m-1  align-items-center justify-content-between">
            <a class="text-decoration-none" href="/games/{{$game->url}}"> <h1 class="mb-3 fs-3 text-header">{{$game->title}}</h1> </a>
            <a href="/games/{{$game->url}}">
            <img class="screenshot img-fluid rounded"
                 src={{ asset('games-files/' . $game->path_title . "/". $game->cover)}} alt={{$game->cover}}> </a>
            <div class="text-light d-flex flex-column align-items-start justify-content-center">
                <span class="text-center m-2 ms-4 me-4 mb-1 fs-6 "><b>Версия: </b>{{$game->info->version}}</span>
            </div>
        </div>
    </div>


</div>

