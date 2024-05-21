<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="{{ route('home') }}">Vai al sito</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <span class="nav-link">{{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>