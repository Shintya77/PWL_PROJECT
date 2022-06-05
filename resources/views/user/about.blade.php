 
@extends('layouts.user.master')
@section('content')
 
 
 <!-- active -->
 <!-- <li class="active"><a href="{{url('/about')}}">About</a></li> -->

  <!-- Breadcrumb Section Begin -->
  <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Tentang Kami</h2>
                        <div class="breadcrumb__links">
                            <a href="{{url('/home')}}">Beranda</a>
                            <span>Tentang Kami</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
 
    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about__img">
                            <img src="img/about/about.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=Ol7ofq88KZQ"
                           
                                class="play-btn video-popup"><img src="img/about/video-play.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="about__text">
                            <h2>Selamat Datang di Si Gadai.</h2>
                            <p>
                             Gadai MASPT. MAS Agung Sejahtera (MAS) dengan merk dagang “Gadai MAS” merupakan perusahaan pergadaian swasta berskala nasional yang memiliki sejarah dan pengalaman panjang di bidang pergadaian. Gadai MAS telah menjalankan bisnis pergadaian sejak bulan Maret 2014. Perusahaan didirikan di Jakarta berdasarkan Akte Notaris Rini Handayani SH. No. 05 tanggal 14 Februari 2014, serta telah terdaftar oleh Badan Otoritas Jasa Keuangan (OJK) dengan nomor S-1857/NB.111/201 sebagai perusahaan pergadaian emas swasta yang resmi dan terpercaya.Semangat untuk mewujudkan pertumbuhan ekonomi merupakan satu komitmen kami dalam menjalankan setiap kiprahnya. Mempertimbangkan kebutuhan masyarakat yang semakin meningkat. Gadai MAS berinovasi untuk memberikan solusi keuangan yang mudah dan efektif melalui jasa gadai terutama emas. Seiring dengan berjalannya waktu, Gadai MAS terus melakukan upaya perbaikan baik dari segi layanan program, maupun SDM. 
                            </p>
                            <a href="{{url('/contact')}}" class="primary-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="about__item">
                        <h4>Visi</h4>
                        <p>
                        Menjadi perusahaan gadai swasta terbaik pilihan masyarakat di indonesia
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="about__item">
                        <h4>Misi</h4>
                        <p>Menyediakan jasa layanan gadai terbaik, serta turut aktif meningkatkan produktivitas dan kesejahteraan masyarakat</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="about__item">
                        <h4>Tujuan</h4>
                        <p>
                        Mengikuti pelaksanaan dan program pemerintah di bidang ekonomi melalui penyaluran pinjaman uang atas dasar hukum gadai.
                         Mencegah praktik pegadaian gelap atau pinjaman tidak wajar lainnya. Gadai syariah memiliki efek jaring pengaman sosial, 
                         aitu peminjamannya bebas bunga
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- History Section Begin -->
    <!-- <section class="history spad set-bg" data-setbg="img/history/history-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our History</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting has been the</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="history__img">
                        <img src="img/history/history-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="history__text nice-scroll">
                        <div class="history__item">
                            <div class="history__indicator"></div>
                            <span>25th, March 2004</span>
                            <h4>Open a company</h4>
                            <p>Paypopup.com is a four year old online advertising complex which consists thousands of
                                specialized websites in providing unique</p>
                        </div>
                        <div class="history__item">
                            <div class="history__indicator"></div>
                            <span>12th, July 2012</span>
                            <h4>Opened another branch in london</h4>
                            <p>Paypopup.com is a four year old online advertising complex which consists thousands of
                                specialized websites in providing unique</p>
                        </div>
                        <div class="history__item">
                            <div class="history__indicator"></div>
                            <span>25th, March 2019</span>
                            <h4>Opening more branches in other countries</h4>
                            <p>Paypopup.com is a four year old online advertising complex which</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- History Section End -->

    <!-- Choose Section Begin -->
    <section class="choose spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Mengapa Orang Harus Memilih Kami</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="choose__item">
                        <img src="img/choose/choose-1.png" alt="">
                        <h5>Cepat dan Mudah</h5>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="choose__item">
                        <img src="img/choose/choose-2.png" alt="">
                        <h5>Jaminan Keamanan</h5>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="choose__item">
                        <img src="img/choose/choose-3.png" alt="">
                        <h5>Persetujuan</h5>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="choose__item">
                        <img src="img/choose/choose-4.png" alt="">
                        <h5>Suku Bunga Rendah</h5>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="choose__item">
                        <img src="img/choose/choose-5.png" alt="">
                        <h5>Keamanan Pribadi</h5>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="choose__item">
                        <img src="img/choose/choose-6.png" alt="">
                        <h5>Pencairan Cepat</h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose Section End -->

    
   
    
    @endsection