<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Villa</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('landing/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/vendors.min.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

    <div class="layer"></div><!-- Opacity Mask -->

    <header class="reveal_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <a href="index.html" class="logo_normal"><img src="{{ asset('landing/img/logo.png') }}" width="135" height="45" alt=""></a>
                    <a href="index.html" class="logo_sticky"><img src="{{ asset('landing/img/logo_sticky.png') }}" width="135" height="45" alt=""></a>
                </div>
                <div class="col-6">
                    <nav>
                        <ul>
                            <!-- <a href="{{ route('landing.en') }}">English</a> | <a href="{{ route('landing.id') }}">Bahasa Indonesia</a> -->
                            <li>
                                <div class="btn_scrollto">
                                <a href="{{ route('landing.id') }}">Bahasa Indonesia | </a>
                                <a href="{{ route('landing.en') }}"> English</a>
                                </div>
                            </li>
                            <li>
                                <div class="hamburger_2 open_close_nav_panel">
                                    <div class="hamburger__box">
                                        <div class="hamburger__inner"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div><!-- /container -->
    </header><!-- /Header -->

    <div class="nav_panel">
        <div class="logo_panel"><img src="{{ asset('landing/img/logo_sticky.png') }}" width="135" height="45" alt=""></div>
        <div class="sidebar-navigation">
            <nav>
                <ul class="level-1">
                    <li><a href="#about_us" class="open_close_nav_panel">About</a></li>
                    <li><a href="#rooms" class="open_close_nav_panel">Rooms</a></li>
                    <li><a href="#amenities" class="open_close_nav_panel">Local Amenities</a></li>
                    <li><a href="#testimoni" class="open_close_nav_panel">Testimoni</a></li>
                    <li><a href="#contacs" class="open_close_nav_panel">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /nav_panel -->

    <!-- /nav_panel -->

    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme kenburns">
                <div class="owl-slide background-image cover" data-background="url( {{ asset('landing/img/villa-awal.jpeg') }})">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-6 static">
                                    <div class="slide-text white">
                                        <h2 class="owl-slide-animated owl-slide-title-2">
                                            {{ trans('etc.banner') }}
                                        </h2>
                                        <div class="owl-slide-animated owl-slide-title-3"><a class="btn_1 outline white mt-3" href="https://drive.google.com/drive/folders/15iq2kO9m_wQMaPaVTuPkb8yoI6kt66rg">Download Brandbook</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mouse_wp">
            <a href="#first_section" class="btn_scrollto">
                <div class="mouse"></div>
            </a>
        </div>
        <!-- / mouse -->
        </div>
        <!--/carousel-->

        <section id="about_us">
            <div class="pattern_2">
                <div class="container margin_120_95" id="first_section">
                    <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                        <div class="col-lg-6">
                            <div class="parallax_wrapper">
                                <iframe width="600" height="400" src="https://www.youtube.com/embed/BFS9n4B_2xA" frameborder="0" allowfullscreen></iframe>
                                <!-- <img src="{{ asset('landing/img/home_2.jpg') }}" alt="" class="img-fluid rounded-img">
                            <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="{{ asset('landing/img/home_1.jpg') }}" alt="" class="rounded-img"></span></div> -->
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="intro">
                                <div class="title">
                                    <small>{{ trans('about.title') }}</small>
                                    <!-- <h2>Tailored services and the experience of unique holidays</h2> -->
                                </div>
                                <!-- <p class="lead">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim.</p> -->
                                <p>{{ trans('about.detail') }}</p>
                                <p><em>{{ trans('about.owner') }}</em></p>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>
                <!-- /pinned content -->
            </div>
            <!-- /Pattern -->
        </section>
        <!-- /container-->

        <section id="rooms">
            <div class="container margin_120_95">
                <div class="title mb-4">
                    <h2 data-cue="slideInUp" data-delay="200">{{ trans('etc.room') }}</h2>
                </div>
                <div data-cues="zoomIn" data-delay="200">
                    <div class="owl-carousel owl-theme carousel_item_centered_rooms rounded-img">
                        <?php foreach ($images as $index => $image) : ?>
                            <div class="item">
                                <a href="room-details.html" class="box_cat_rooms">
                                    <figure>
                                        <div class="background-image" data-background="url({{ asset($image->file_name)  }})"></div>
                                        <!-- <div class="info">
                                        <small>From $150/night</small>
                                        <h3>Double Room</h3>
                                        <span>Read more</span>
                                    </div> -->
                                    </figure>
                                </a>
                            </div>
                        <?php endforeach ?>
                        <!-- /item-->
                    </div>
                    <!-- /carousel-->
                </div>

                <div class="title text-center mb-5">
                <small data-cue="slideInUp"></small>
                <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities no-border" data-cue="slideInUp">
                        <i class="customicon-private-parking"></i>
                        <h3>Private Parking</h3>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <i class="customicon-wifi"></i>
                        <h3>High Speed Wifi</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <i class="customicon-cocktail"></i>
                        <h3>Bar & Restaurant</h3>
                        <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <i class="customicon-swimming-pool"></i>
                        <h3>Swimming Pool</h3>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>
            </div>
            <!-- /container-->
        </section>

        <!-- <div class="marquee">
            <div class="track">
                <div class="content">&nbsp;Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience</div>
            </div>
        </div> -->
        <!-- /marquee-->

        <section id="amenities">
            <div class="bg_white">
                <div class="container margin_120_95">
                    <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                        <div class="col-lg-6">
                            <div class="pinned-image rounded_container pinned-image--small mb-4">
                                <div class="pinned-image__container">
                                    <img src="{{ asset('assets/images/altas.jpeg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="title">
                                <small>{{ trans('etc.amenities')}}</small>
                                <h3>Atlas Beach Club</h3>
                                <p>{{ trans('etc.amenities_atlas')}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row justify-content-between d-flex align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="pinned-image rounded_container pinned-image--small mb-4">
                                <div class="pinned-image__container">
                                    <img src="{{ asset('assets/images/batubolong.jpeg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 order-lg-1">
                            <div class="title">
                                <small>{{ trans('etc.amenities')}}</small>
                                <h3>Pantai Batu Bolong</h3>
                                <p>{{ trans('etc.amenities_batublong')}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                </div>
                <!-- /container-->
            </div>
        </section>
        <!-- /bg_white -->
        <section id="testimoni">
        <div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img kenburns-2" src="img/hero_home_1.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="title white">
                                <small class="mb-1">{{ trans('etc.testimoni') }}</small>
                                <h2>{{ trans('etc.client') }}</h2>
                            </div>
                            <div class="carousel_testimonials owl-carousel owl-theme nav-dots-orizontal">
                                @foreach($data as $list)
                                <div>
                                    <div class="box_overlay">

                                        <h4 style="color: white;">{{ $list['author_name'] }}</h4>
                                        {{ $list['text'] }}

                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                                @endforeach
                            </div>
                            <!-- End carousel_testimonials -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- /parallax_section_1-->

    </main>

    
    <footer class="revealed">
        <div class="footer_bg">
            <div class="gradient_over"></div>
            <div class="background-image" data-background="url(img/rooms/3.jpg)"></div>
        </div>
        <div class="container">
            <div class="row move_content">
                <div class="col-lg-9 col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2774.3585940363705!2d115.14318996499189!3d-8.639472401746671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23889f70c0367%3A0x766be1e2f663b367!2sKubu%20Manyar%20Homestay!5e0!3m2!1sid!2sid!4v1701143076097!5m2!1sid!2sid" width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>{{ trans('etc.contact') }}</h5>
                    <ul>
                        <li>Jl.Kubu Manyar, Banjar Pipitan, Desa Canggu, Kuta, Badung</li>
                        <li><br></li>
                        <li><strong><a href="#0">homestaykubumanyar@gmail.com</a></strong></li>
                        <li><strong><a href="#0">+62-831-1998-9124</a></strong></li>
                    </ul>
                    <div class="social">
                        <ul>
                            <li><a href="https://www.instagram.com/kubu_manyar/"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send/?phone=%2B6283119989124&text&type=phone_number&app_absent=0"><i class="bi bi-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
        <!-- <div class="copy">
            <div class="container">
                © Paradise - by <a href="#">Ansonika</a>
            </div>
        </div> -->
    </footer>
 
    <!-- /footer -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- /back to top -->


    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('landing/js/common_scripts.js') }}"></script>
    <script src="{{ asset('landing/js/common_functions.js') }}"></script>
    <script src="{{ asset('landing/js/datepicker_inline.js') }}"></script>
    <script src="{{ asset('landing/js/phpmailer/validate.js') }}"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="{{ asset('landing/js/slider.js') }}"></script>



</body>

</html>