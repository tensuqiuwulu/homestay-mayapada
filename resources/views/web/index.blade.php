<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Kubu Manyar Homestay</title>

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" />
    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        @media (max-width: 767px) {
            .btn_1.d-lg-block {
                display: none !important;
            }
        }
    </style>

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

        /* Default styles for larger screens */
        .btn_scrollto {
            text-align: right;
        }

        /* Media query for smaller screens (adjust the max-width as needed) */
        @media (max-width: 768px) {
            .btn_scrollto {
                text-align: center;
                margin-top: 10px;
                /* Add some space between the links */
            }

            .btn_scrollto a {
                display: block;
                /* Make the links block-level for stacking vertically */
                margin-bottom: 5px;
                /* Add some space between the links */
            }
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
                    <a href="#" class="logo_normal"><img src="{{ asset('landing/img/logoputih.png') }}" width="100" height="90" alt=""></a>
                    <a href="#" class="logo_sticky"><img src="{{ asset('landing/img/logo.png') }}" width="100" height="90" alt=""></a>
                </div>
                <div class="col-6">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ route('landing.id') }}">{!! Request::routeIs(['landing.id']) ? '<b><u>Bahasa Indonesia</u></b>' : 'Bahasa Indonesia' !!} | </a>
                                <a href="{{ route('landing.en') }}">{!! Request::routeIs(['landing.en']) ? '<b><u>English</u></b>' : 'English' !!}</a>
                            </li>
                            <li>
                                @if(session('customer'))
                                <!-- Tombol My Booking akan muncul ketika layar memiliki lebar lebih dari 768px -->
                                <a class="btn_1 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#mybooking">My Booking</a>
                                @else
                                <!-- Tombol Booking akan muncul pada layar dengan lebar kurang dari atau sama dengan 768px -->
                                <a class="btn_1 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Booking</a>
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
        <div class="logo_panel"><img src="{{ asset('landing/img/logo.png') }}" width="100" height="90" alt=""></div>
        <div class="sidebar-navigation">
            <nav>
                <ul class="level-1">
                    <a href="{{ route('landing.id') }}">{!! Request::routeIs(['landing.id']) ? '<b><u>Bahasa Indonesia</u></b>' : 'Bahasa Indonesia' !!} | </a>
                    <a href="{{ route('landing.en') }}">{!! Request::routeIs(['landing.en']) ? '<b><u>English</u></b>' : 'English' !!}</a>
                    <hr>
                    <li>
                        @if(session('customer'))
                        <a class="btn_1" data-bs-toggle="modal" data-bs-target="#mybooking">My Booking</a>
                        @else
                        <a class="btn_1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Booking</a>
                        @endif
                    </li>
                    <hr>
                    <li><a href="#about_us" class="open_close_nav_panel">About</a></li>
                    <li><a href="#rooms" class="open_close_nav_panel">Rooms</a></li>
                    <li><a href="#amenities" class="open_close_nav_panel">Local Amenities</a></li>
                    <li><a href="#testimoni" class="open_close_nav_panel">Testimoni</a></li>
                    <li><a href="#contact" class="open_close_nav_panel">Contact</a></li>
                    <li><a href="#contact" class="open_close_nav_panel">{{ trans('etc.panduan') }}</a></li>
                    @if(session('customer'))
                    <li><a href="{{route('customers.auth.logout')}}" class="open_close_nav_panel">Logout</a></li>
                    @endif
                    <hr>
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
                                <p><em>Wayan Wirta {{ trans('about.owner') }}</em></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/xTIFJC2lP7s" frameborder="0" allowfullscreen></iframe>
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
                                <a class="box_cat_rooms">
                                    <figure>
                                        <div class="background-image" data-background="url({{ asset($image->file_name)  }})"></div>
                                        <div class="info">
                                            <!-- <small>From $150/night</small> -->
                                            <h3>{{ $image->title }}</h3>
                                            <!-- <span>Read more</span> -->
                                        </div>
                                    </figure>
                                </a>
                            </div>
                        <?php endforeach ?>
                        <!-- /item-->
                    </div>
                    <!-- /carousel-->
                </div>

                <div class="title text-center mb-5" style="margin-top: 20px;">
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
                                <a href="https://maps.app.goo.gl/kXZhBYdyGzCRW76NA">{{ trans('etc.find_maps') }}</a>
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
                                <a href="https://maps.app.goo.gl/VJ22RhhikdWUFJxt7">{{ trans('etc.find_maps') }}</a>
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
                                    @foreach($reviews as $review)
                                    <div class="box_overlay">

                                        <h3 style="text-align: center; color:white">{{$review->customer->name}}</h3>
                                        {{$review->review}}
                                    </div>
                                    @endforeach
                                    <!-- End carousel_testimonials -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </main>



    <footer>
        <div class="footer_bg">
            <div class="gradient_over"></div>
            <div class="background-image" data-background="url(img/rooms/3.jpg)"></div>
        </div>
        <section id="contact">
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
                            <li><strong><a href="#0">{{$email->contact}}</a></strong></li>
                            <li><strong><a href="#0">{{$phone->contact}}</a></strong></li>
                        </ul>
                        <div class="social">
                            <ul>
                                <li><a href="{{$instagram->contact}}" target="_blank"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="{{$whatsapp->contact}}" target="_blank"><i class="bi bi-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                    <form id="login-form">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email-login" name="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password-login" name="password" required>
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
                    <form id="register-form">
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
                            <input type="checkbox" id="showPassword"> Show Password
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
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 50px;">Action</th>
                                    <th scope="col">#No Booking</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Booking Date</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Check In</th>
                                    <th scope="col">Check Out</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status Booking</th>
                                    <th scope="col">Status Paid</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($bookings as $index => $booking) : ?>
                                    <tr>
                                        <td>
                                            <!-- add detail button -->
                                            @if($booking->check_out != null && $booking->is_review == 0)
                                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addReview" onclick="setBookingId({{$booking->id}})">Review</button>

                                            @endif
                                            <a href="{{ route('customers.invoice', ['id' => $booking->id]) }}">
                                                <button type="button" class="btn btn-primary mb-3" onclick="setBookingId({{$booking->id}})">Invoice</button>
                                            </a>
                                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addBuktiBayar" onclick="setBookingId({{$booking->id}})">Payment</button>
                                        </td>
                                        <th scope="row">{{ $booking->no_booking }}</th>
                                        <th scope="row">{{ $booking->rooms->room_number }}</th>
                                        <td>
                                            <?php
                                            $date = date_create($booking->created_at);
                                            echo date_format($date, "d F Y");
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $date = date_create($booking->start_date);
                                            echo date_format($date, "d F Y");
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $date = date_create($booking->end_date);
                                            echo date_format($date, "d F Y");
                                            ?>
                                        </td>
                                        <td>
                                            {{ $booking->check_in }}
                                        </td>
                                        <td>
                                            {{ $booking->check_out }}
                                        </td>
                                        <td>
                                            Rp. {{ number_format($booking->total_price, 0, ',', '.') }}
                                        </td>
                                        <td>
                                            @if($booking->status == 0)
                                            Pending
                                            @elseif($booking->status == 1)
                                            Check In
                                            @elseif($booking->status == 2)
                                            Check Out
                                            @elseif($booking->status == 3)
                                            Cancel
                                            @endif
                                        </td>
                                        <td>
                                            @if($booking->paid_status == 0)
                                            Unpaid
                                            @elseif($booking->paid_status == 1)
                                            Paid
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
    </div>

    <div class="modal fade" id="addBooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create New Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="booking-form">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Booking Date</label>
                            <input type="text" class="form-control date-range" name="book_range" placeholder="Booking date" />
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Person</label>
                            <input type="number" class="form-control" name="total_person" placeholder="Input Person" />
                        </div>
                        <div class="mb-3">
                            <div id="dayCount"></div>
                            <div id="price"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addReview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create New Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="review-form">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Review</label>
                            <textarea class="form-control" name="review" id="review" cols="30" rows="10"></textarea>
                            <input type="hidden" name="booking_id">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addBuktiBayar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Upload Proof of Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="bukti-upload-form">
                        @csrf
                        <div class="mb-3">
                            <h3>Payment Guide to Bank BCA</h3>
                            <h4>Bank Account Information</h4>
                            <p>Name: I GEDE BAGAS PUTRAWAN</p>
                            <p>Account Number: 7703051466</p>
                        </div>

                        <!-- get bukti bayar file -->
                        <div id="gambar-container">
                            <!-- Ini adalah tempat di mana gambar akan ditampilkan -->
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Upload Proof of Payment</label>
                            <input type="file" class="form-control" name="bukti_bayar" id="bukti_bayar" />
                            <input type="hidden" name="booking_id">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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

    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!--sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.1/feather.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.getElementById('showPassword').addEventListener('change', function() {
            var passwordField = document.getElementById('password');
            if (this.checked) {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    </script>

    <script>
        const dateRangeInput = document.querySelector('.date-range');
        const dayCountDisplay = document.querySelector('#dayCount');
        const priceDisplay = document.querySelector('#price');

        console.log(dateRangeInput);

        // Calculate today's date
        const today = new Date();

        // Initialize Flatpickr with range mode
        const flatpickrInstance = flatpickr(dateRangeInput, {
            mode: "range",
            altInput: true,
            altFormat: "d F Y",
            dateFormat: "d-M-Y",
            minDate: today, // Set the maximum date to today
            onChange: function(selectedDates, dateStr, instance) {
                // Calculate the difference in days
                if (selectedDates.length === 2) {
                    const startDate = selectedDates[0];
                    const endDate = selectedDates[1];
                    const timeDiff = Math.abs(endDate - startDate);
                    const nightCount = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));
                    const price = nightCount * 200000;
                    const formattedPrice = new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR'
                    }).format(price);
                    dayCountDisplay.textContent = `Total ${nightCount} night(s)`;
                    priceDisplay.textContent = `Total ${formattedPrice}`;
                } else {
                    dayCountDisplay.textContent = '';
                    priceDisplay.textContent = '';
                }
            }
        });
    </script>
    <script>
        var bookingId;

        // Function to set the booking_id when the button is clicked
        function setBookingId(id) {
            bookingId = id;
        }
    </script>
    <script>
        // login
        $('#login').on('click', function() {
            $('#staticBackdrop').modal('show');
        });

        // login with jQuery
        $('#login-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('customers.auth.login') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    if (response && response.message && response.message === 'Login berhasil') {
                        // set sweet alert success login
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Success',
                            text: 'Redirecting...',
                            timer: 2000,
                            showConfirmButton: false,
                        })
                        window.location.href = "{{ route('landing.en') }}";
                    } else {
                        alert('Login failed. Please try again.'); // Change the message accordingly
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // swet alert
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: xhr.responseText,
                    })
                }
            });
        });

        // register
        $('#register').on('click', function() {
            $('#staticBackdropRegister').modal('show');
        });

        // register with jQuery
        $('#register-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('customers.auth.register') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    if (response && response.message && response.message === 'Register berhasil') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Register Success',
                            text: 'Please Login',
                            showConfirmButton: true,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $('#staticBackdropRegister').modal('hide');
                                $('#staticBackdrop').modal('show');
                            }
                        })
                    } else {
                        alert('Register failed. Please try again.'); // Change the message accordingly
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: xhr.responseText,
                    })
                }
            });
        });

        // booking
        $('#booking').on('click', function() {
            $('#addBooking').modal('show');
        });

        // booking with jQuery
        $('#booking-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('customers.booking.store') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    if (response && response.message && response.message === 'Booking berhasil') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Booking Success',
                            timer: 2000,
                            showConfirmButton: false,
                        })
                        window.location.href = "{{ route('landing.en') }}";
                    } else {
                        alert('Booking failed. Please try again.'); // Change the message accordingly
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: xhr.responseText,
                    })
                }
            });
        });

        // review
        // $(document).ready(function() {
        $('#addReview').on('shown.bs.modal', function() {

            // Mengisi nilai booking_id ke input hidden
            $('input[name="booking_id"]').val(bookingId);
        });
        // });

        // review with jQuery
        $('#review-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('customers.review.store') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    if (response && response.message && response.message === 'Review success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Review Success',
                            timer: 2000,
                            showConfirmButton: false,
                        })
                        window.location.href = "{{ route('landing.en') }}";
                    } else {
                        alert('Review failed. Please try again.'); // Change the message accordingly
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: xhr.responseText,
                    })
                }
            });
        });

        // bukti bayar

        $('#addBuktiBayar').on('shown.bs.modal', function() {

            // Mengisi nilai booking_id ke input hidden
            $('input[name="booking_id"]').val(bookingId);
            var id = $('input[name="booking_id"]').val();

            $.ajax({
                url: '/customers/bukti/' + id,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.message === 'Success') {
                        var imageUrl = response.path;
                        var imageElement = '<img src="' + imageUrl + '" alt="Gambar Bukti Bayar" style="width: 160px; cursor: pointer;" onclick="openImageInNewTab(\'' + imageUrl + '\');">';
                        $('#gambar-container').html(imageElement);
                    } else {
                        $('#gambar-container').html();
                    }
                },
            });
        });

        // bukti bayar with jQuery
        $('#bukti-upload-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('customers.bukti.store') }}",
                method: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    if (response && response.message && response.message === 'Success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Bukti Bayar Success',
                            timer: 2000,
                            showConfirmButton: false,
                        })
                        window.location.href = "{{ route('landing.en') }}";
                    } else {
                        alert('Bukti bayar failed. Please try again.'); // Change the message accordingly
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: xhr.responseText,
                    })
                }
            });


        });

        function openImageInNewTab(imageUrl) {
            window.open(imageUrl, '_blank');
        }
    </script>

</body>

</html>