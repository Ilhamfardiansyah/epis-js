<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

            @php
                $aplikasi = App\Models\T_Aplikasi::latest()->first();
            @endphp

            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>

        </div><a class="navbar-brand" href="/">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="{{ $aplikasi->logo ?? asset('assets/img/logo_puspom.png') }}" alt=""
                    width="45" /><span class="font-sans-serif">EPIS</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Menu
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}"
                        role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-calendar-alt"></span></span><span
                                class="nav-link-text ps-1">Beranda</span>
                        </div>
                    </a>
                    <a class="nav-link nav-link {{ Request::is('dashboard/export') ? 'active' : '' }}"
                        href="{{ route('export') }}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Export To
                                iDesign</span>
                        </div>
                    </a>
                    {{-- Input anggota --}}
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">
                            Input
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link {{ Request::is('dashboard/pegawai') ? 'active' : '' }}"
                        href="{{ route('pegawai.create') }}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user"></span></span><span class="nav-link-text ps-1">
                                Input Anggota
                            </span>
                        </div>
                    </a>
                    <a class="nav-link {{ Request::is('dashboard/register') ? 'active' : '' }}"
                        href="{{ url('dashboard/register') }}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user-plus"></span></span><span class="nav-link-text ps-1">
                                Add User</span>
                        </div>
                    </a>
                    {{-- Laporan --}}
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Laporan
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <a class="nav-link {{ Request::is('dashboard/data/pegawai') ? 'active' : '' }}"
                        href="{{ url('dashboard/data/pegawai') }}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-users"></span></span><span class="nav-link-text ps-1">
                                Anggota</span>
                        </div>
                    </a>
                    <a class="nav-link {{ Request::is('dashboard/cetak/data') ? 'active' : '' }}"
                        href="{{ url('dashboard/cetak/data') }}" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-print"></span></span><span class="nav-link-text ps-1">
                                Cetak</span>
                        </div>
                    </a>
        </div>
    </div>
</nav>
