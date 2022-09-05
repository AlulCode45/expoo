<nav id="sidebar" class="bg-main">
    <div class="sidebar-header d-flex">
        <h3>SMKN 4 Bojonegoro</h3>
        <a class="text-white ms-auto text-decoration-none  d-md-none d-lg-none"
            id="close-sidebar"><span>&times;</span></a>
    </div>
    <ul class="list-unstyled">
        @if (Request::is('siswa/*') or Request::is('siswa'))
            <li>
                <a href="/siswa" class="nav-link {{ Request::is('siswa') ? 'active' : '' }}" aria-current="page">
                    <i class="bi me-2 fa fa-home text-white"></i>
                    Semua Kelas
                </a>
            </li>
            <li>
                <a href="/siswa/semua-tugas"
                    class="nav-link {{ Request::is('siswa/semua-tugas') ? 'active' : '' }} link-light">
                    <i class="bi me-2 fa fa-flag text-white"></i>
                    Semua Tugas
                </a>
            </li>

            <li>
                <a href="#" class="nav-link link-light">
                    <i class="bi me-2 fa fa-book text-white"></i>
                    Jadwal Pelajaran
                </a>
            </li>
        @elseif (Request::is('guru/*') or Request::is('guru'))
            <li>
                <a href="/guru" class="nav-link link-light">
                    <i class="bi me-2 fa fa-home text-white"></i>
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('guru.manage_classes') }}" class="nav-link link-light">
                    <i class="bi me-2 fa fa-tasks text-white"></i>
                    Kelola Kelas
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('guru.manage_students') }}" class="nav-link link-light">
                    <i class="bi me-2 fa fa-users text-white"></i>
                    Kelola Siswa
                </a>
            </li> --}}
            <li>
                <a href="#" class="nav-link link-light">
                    <i class="bi me-2 fa fa-book text-white"></i>
                    Jadwal Mengajar
                </a>
            </li>
        @endif
        <hr class="text-white">
        <li>
            <a href="/logout" class="nav-link link-light fw-normal">
                <i class="bi me-2 fa fa-sign-out text-white"></i>
                Logout
            </a>
        </li>
    </ul>
</nav>
