        <!-- Pricing -->
        <div id="theme" class="cards-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Theme</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="list-group">

                            @foreach ($themes as $theme)
                                <a href="{{ $theme->link }}"
                                    class="btn btn-outline-primary text-center text-decoration-none mb-2"
                                    aria-current="true">
                                    {{ $theme->name }}
                                </a>
                            @endforeach

                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->
