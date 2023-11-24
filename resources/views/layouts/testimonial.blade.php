        <!-- Testimonials -->
        <div class="slider-1 bg-gray" id="testimoni">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Clients</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card Slider -->
                        <div class="slider-container">
                            <div class="swiper-container card-slider">
                                <div class="swiper-wrapper">

                                    <!-- Slide -->
                                    @foreach ($testimonials as $testimoni)
                                        <div class="swiper-slide">
                                            <div class="card">

                                                <div class="card-body">
                                                    <img class="img-fluid"
                                                        src="{{ asset('storage/' . $testimoni->file) }}" alt="">
                                                    <p class="testimonial-author mt-2">-{{ $testimoni->name }}</p>
                                                </div>
                                            </div>
                                        </div> <!-- end of swiper-slide -->
                                    @endforeach

                                    <!-- end of slide -->

                                </div> <!-- end of swiper-wrapper -->

                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <!-- end of add arrows -->

                            </div> <!-- end of swiper-container -->
                        </div> <!-- end of slider-container -->
                        <!-- end of card slider -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of slider-1 -->
        <!-- end of testimonials -->
