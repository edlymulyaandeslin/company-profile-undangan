        <!-- Pricing -->
        <div id="theme" class="cards-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Themes</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        @foreach ($themes as $theme)
                            <div class="card px-0 pt-0 pb-4 overflow-hidden">
                                <div class="col-md-12">
                                    <img src="{{ asset('storage/' . $theme->image) }}" class="card-img-top  w-100"
                                        style="height: 250px" alt="...">
                                </div>
                                <div class="card-body row px-3 pt-4 ">
                                    <div class="col-md-12">
                                        <h5 class="card-title text-start "> {{ $theme->name }}
                                            <i class="fas fa-solid fa-crown"></i>
                                        </h5>
                                    </div>

                                    <div class="col-md-12 text-start">
                                        <p class="btn btn-warning rounded text-white p-1 text-decoration-none ">
                                            <i class="fas fa-regular fa-star"></i>
                                            {{ $theme->category->name }}
                                        </p>
                                    </div>

                                    <div class="col-md-12 text-start">
                                        {{-- <div> --}}
                                        <a href="https://wa.wizard.id/a14882" target="_blank"
                                            class="btn btn-sm btn-outline-success text-decoration-none">Whatsapp<img
                                                src="img/whatsapp.png" width="20px" class="ms-1" alt=""></a>
                                        <a href="{{ $theme->link }}"
                                            class="btn btn-sm btn-outline-primary text-center text-decoration-none "
                                            aria-current="true"><i class="fas fa-regular fa-eye"></i>
                                        </a>
                                        {{-- </div> --}}
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->
