@props(['game'])

<div class="flex flex-col justify-center items-center">
    <h2 class="text-header">Скачать {{$game->title}}:</h2>
    <div class="d-flex bg-card rounded-3">
        <button class="btn btn-success"><a class="link-dark text-decoration-none"
                href="{{asset('games-files/' . $game->path_title . "/". $game->download)}}" download>
                <span class="fs-3 fw-bold text-light">DOWNLOAD</span> <br> {{$game->title}} torrent</a>
        </button>
        <span class="m-4 fs-5">Расширение: .torrent</span>
    </div>

</div>
