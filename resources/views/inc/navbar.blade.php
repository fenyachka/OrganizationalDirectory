<nav class="navbar navbar-expand-lg navbar-dark bg-dark  shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
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
