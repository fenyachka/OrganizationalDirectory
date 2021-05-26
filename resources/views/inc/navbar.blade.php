<nav class="navbar navbar-expand-lg navbar-dark bg-dark  shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" href="/">ფიზიკური პირების სია </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('organizations') ? 'active' : ''}}" href="{{ route('organizations-index') }}">ორგანიზაციების სია</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
