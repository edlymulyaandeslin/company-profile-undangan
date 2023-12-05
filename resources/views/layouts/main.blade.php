<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>UndanganKita Digital</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap"
            rel="stylesheet">
        <link href="{{ asset('ioniq') }}/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('ioniq') }}/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="{{ asset('ioniq') }}/css/swiper.css" rel="stylesheet">
        <link href="{{ asset('ioniq') }}/css/styles.css" rel="stylesheet">

        {{-- feather icon --}}
        <!-- choose one -->
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <!-- Favicon  -->
        <link rel="icon" href="img/icon2.png">
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbarExample">

        @include('partials.navbar')

        @include('layouts.header')

        {{-- <!-- Details 1 -->
        <div id="details" class="basic-1 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h2>Manage your customer’s expectations and get them to trust you</h2>
                            <p>Vestibulum ullamcorper augue ex, imperdiet tincidunt tellus bibendum inconsectetur rutrum
                                mauris orbi scelerisque cursus augue, ac suscipit sem mattis at ut suscipit</p>
                            <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Modal</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <img class="img-fluid" src="{{ asset('ioniq') }}/images/details-1.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-1 -->
        <!-- end of details 1 --> --}}

        {{-- <!-- Details Modal -->
        <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="row">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="col-lg-8">
                            <div class="image-container">
                                <img class="img-fluid" src="{{ asset('ioniq') }}/images/details-modal.jpg"
                                    alt="alternative">
                            </div> <!-- end of image-container -->
                        </div> <!-- end of col -->
                        <div class="col-lg-4">
                            <h3>Goals Setting</h3>
                            <hr>
                            <p>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit
                                semper magna ac tum nico vela spider</p>
                            <h4>User Feedback</h4>
                            <p>Sapien vitae eros. Praesent ut erat a tellus posuere nisi more thico cursus pharetra
                                finibus posuere nisi. Vivamus feugiat</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Tincidunt sem vel brita bet mala</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Fusce interdum nec ravon fro urna</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Integer pulvinar biolot bat tortor</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Id ultricies fringilla fangor raq trinit</div>
                                </li>
                            </ul>
                            <a id="modalCtaBtn" class="btn-solid-reg" href="#your-link">Details</a>
                            <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of modal-content -->
            </div> <!-- end of modal-dialog -->
        </div> <!-- end of modal -->
        <!-- end of details modal --> --}}

        @include('layouts.about')

        @include('layouts.price')

        @include('layouts.theme')

        {{-- <!-- Features -->
        <div id="features" class="cards-1 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Ioniq CRM application is packed with <span>awesome features</span></h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Customer Lists</h4>
                                <p>Et blandit nisl libero at arcu. Donec ac lectus sed tellus mollis viverra. Nullam
                                    pharetra ante at nunc elementum</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon green">
                                <span class="far fa-clipboard"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Sales Tracking</h4>
                                <p>Vulputate nibh feugiat. Morbi pellent diam nec libero lacinia, sed ultrices velit
                                    scelerisque. Nunc placerat justo sem</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon blue">
                                <span class="far fa-comments"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Reporting Tool</h4>
                                <p>Ety suscipit metus sollicitudin euqu isq imperdiet nibh nec magna tincidunt, nec pala
                                    vehicula neque sodales verum</p>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of services --> --}}

        {{-- <!-- Invitation -->
        <div class="basic-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Ioniq will change the way you think about CRM solutions due to it’s advanced tools and
                            integrated functionalities</h4>
                        <a class="btn-outline-lg page-scroll" href="sign-up.html">Sign up for free</a>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-3 -->
        <!-- end of invitation --> --}}

        @include('layouts.testimonial')

        @include('layouts.faq')

        @include('partials.footer')

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="{{ asset('ioniq') }}/images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->

        <!-- Scripts -->
        <script src="{{ asset('ioniq') }}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="{{ asset('ioniq') }}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="{{ asset('ioniq') }}/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{ asset('ioniq') }}/js/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{ asset('ioniq') }}/js/scripts.js"></script> <!-- Custom scripts -->
    </body>

</html>
