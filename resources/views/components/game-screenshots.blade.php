@props(["title"])
<div class="game-screenshots d-flex flex-column justify-content-center align-items-center mb-3">
    <h2 class="w-80 text-2xl font-bold mb-2 text-header">Скриншоты {{$title}}:</h2>
    <div class="d-flex justify-content-center align-items-cente">
        {{$slot}}
    </div>
</div>
