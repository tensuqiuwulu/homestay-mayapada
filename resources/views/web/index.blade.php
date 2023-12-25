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
    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .map-container {
            position: relative;
            overflow: hidden;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio (change this if needed) */
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
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
                    <a href="index.html" class="logo_normal"><img src="{{ asset('landing/img/logoputih.png') }}" width="135" height="90" alt=""></a>
                    <a href="index.html" class="logo_sticky"><img src="{{ asset('landing/img/logo.png') }}" width="135" height="90" alt=""></a>
                </div>
                <div class="col-6">
                    <nav>
                        <ul>
                            <!-- <a href="{{ route('landing.en') }}">English</a> | <a href="{{ route('landing.id') }}">Bahasa Indonesia</a> -->
                            <li>
                                <div class="btn_scrollto">
                                    <a href="{{ route('landing.id') }}">{!! Request::routeIs(['landing.id']) ? '<b><u>Bahasa Indonesia</u></b>' : 'Bahasa Indonesia' !!} | </a>
                                    <a href="{{ route('landing.en') }}">{!! Request::routeIs(['landing.en']) ? '<b><u>English</u></b>' : 'English' !!}</a>

                                </div>
                            </li>
                            <li>
                                @if(session('customer'))
                                <a class="btn_1" data-bs-toggle="modal" data-bs-target="#mybooking">My Booking</a>
                                @else
                                <a class="btn_1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book</a>
                                @endif

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
        <a href="#" class="closebt open_close_nav_panel"><i class="bi bi-x"></i></a>
        <div class="logo_panel"><img src="{{ asset('landing/img/logo.png') }}" width="135" height="90" alt=""></div>
        <div class="sidebar-navigation">
            <nav>
                <ul class="level-1">
                    <li><a href="#about_us" class="open_close_nav_panel">About</a></li>
                    <li><a href="#rooms" class="open_close_nav_panel">Rooms</a></li>
                    <li><a href="#amenities" class="open_close_nav_panel">Local Amenities</a></li>
                    <li><a href="#testimoni" class="open_close_nav_panel">Testimoni</a></li>
                    <li><a href="#contacs" class="open_close_nav_panel">Contact</a></li>
                    @if(session('customer'))
                    <li><a href="{{route('customers.auth.logout')}}" class="open_close_nav_panel">Logout</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
    <!-- /nav_panel -->

    <!-- /nav_panel -->

    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme kenburns">
                <div class="owl-slide background-image cover" data-background="url( {{ asset('landing/img/depan.jpg') }})">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-6 static">
                                    <div class="slide-text white">
                                        <h2 class="owl-slide-animated owl-slide-title-2">
                                            {{ trans('etc.banner') }}
                                        </h2>
                                        <div class="owl-slide-animated owl-slide-title-3"><a class="btn_1 outline white mt-3" href="{{ trans('etc.brandbook') }}">{{ trans('etc.download') }} Brandbook</a></div>
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
                        <div class="col-lg-5">
                            <div class="intro">
                                <div class="title">
                                    <small>{{ trans('about.title') }}</small>
                                </div>
                                <p>{{ trans('about.detail') }}</p>
                                <p><em>{{ trans('about.owner') }}</em></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/BFS9n4B_2xA" frameborder="0" allowfullscreen></iframe>
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
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <i class="customicon-wifi"></i>
                            <h3>High Speed Wifi</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <i class="customicon-cocktail"></i>
                            <h3>Kitchen Sharing</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <i class="bi bi-fan"></i>
                            <h3>Air Conditioner</h3>
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

    </main>


    <footer class="revealed">
        <div class="footer_bg">
            <div class="gradient_over"></div>
            <div class="background-image" data-background="url(img/rooms/3.jpg)"></div>
        </div>
        <div class="container">
            <div class="row move_content">
                <div class="col-lg-9 col-md-12">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2774.3585940363705!2d115.14318996499189!3d-8.639472401746671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23889f70c0367%3A0x766be1e2f663b367!2sKubu%20Manyar%20Homestay!5e0!3m2!1sid!2sid!4v1701143076097!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
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

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('customers.auth.login') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <p class="mb-0">Don't have an account yet? <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdropRegister">Sign up here</a>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdropRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('customers.auth.register') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Jhon Doe">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="+6208776554234">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="mybooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">My Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addBooking">Add Booking</button>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Booking Date</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bookings as $index => $booking) : ?>
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $booking->create_at }}</td>
                                    <td>{{ $booking->check_in }}</td>
                                    <td>{{ $booking->check_out }}</td>
                                    <td>{{ $booking->status }}</td>
                                    <td>
                                        @if($booking->check_out)
                                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#review">Review</button>
                                        @endif
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addBooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create New Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="booking_wrapper">
                        <div class="col-12">
                            <input type="hidden" id="date_booking" name="date_booking">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="custom_select">
                                    <select class="wide">
                                        <option>Select Room</option>
                                        <option>Double Room</option>
                                        <option>Deluxe Room</option>
                                        <option>Superior Room</option>
                                        <option>Junior Suite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="qty-buttons mb-3 version_2">
                                            <input type="button" value="+" class="qtyplus" name="adults_booking">
                                            <input type="text" name="adults_booking" id="adults_booking" value="" class="qty form-control" placeholder="Adults">
                                            <input type="button" value="-" class="qtyminus" name="adults_booking">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 qty-buttons mb-3 version_2">
                                            <input type="button" value="+" class="qtyplus" name="childs_booking">
                                            <input type="text" name="childs_booking" id="childs_booking" value="" class="qty form-control" placeholder="Childs">
                                            <input type="button" value="-" class="qtyminus" name="childs_booking">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('landing/js/common_scripts.js') }}"></script>
    <script src="{{ asset('landing/js/common_functions.js') }}"></script>
    <script src="{{ asset('landing/js/datepicker_inline.js') }}"></script>
    <script src="{{ asset('landing/js/phpmailer/validate.js') }}"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="{{ asset('landing/js/slider.js') }}"></script>

</body>

</html>