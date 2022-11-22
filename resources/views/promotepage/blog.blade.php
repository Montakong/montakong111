@extends('layouts.promote')
@section('content')

<div id="mobile-menu-wrap"></div>
      
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                           
                           
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">THAI</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="/login"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./">Home</a></li>
                            <li><a href="./shop">Shop</a></li>
                           
                            <li><a href="./blog">Blog</a></li>
                            <li><a href="./contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>ราคาเมนูอาหารตามสั่ง</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">เมนูไข่</li>
                            <li data-filter=".fresh-meat">เมนูผัด</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="promote/img/featured/kapao.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">ข้าวกะเพราหมูสับ</a></h6>
                            <h5>30.00 บาท</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="promote/img/featured/mush.jpeg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">ข้าวผัด</a></h6>
                            <h5>30.00 บาท</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="promote/img/featured/Patmo.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">ผัดมะกะโรนี</a></h6>
                            <h5>30.00 บาท</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="promote/img/featured/Eggdown.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">ไข่ดาว</a></h6>
                            <h5>20.00 บาท</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="promote/img/featured/piggow.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">ข้าวคะน้าหมูกรอบ</a></h6>
                            <h5>30.00 บาท</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="promote/img/featured/Eggstar.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">ไข่เจียว  </a></h6>
                            <h5>20.00 บาท</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="promote/img/featured/pat.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">ผัดซีอิ๊ว</a></h6>
                            <h5>30.00 บาท</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="promote/img/featured/pathot.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">ผัดพริกแกง</a></h6>
                            <h5>30.00 บาท</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/kapao.jpg" alt="">
                                        
                                    </div>
                                     <div class="latest-product__item__text">
                                     <h6>ข้าวกะเพราหมูสับ</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/mush.jpeg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ข้าวผัด</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-5.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ผัดพริกแกง</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/Eggstar.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ข้าวคะน้าหมูกรอบ</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-9.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>หมูทอดกระเทียม</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-11.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ผัดมะกะโรนี</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/SUKI.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>สุกี้ทะเล</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-15.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ผัดไท</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/Eggstar.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ข้าวไข่เจียว</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-18.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ผัดวุ้นเส้น</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-19.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>แกงจืด</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-20.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ต้มยำกุ้ง</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-21.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ผัดมาม่า</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-22.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>เส้นหมี่ผัดผักกระเฉด</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-23.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>แกงส้ม</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-24.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ไข่ขยี้</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-25.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>แกงเขียวหวาน</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="promote/img/featured/ip-26.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>ผัดพริกสด</h6>
                                        <span>30.00 บาท</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

  

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                        <h5><a href="#">ที่อยู่ทางร้านและเบอร์ติดต่อ</h5>
                            <li>Address: บางเลนซอย 2 </li>
                            <li>ต.บางเลน อ.บางใหญ่ จ.นนทบุรี </li>
                            <li>เบอร์โทร 02-789-9999</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
@stop