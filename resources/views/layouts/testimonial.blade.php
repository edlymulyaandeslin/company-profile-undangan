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
                                                    <p class="testimonial-author">{{ $testimoni->name }}</p>
                                                </div>
                                            </div>
                                        </div> <!-- end of swiper-slide -->
                                    @endforeach

                                    <!-- end of slide -->

                                    {{-- <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('ioniq') }}/images/testimonial-2.jpg"
                                                alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Eros volutpat ante mauris euismod sem, ut
                                                    varius nisi lectus in urna. Integer luctus, nunc eget maximus intem,
                                                    orci risus</p>
                                                <p class="testimonial-author">Roy Smith - Developer</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide --> --}}

                                    {{-- <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('ioniq') }}/images/testimonial-3.jpg"
                                                alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Sed congue ex quam, sit amet venenatis
                                                    dolor lacinia vulputate. Nunc pulvinar ex ex, sit amet scelerisque
                                                    tellus pretium semper</p>
                                                <p class="testimonial-author">Marsha Singer - Marketer</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('ioniq') }}/images/testimonial-4.jpg"
                                                alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Etiam est lorem, interdum non semper ut,
                                                    bibendum vitae ante. Pellente sollicitun sagittis lectus. Aenean in
                                                    comod</p>
                                                <p class="testimonial-author">Tim Shaw - Designer</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('ioniq') }}/images/testimonial-5.jpg"
                                                alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Quisque nec turpis placerat, accumsan lorem
                                                    lobortis, vestibulum elit. Fusce finibus nisl varius semper
                                                    elementum vivamus</p>
                                                <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide -->

                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="{{ asset('ioniq') }}/images/testimonial-6.jpg"
                                                alt="alternative">
                                            <div class="card-body">
                                                <p class="testimonial-text">Vulputate sed tellus nec, imperdiet luctus
                                                    purus. Morbi lobortis massa a mi interdum condimentum. Integer non
                                                    gravida nisi</p>
                                                <p class="testimonial-author">Ann Blake - Developer</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <!-- end of slide --> --}}

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
