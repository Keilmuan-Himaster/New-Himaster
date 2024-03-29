<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('images/logo_kbm.png') }}" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block">Admin Himaster</a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item active ">
                    <a href="" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Master Data</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item">
                            <a href="{{route('tag.index')}}">Tag</a>
                            <a href="{{route('kategori.index')}}">Kategori</a>
                            <a href="{{route('struktur.index')}}">Struktur</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="{{ Route('berita.index') }}" class='sidebar-link'>
                        <i class="bi bi-newspaper"></i>
                        <span>Berita</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('buster.index')}}" class='sidebar-link'>
                        <i class="bi bi-check-all"></i>
                        <span>Buster</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('gallery.index')}}" class='sidebar-link'>
                        <i class="bi bi-card-image"></i>
                        <span>Galeri</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('anggota.index')}}" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Anggota</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('mahasiswa.index')}}" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Data Mahasiswa Siskom</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('inventaris.index')}}" class='sidebar-link'>
                        <i class="bi bi-book"></i>
                        <span>Inventaris Himaster</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('kalender.index')}}" class='sidebar-link'>
                        <i class="bi bi-calendar-day"></i>
                        <span>Kalender</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-bookmark-check"></i>
                        <span>Presensi Himaster</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item">
                            <a href="{{route('kegiatan.index')}}">Kegiatan</a>
                            <a href="{{route('kategori.index')}}">Rekapan</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-door-closed"></i>
                        <form action="{{ Route('logout') }}" method="post">
                            @csrf
                            <button class='btn' type="submit">
                                logout
                            </button>

                        </form>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
