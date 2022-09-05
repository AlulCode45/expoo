<nav class="navbar navbar-expand-lg bg-white px-4">
    <div class="container">
        <button type="button" id="sidebarCollapse" class="btn bg-main bottom-0">
            <i class="fas fa-align-left text-white"></i>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                {{-- <i class="nav-link fa fa-bell my-auto me-2 position-relative">
                    <span class="position-absolute  translate-middle badge rounded-pill bg-danger">
                        99+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </i> --}}
                <p class="nav-link my-auto border-start border-dark" href="#">
                    @if (Request::is('guru') or Request::is('guru/*'))
                        {{ Auth::guard('teacher')->user()->fullname }} <span class="text-primary">( Guru )</span>
                    @elseif (Request::is('siswa') or Request::is('siswa/*'))
                        {{ Auth::guard('student')->user()->fullname }} <span class="text-primary">( Siswa )</span>
                    @endif
                </p>

                <div class="dropdown dropstart">
                    <a class="nav-link my-auto" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                        <img src="{{ asset('assets/image/user.jpg') }}" class="rounded rounded-circle" width="50"
                            height="50" alt="">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Akun Saya</a></li>
                        <li><a class="dropdown-item" href="/logout">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
