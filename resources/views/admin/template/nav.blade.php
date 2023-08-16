<nav class="navbar navbar-expand-sm navbar-light bg-primary mb-4 sticky-top">
    <div class="container">
        <span class="navbar-brand text-light"><img src="{{ asset('icon.jpg') }}" height="40" width="40"></span>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light mx-2 fw-bold" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light mx-2 fw-bold" href="{{ route('siswa') }}">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light mx-2 fw-bold" href="{{ route('guru') }}">Guru</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li> --}}
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
            </form>
        </div>
    </div>
</nav>
