<header id="site_header">
    <nav class="navbar navbar-expand-sm navbar-light bg-light" id="site_nav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{'/img/dc-logo.png'}}" alt="" width="80">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbo"></div>
</header>
