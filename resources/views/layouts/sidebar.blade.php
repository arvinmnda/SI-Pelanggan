<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Data Pembeli
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('pelanggan') }}">Data Pelanggan</a>
                            <a class="nav-link" href="{{ route('konsumen') }}">Data Konsumen</a>
                            <a class="nav-link" href="{{ route('barang') }}">Data Barang</a>
                            <a class="nav-link" href="{{ route('jenistransaksi') }}">Data Jenis Transaksi</a>
                            <a class="nav-link" href="{{ route('riwayattransaksipelanggan') }}">Data Riwayat Transaksi Pelanggan</a>
                            <a class="nav-link" href="{{ route('riwayattransaksikonsumen') }}">Data Riwayat Transaksi Konsumen</a>
                            <a class="nav-link" href="{{ route('transaksipenjualan') }}">Data Transaksi Penjualan</a>
                            <a class="nav-link" href="{{ route('distributor') }}">Data Distributor</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Poin 
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('datapoin') }}">Data Poin</a>
                            <a class="nav-link" href="{{ route('penukaranpoin') }}">Data Penukaran Poin</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Pegawai dan pengguna 
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/pegawaidanpengguna">Data Pegawai dan Pengguna</a>
                        </nav>
                    </div> 
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as : {{ auth()->user()->nama }}</div>
                <br><small>{{ auth()->user()->level }}</small>
            </div>
        </nav>
    </div>