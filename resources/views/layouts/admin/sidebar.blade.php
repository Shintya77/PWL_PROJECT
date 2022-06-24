<nav class="sidebar sidebar-offcanvas" id="sidebar">
    {{-- <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('admin/template')}}/assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('admin/template')}}/assets/images/logo-mini.svg" alt="logo" /></a>
    </div> --}}
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
     <h1>SIGADAI</h1>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{asset('admin/template')}}/assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal"> {{ Auth::user()->name }}</h5>
              <span>Admin</span>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigasi</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/dasboard')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/nasabah')}}">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple"></i>
          </span>
          <span class="menu-title">Data Nasabah</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/barang')}}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Data Barang</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/gudang')}}">
          <span class="menu-icon">
            <i class="mdi mdi-package-variant-closed"></i>
          </span>
          <span class="menu-title">Data Gudang</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/pinjaman')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Data Pinjaman</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/pembayaran')}}">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Data Pembayaran</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/petugas')}}">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">Data Petugas</span>
        </a>
      </li>
      {{-- <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-bank"></i>
          </span>
          <span class="menu-title">Data ---</span>
          <i class="menu-arrow"></i>
        </a> --}}
        {{-- <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#cetak" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-animation"></i>
          </span>
          <span class="menu-title">Cetak Data</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="cetak">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('/nasabah/cetak_pdf')}}">Data Nasabah</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('/barang/cetak_pdf')}}">Data Barang</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('/pinjaman/cetak_pdf')}}">Struk Peminjaman</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('/pembayaran/cetak_pdf')}}">Struk Pembayaran</a></li>
          </ul>
        </div>
      </li>
      
    </ul>
  </nav>