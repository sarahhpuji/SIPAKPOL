@php
    use Illuminate\Support\Facades\Auth;
    use App\Models\Skpengajuan;
    $id = Auth::guard('dosen')->user()->id;
    $dataPengajuan = Skpengajuan::where('id_dosen', $id)->get();
    
@endphp

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-danger navbar-badge">{{ count($dataPengajuan) }} </span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                @foreach ($dataPengajuan as $not)
                    <a href="{{ url('Dosen/riwayat') }}" class="dropdown-item">

                        <div class="media">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    SK Pengajuan sudah ada
                                    <span class="float-right text-sm text-danger"></span>
                                </h3>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>{{ $not->updated_at }}
                                </p>
                            </div>
                        </div>

                    </a>
                    <div class="dropdown-divider"></div>
                @endforeach
                @if (count($dataPengajuan) != 0)
                @else
                    <a href="#" class="dropdown-item dropdown-footer">Belum ada notifikasi</a>
                @endif
            </div>
        </li>

        <a href="{{ url('logout') }}" class="dropdown-item mt-1">
            <i class="fa fa-power-off"></i>
        </a>

    </ul>
</nav>
