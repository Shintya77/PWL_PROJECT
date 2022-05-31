 
 @extends('layouts.user.master')
 
   @section('content')

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Our Blog</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

 
 <!-- Blog Section Begin -->
 <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="blog__item">
                        <div class="blog__item__img">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h3><a href="./blog-details.html">Get Best Advertiser In Your Side Pocket</a></h3>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> 19th March, 2019</li>
                                <li><i class="fa fa-user"></i> John Smith</li>
                            </ul>
                            <p>One of my favourite things I like to watch is the bloopers and outtakes that are shown of
                                mistakes made during</p>
                            <a href="#" class="read__more">Continue Reading <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__img">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h3><a href="./blog-details.html">Internet Advertising Trends You Won T Be Disappointed</a></h3>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> 19th March, 2019</li>
                                <li><i class="fa fa-user"></i> John Smith</li>
                            </ul>
                            <p>More than 1 billion people frequent the Internet daily. Americans alone spent $69 billion
                                buying things online in</p>
                            <a href="#" class="read__more">Continue Reading <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__img">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h3><a href="./blog-details.html">Freelance Design Tricks How To Get Away With Murder</a></h3>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> 19th March, 2019</li>
                                <li><i class="fa fa-user"></i> John Smith</li>
                            </ul>
                            <p>More than 1 billion people frequent the Internet daily. Americans alone spent $69 billion
                                buying things online in</p>
                            <a href="#" class="read__more">Continue Reading <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__img">
                            <img src="img/blog/blog-4.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <h3><a href="./blog-details.html">Advertise No Matter If You Are Big Or Small</a></h3>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> 19th March, 2019</li>
                                <li><i class="fa fa-user"></i> John Smith</li>
                            </ul>
                            <p>More than 1 billion people frequent the Internet daily. Americans alone spent $69 billion
                                buying things online in</p>
                            <a href="#" class="read__more">Continue Reading <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog__pagination">
                        <a href="#"><i class="fa fa-long-arrow-left"></i> Pre</a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <h5>Search</h5>
                            <form action="#">
                                <input type="text" placeholder="Searching...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__categories">
                            <h5>Categories</h5>
                            <ul>
                                <li><a href="#">Finance <span>18</span></a></li>
                                <li><a href="#">Business <span>20</span></a></li>
                                <li><a href="#">Loan <span>07</span></a></li>
                                <li><a href="#">Consulting <span>22</span></a></li>
                                <li><a href="#">Credit <span>19</span></a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__recent">
                            <h5>Recent Post</h5>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/br-1.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>Promote With Postcards</h6>
                                    <p><i class="fa fa-clock-o"></i> 19th March, 2019</p>
                                </div>
                            </a>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/br-2.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>Bidding Directories</h6>
                                    <p><i class="fa fa-clock-o"></i> 19th March, 2019</p>
                                </div>
                            </a>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/br-3.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>Kook 2 Director Add Url</h6>
                                    <p><i class="fa fa-clock-o"></i> 19th March, 2019</p>
                                </div>
                            </a>
                        </div>
                        <div class="blog__sidebar__tags">
                            <h5>Popular Tag</h5>
                            <a href="#">Business</a>
                            <a href="#">Marketing</a>
                            <a href="#">Payment</a>
                            <a href="#">Travel</a>
                            <a href="#">Finance</a>
                            <a href="#">Videos</a>
                            <a href="#">Ideas</a>
                            <a href="#">Unique</a>
                            <a href="#">Music</a>
                            <a href="#">Key</a>
                        </div>
                        <div class="blog__sidebar__social">
                            <h5>Follow Us</h5>
                            <div class="blog__sidebar__social__links">
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google"><i class="fa fa-google"></i></a>
                                <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->

    @endsection