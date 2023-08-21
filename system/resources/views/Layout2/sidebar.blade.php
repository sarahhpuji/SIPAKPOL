<aside class="main-sidebar sidebar-dark-primary elevation-4">
    @php
        
        function checkRouteActive($route)
        {
            if (Route::current()->uri == $route) {
                return 'active';
            }
        }
    @endphp
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link ">
        <img src="{{ url('public') }}/tempelate/dist/img/sipakpol.png" class="brand-image" style="opacity: 1">
        <br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->nama }}</a>
                <a href="#" class="d-block">NIP : {{ Auth::user()->nip }}</a>
                <a href="#" class="d-block">TMT Fungsional : {{ Auth::user()->tmtfungsional }}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">NAVIGASI MENU</li>
                <li class="nav-item">
                    <a href="{{ url('Dosen/dashboard') }}" class="nav-link {{ checkRouteActive('Dosen/dashboard') }}">
                        <i class="nav-icon fa fa-home"></i>
                        <p class="text">DASHBOARD</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('Dosen/pengajuan') }}" class="nav-link {{ checkRouteActive('Dosen/pengajuan') }}">
                        <i class="far fa-file nav-icon"></i>
                        <p>PENGAJUAN BARU</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('Dosen/riwayat') }}" class="nav-link {{ checkRouteActive('Dosen/riwayat') }}">
                        <i class="fas fa-archive nav-icon"></i>
                        <p>RIWAYAT PENGAJUAN</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('Dosen/template') }}" class="nav-link {{ checkRouteActive('Dosen/template') }}">
                        <i class="nav-icon fa fa-download"></i>
                        <p class="text">TEMPLATE PENGAJUAN</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
