 
 @extends('layouts.user.master')
 
 @section('content')
 
 <!-- Hero Section Begin -->
 <section class="hero set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero__text">
                        <h2>Mengatasi Masalah Tanpa Masalah</h2>
                        <p>Menerima Gadai dimana pun, kapan pun dengan pelayanan optimal dan sepenuh hati</p>
                        <a href="{{url('/home')}}" class="primary-btn">Mulai</a>
                        <a href="{{url('/service')}}"  class="primary-btn howit-btn">Jelajahi</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="hero__form">
                        <h3>Ajukan Pinjaman Yang Anda Butuhkan</h3>
                        <form action="#">
                            <div class="input-list">
                                <div class="input-list-item">
                                    <p>Jumlah Uang:</p>
                                    <input type="text">
                                </div>
                                <div class="input-list-item">
                                    <p>Jangka Waktu:</p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="input-full-width">
                                <p>Barang Gadai:</p>
                                <input type="text">
                            </div>
                            <div class="input-list last">
                                <div class="input-list-item">
                                    <p>Nama:</p>
                                    <input type="text">
                                </div>
                                <div class="input-list-item">
                                    <p>Nomor Telephone:</p>
                                    <input type="text">
                                </div>
                            </div>
                            <button type="submit"  class="site-btn" ><a href="{{url('/formgadai')}}"> Ajukan Penggadaian Anda Sekarang </a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


     <!-- Home About Begin -->
     <section class="home-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h2>Ribuan Pelanggan Mempercayai Perusahaan Kami</h2>
                            <h3>Melayani Gadai Emas</h3>
                                <p>Anda bebas memilih layanan gadai emas sesuai dengan kebutuhan </p>

                          
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="home__about__item">
                                    <h4>Visi</h4>
                                    <p>Menjadi perusahaan gadai swasta terbaik pilihan masyarakat di indonesia</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="home__about__item">
                                    <h4>Misi</h4>
                                    <p>Menyediakan jasa layanan gadai terbaik, serta turut aktif meningkatkan produktivitas dan kesejahteraan masyarakat </p>

                                </div>
                            </div>
                        </div>
                        <a href="{{url('/about')}}" class="primary-btn">learn More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="home__about__img">
                        <img src="img/about/home-about.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About End -->

    







    <!-- Counter Begin -->
    <div class="counter spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter__item">
                        <img src="img/counter/counter-1.png" alt="">
                        <div class="counter__number">
                            <h2 class="counter-add">1000</h2>
                        </div>
                        <p>Berhasil Memberi Pinjaman</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter__item">
                        <img src="img/counter/counter-2.png" alt="">
                        <div class="counter__number">
                            <h2 class="counter-add">99</h2>
                            <span>%</span>
                        </div>
                        <p>Kepuasaan Pelanggan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter__item">
                        <img src="img/counter/counter-3.png" alt="">
                        <div class="counter__number">
                            <h2 class="counter-add">10</h2>
                            <span>+</span>
                        </div>
                        <p>Partner Kami</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter__item">
                        <img src="img/counter/counter-4.png" alt="">
                        <div class="counter__number">
                            <h2 class="counter-add">20</h2>
                            <span>+</span>
                        </div>
                        <p>Sertifikat Penghargaan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->


    

    @endsection