 
  <!-- Offcanvas Menu Begin -->
  <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__search">
            <i class="fa fa-search search-switch"></i>
        </div>
        <div class="offcanvas__logo">
            <a href="{{url('/home')}}"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="active"><a href="{{url('/home')}}">Beranda</a></li>
                <li><a href="{{url('/about')}}">Tentang Kami</a></li>
                <li><a href="{{url('/service')}}">Layanan</a></li>
                <li><a href="{{url('/formgadai')}}">Pengajuan</a></li>
                
                <!-- <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./services.html">Features</a></li>
                        <li><a href="./services-details.html">Services Details</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul> -->
                </li>
                <li><a href="{{url('/contact')}}">Kontak</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget">
            <li><i class="fa fa-map-marker"></i> Malang , Jl Soekarno Hatta No 10 , Jawa Timur</li>
            <li><i class="fa fa-phone"></i> (123) 456-78-910</li>
            <li><i class="fa fa-envelope"></i> sigadai@gmail.com</li>
        </ul>
        <div class="offcanvas__language">
           
            <span> {{ Auth::user()->name }}</span>
            <i class="fa fa-angle-down"></i>
            <ul>
                <li><a href="#">Pengaturan</a></li>
                <li><form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <button type="submit" class="btn btn-default btn-flat"> Log Out</button>
                </form></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

 
 <!-- Header Section Begin -->
 <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-map-marker"></i>Malang , Jl Soekarno Hatta No 10 , Jawa Timur </li>
                            <li><i class="fa fa-phone"></i> (123) 456-78-910</li>
                            <li><i class="fa fa-envelope"></i> sigadai@gmail.com</li>
                        </ul>
                    </div>
                        <div class="col-lg-3">
                        <div class="header__top__language">
                            <span> {{ Auth::user()->name }}</span>
                            <i class="fa fa-angle-down"></i>
                            <ul>
                                <li><a href="#">Pengaturan</a></li>
                                <li><form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                    <button type="submit" class="btn btn-default btn-flat"> Log Out</button>
                                </form></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{url('/home')}}"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{url('/home')}}">Beranda</a></li>
                                <li><a href="{{url('/about')}}">Tentang Kami</a></li>
                                <li><a href="{{url('/service')}}">Layanan</a></li>
                                

                                <!-- active -->
                                <li><a href="{{url('/formgadai')}}">Pengajuan</a></li>
                                <!-- <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./services.html">Features</a></li>
                                        <li><a href="./services-details.html">Services Details</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="{{url('/contact')}}">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->