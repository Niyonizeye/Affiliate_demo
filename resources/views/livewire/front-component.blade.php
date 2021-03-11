<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0
}

.box {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}

.our-services {
    margin-top: 45px;
    padding-bottom: 30px;
    padding: 0 60px;
    min-height: 198px;
    text-align: center;
    border-radius: 10px;
    background-color: #fff;
    transition: all .4s ease-in-out;
    box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
}

.our-services .icon {
    margin-bottom: -21px;
    transform: translateY(-50%);
    text-align: center
}
.icon img{
    width:50px;
    height:50px;
}
.our-services:hover h4,
.our-services:hover p {
    color: #fff
}

.speedup:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #fb0054 0%, #f55b2a 100%)
}

.settings:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #34b5bf 0%, #210c59 100%)
}

.privacy:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #3615e7 0%, #44a2f6 100%)
}

.backups:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #fc6a0e 0%, #fdb642 100%)
}

.ssl:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #8d40fb 0%, #5a57fb 100%)
}

.database:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #27b88d 0%, #22dd73 100%)
}
.cover__Text b{
    position: absolute;
	left: 0;
	bottom:0;
    background: rgb(0, 0, 0); /* Fallback color */
    background: rgba(0, 0, 0, 0.6); /* Black background with 0.5 opacity */
    color: #f1f1f1;
    width: 100%;
    padding:20px;
    font-size:20px;
}
.AcceptableHeader{
    margin-left:5%;
    margin-top:2%;
}
.well{
    background-color: blue;
    opacity:1;
}
.text-uppercase{
    color:white;
}
</style>
<div>
    {{-- <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
    <!-- start of banner -->
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Join Muhahe Affiliate today</h1>
                        <p>START EARNING AS SOON AS YOU SET UP YOUR ACCOUNT WITH US.</p>
                        <a href="#" class="primary-btn">I Want To Hire</a>
                        <a href="#" class="info-btn">I Want To Work</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{asset('assets/front/img/hero/hero-1.jpg')}}"></div>
            <div class="hs-item set-bg" data-setbg="{{asset('assets/front/img/hero/hero-2.jpg')}}"></div>
            <div class="hs-item set-bg" data-setbg="{{asset('assets/front/img/hero/hero-3.jpg')}}"></div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- end of banner -->


    <!-- START OF COUNTER NUMBER -->
    <div class="well" >
        <div class="site-wrap">
            <div class="site-section section-counter"></div>
            <div class="site-section first-section">
                <div class="container" >
                    <div class="row mb-5">
                        <div class="col-md-12 text-center" data-aos="fade"> <br>
                        <h2 class="site-section-heading text-uppercase text-center font-secondary" >Our Satisified Customers</h2>
                        </div>
                    </div>
                    <div class="row border-responsive">
                        <div class="col-md-2 col-lg-2 mb-4 mb-lg-0 " data-aos="fade-up" data-aos-delay=""></div>

                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
                            <div class="text-center">
                                <span class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
                                <h3 class="text-uppercase h4 mb-3" >New Users</h3>
                                <div class="col-lg-6">
                                    <div class="counter">
                                        <span class="number" data-number="2750">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
                            <div class="text-center">
                                <span class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
                                <h3 class="text-uppercase h4 mb-3">Added Today</h3>
                                <div class="col-lg-6">
                                    <div class="counter">
                                        <span class="number" data-number="275">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="">
                            <div class="text-center">
                                <span class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
                                <h3 class="text-uppercase h4 mb-3">Total Users</h3>
                                <div class="col-lg-6">
                                    <div class="counter">
                                        <span class="number" data-number="7200">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF COUNTER NUMBER -->

    <!-- START OF VIDEO SLIDER -->

    <!-- row -->
    <div class="slide-row">
        <!-- section title -->
        <div class="">
            <div class="sections-title">
                <h6 class="title">Recently Viewed & More</h6>
                <div class="sections-navs">
                    <ul class="sections-tabs-navs tabs-navs">
                        <li id="all"><a data-toggle="tabs" href="#tabs1">See All ></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /section title -->

        <!-- sliddings tabs & slick -->
        <div class="">
            <div class="slide-row">
                <div class="sliddings-tabss">
                    <!-- tabs -->
                    <div id="tabs1" class="tabss-pane active">
                        <div class="sliddings-slick" data-navs="#slick-navs-1" >
                          <!-- start up -->
                          <div class="slidding">
                                <a href="#">
                                    <div class="slidding-img">
                                        <img src="{{asset('assets/front/img/blog/blog-8.jpg')}}" style="max-height: 170px;" alt=''>
                                    </div>
                                </a>
                                <div class="slidding-body">
                                    <h4 class="slidding-price header-cart-item-info">Video Description</h4>
                                </div>
                            </div>
                            <!-- slidding -->
                            <div class="slidding">
                                <a href="#">
                                    <div class="slidding-img">
                                        <img src="{{asset('assets/front/img/blog/blog-3.jpg')}}" style="max-height: 170px;" alt=''>
                                    </div>
                                </a>
                                <div class="slidding-body">
                                    <h4 class="slidding-price header-cart-item-info">Video Description</h4>
                                </div>
                            </div>
                            <!-- slidding -->
                            <div class="slidding">
                                <a href="#">
                                    <div class="slidding-img">
                                        <img src="{{asset('assets/front/img/blog/blog-10.jpg')}}" style="max-height: 170px;" alt=''>
                                    </div>
                                </a>
                                <div class="slidding-body">
                                    <h4 class="slidding-price header-cart-item-info">Video Description</h4>
                                </div>
                            </div>

                            <!-- slidding -->
                            <div class="slidding">
                                <a href="#">
                                    <div class="slidding-img">
                                        <img src="{{asset('assets/front/img/blog/blog-7.jpg')}}" style="max-height: 170px;" alt=''>
                                    </div>
                                </a>
                                <div class="slidding-body">
                                    <h4 class="slidding-price header-cart-item-info">Video Description</h4>
                                </div>
                            </div>

                            <!-- slidding -->
                            <div class="slidding">
                                <a href="#">
                                    <div class="slidding-img">
                                        <img src="{{asset('assets/front/img/blog/blog-5.jpg')}}" style="max-height: 170px;" alt=''>
                                    </div>
                                </a>
                                <div class="slidding-body">
                                    <h4 class="slidding-price header-cart-item-info">Video Description</h4>
                                </div>
                            </div>

                            <!-- slidding -->
                        </div>

                          <!-- end of -->
                        </div>
                        <div id="slick-navs-1" class="sliddings-slick-navs bg-danger"></div>
                    </div>
                    <!-- /tabs -->
                </div>
            </div>
        </div>
        <!-- our services -->
        <div class="container-fluid mb-2">
        <div class="text-center">
            <h1>Our Services</h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box">
                    <div class="our-services settings">
                        <div class="icon"> <img src="{{asset('assets/front/img/payclick.png')}}"> </div>
                        <h4>Click view paid</h4>
                        <p>EARN MONEY FOR SIMPLE just on Click</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="our-services settings">
                        <div class="icon"> <img src="{{asset('assets/front/img/survey.png')}}"> </div>
                        <h4>Survey way.</h4>
                        <p>EARN MONEY FOR SIMPLE just Answer Question</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="our-services speedup">
                        <div class="icon"> <img src="{{asset('assets/front/img/ads.png')}}"> </div>
                        <h4>Digital marketing</h4>
                        <p>YOU CAN EARN more more JUST BY VIEWING THE ADVERTISEMENTS</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="our-services privacy">
                        <div class="icon"> <img src="{{asset('assets/front/img/play.png')}}"> </div>
                        <h4>Video view paid</h4>
                        <p>watch video and get Paid </p>
                    </div>
                </div>
            </div>
        </div>
      <!-- somecontent to be added -->
    </div>
        <!-- sliddings tabs & slick -->
    </div>
    <br>
    <!-- /row -->    
    <section class="aboutus-page-section spad">
        <div class="container-fluid">
            <div class="about-page-text">
                <div class="row">
                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    <div class="col-md-3">
                        <div class="ap-service-item set-bg" data-setbg="{{asset('assets/front/img/about/about-p1.jpg')}}">
                            <div class="cover__Text">
                                    <b>
                                        Become a stockholder
                                        You still have a chance to become an Muhahe  stockholder before the products & service  are launched to the public.
                                    </b>
                            </div>
                        </div>
                    </div>
                    <!-- STARTING OF NEWS COLUMN -->
                    <div class="col-md-6">
                        <div class="blog-grids row mb-3 blogg" >
                            <div class="col-md-3 text-right m-0">
                                <a href="#">
                                    <img src="{{asset('assets/front/img/logo.jpg')}}" class="img-fluid" alt="fantastic cms" width="75px" >
                                </a>
                            </div>
                            <div class="col-md-9 blog-grid-right">

                                <h6>
                                    <a href="#" style="color:black">The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. </a>
                                </h6>
                                <div class="sub-meta">
                                    <span>
                                    <i class="far fa-clock"></i> 14/09/2020</span>
                                </div>
                            </div>
                        </div><br>
                        <div class="blog-grids row mb-3 blogg" >
                           <div class="col-md-3 text-right m-0">
                                <a href="#">
                                    <img src="{{asset('assets/front/img/logo.jpg')}}" class="img-fluid" alt="fantastic cms" width="75px" >
                                </a>
                            </div>
                            <div class="col-md-9 blog-grid-right ">
                                <p>
                                    <a href="#" style="color:black">The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. </a>
                                </p>
                                <div class="sub-meta">
                                    <span>
                                    <i class="far fa-clock"></i> 14/09/2020</span>
                                </div>
                            </div>
                        </div><br>
                        <div class="blog-grids row mb-3 blogg" >
                            <div class="col-md-3 text-right m-0">
                                <a href="#">
                                    <img src="{{asset('assets/front/img/logo.jpg')}}" class="img-fluid" alt="fantastic cms" width="75px" >
                                </a>
                            </div>
                            <div class="col-md-9 blog-grid-right ">
                                <h6>
                                    <a href="#" style="color:black">The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. </a>
                                </h6>
                                <div class="sub-meta">
                                    <span>
                                    <i class="far fa-clock"></i> 14/09/2020</span>
                                </div>
                            </div>
                        </div><br>
                        <div class="blog-grids row mb-3 blogg" >
                            <div class="col-md-3 text-right m-0">
                                <a href="#">
                                    <img src="{{asset('assets/front/img/logo.jpg')}}" class="img-fluid" alt="fantastic cms" width="75px" >
                                </a>
                            </div>
                            <div class="col-md-9 blog-grid-right ">
                                <h6>
                                    <a href="#" style="color:black">The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. </a>
                                </h6>
                                <div class="sub-meta">
                                    <span>
                                    <i class="far fa-clock"></i> 14/09/2020</span>
                                </div>
                            </div>
                        </div><br>
                    </div>

                    <!-- STARTING OF NEWS COLUMN -->
                    <v class="col-md-3">
                        <div class="ap-service-item set-bg" data-setbg="{{asset('assets/front/img/about/about-p3.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->
   <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="{{asset('assets/front/img/video-bg.jpg')}}" style="margin-top: -50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Discover More About MUHAHE AFFILIATE.</h2>
                        <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup">
                            <img src="{{asset('assets/front/img/play.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->
    <!-- payment section -->
    <div class="payment__Mehod">
        <h3 class="AcceptableHeader">Acceptable Payment at MUHAHE AFFILIATE.</h3>
		<marquee behavior="alternate" direction="left">
			<img style="object-fit: contain;" src="{{ asset('assets/front/currency-image/Bitcoin.jpg') }}" width="140" height="100" alt="Natural" />
			<img style="object-fit: contain;" src="{{ asset('assets/front/currency-image/cash.jpg') }}" width="140" height="100" alt="Natural" />
			<img style="object-fit: contain;" src="{{ asset('assets/front/currency-image/etherium.png') }}" width="140" height="100" alt="Natural" />
			<img style="object-fit: contain;" src="{{ asset('assets/front/currency-image/mastercard.jpg') }}" width="147" height="107" alt="Natural" />
			<img style="object-fit: contain;" src="{{ asset('assets/front/currency-image/mtn-mobile-money.png') }}" width="128" height="88" alt="Natural" />
			<img style="object-fit: contain;" src="{{ asset('assets/front/currency-image/PayPal.png') }}" width="120" height="80" alt="Natural" />
			<img style="object-fit: contain;" src="{{ asset('assets/front/currency-image/perfwect.png') }}" width="160" height="120" alt="Natural" />
			<img style="object-fit: contain;" src="{{ asset('assets/front/currency-image/Skrill-Review.png') }}" width="155" height="115" alt="Natural" />
			<img style="object-fit: contain;" src="{{ asset('assets/front/currency-image/visa.jpeg') }}" width="120" height="80" alt="Natural" />
		</marquee>
	</div>
    <!-- end of payment section -->
    <!-- Hero Section End --></div
