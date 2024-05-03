@props(['game'])

<div class="d-flex flex-column m-1 align-items-center justify-content-center shadow z-n1">
    <h1 class="mb-3 text-header">{{$game->title}}</h1>
    <div class="d-flex align-items-center justify-content-center bg-card rounded-3">
        <div class="d-flex flex-column m-1  align-items-start justify-content-between">
            <img style="max-width: 60vh" class="screenshot img-fluid rounded"
                 src={{ asset('games-files/' . $game->path_title . "/". $game->cover)}} alt={{$game->cover}}>
        </div>
        <div class="text-light d-flex flex-column align-items-start justify-content-center w-auto">
            <span class="ms-4 me-4 mb-1 fs-5"><b>Дата выхода:</b> {{$game->info->release_date}}</span>
            <span class="ms-4 me-4 mb-1 fs-5"><b>Жанр:</b> @foreach ($game->info->genre as $genre) <a class="text-header text-decoration-none" href={{ route('genre', ['name' => $genre]) }}>{{$genre . " "}}</a>@endforeach</span>
            <span class="ms-4 me-4 mb-1 fs-5"><b>Разработчик:</b> {{$game->info->developer}}</span>
            <span class="ms-4 me-4 mb-1 fs-5"><b>Версия: </b>{{$game->info->version}}</span>
            <span class="ms-4 me-4 mb-1 fs-5"><b>Таблетка:</b> {{$game->info->crack}}</span>
            <span class="ms-4 me-4 mb-1 fs-5"><b>Языки:</b> @foreach ($game->info->lang as $lang) {{$lang . " "}}@endforeach </span>
        </div>
    </div>


</div>
</div>
