<nav class="navbar navbar-expand-xxl navbar-dark bg-card w-100">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Torrent Freaks</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/games">Games</a>
                </li>
            </ul>
            <form class="d-flex" method="get" action="{{ route('search') }}">
                <input class="form-control me-2" type="search" name="findGame" placeholder="Поиск игры" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Найти</button>
            </form>
        </div>
    </div>
</nav>
