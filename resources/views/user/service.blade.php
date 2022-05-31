@extends('layouts.user.master')
 
 @section('content')

 <!-- Breadcrumb Section Begin -->
 <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Layanan Kami</h2>
                        <div class="breadcrumb__links">
                            <a href="{{url('/home')}}">Beranda</a>
                            <span>Layanan</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__img">
                            <img src="img/services/services-1.jpg" alt="">
                        </div>
                        <div class="services__item__text">
                            <h4><span>01.</span> Gadai Harian</h4>
                            <p>Layanan Gadai dengan jangka waktu harian</p>
                            <a href="{{url('/formgadai')}}">Ajukan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__img">
                            <img src="img/services/services-2.jpg" alt="">
                        </div>
                        <div class="services__item__text">
                            <h4><span>02.</span> Gadai Mingguan</h4>
                            <p>Layanan Gadai dengan jangka waktu mingguan</p>
                            <a href="{{url('/formgadai')}}">Ajukan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__img">
                            <img src="img/services/services-3.jpg" alt="">
                        </div>
                        <div class="services__item__text">
                            <h4><span>03.</span> Gadai Bulanan</h4>
                            <p>Layanan Gadai dengan jangka waktu bulanan</p>
                            <a href="{{url('/formgadai')}}">Ajukan Sekarang</a>
                        </div>
                    </div>
                </div>
               
               

            </div>
        </div>
    </section>
    <!-- Services End -->


    @endsection