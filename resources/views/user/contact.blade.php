 
 @extends('layouts.user.master')
 
 @section('content')


 <!-- Breadcrumb Section Begin -->
 <div class="breadcrumb-option contact-breadcrumb set-bg" data-setbg="img/breadcrumb/contact-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                        <h2>Kontak Kami</h2>
                        <div class="breadcrumb__links">
                            <a href="{{url('/home')}}">Beranda</a>
                            <span>Kontak Kami</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->


    
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__address__item">
                        <h4>Malang</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Jl Soekarno Hatta No 10 <br />Jawa Timur
                            </li>
                            <li><i class="fa fa-phone"></i> (+62) 345-678-910</li>
                            <li><i class="fa fa-envelope"></i> sigadai.info@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__address__item">
                        <h4>Surabaya</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Jl Hassanudin No 15 <br />Jawa Timur</li>
                            <li><i class="fa fa-phone"></i> (+62) 345-678-910</li>
                            <li><i class="fa fa-envelope"></i> sigadai.info@gamil.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__address__item">
                        <h4>Sidoarjo</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Jl Ahmad Yani No 10 <br />Jawa Timur</li>
                            <li><i class="fa fa-phone"></i> (+62) 345-678-910</li>
                            <li><i class="fa fa-envelope"></i> sigadai.info@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    
    @endsection