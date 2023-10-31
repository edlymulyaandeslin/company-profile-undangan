        <!-- Pricing -->
        <div id="pricing" class="cards-2 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Pilihan Paket</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card -->
                        @foreach ($pakets as $paket)
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img class="decoration-lines"
                                            src="{{ asset('ioniq') }}/images/decoration-lines.svg"
                                            alt="alternative"><span>{{ $paket->category->name }}</span><img
                                            class="decoration-lines flipped"
                                            src="{{ asset('ioniq') }}/images/decoration-lines.svg" alt="alternative">
                                    </div>
                                    <h4 class="m-0 p-0">Fitur</h4>

                                    @if ($paket->category->name === 'Berlangganan')
                                        <ul class="list-unstyled li-space-lg">
                                            <li>Akses Seluruh Tema</li>
                                            <li>Unlimited Penerima</li>
                                            <li>Unlimited Foto</li>
                                            <li>Unlimited Vidio</li>
                                            <li>Profile</li>
                                            <li>Konfirmasi Kehadiran Tamu</li>
                                            <li>Informasi Acara</li>
                                            <li>Ucapan</li>
                                            <li>Link Lokasi</li>
                                            <li>Story</li>
                                            <li>Quotes</li>
                                            <li>Tanpa Masa Aktif </li>
                                            <li class="fw-bold">Dibuatin admin (terima beres)</li>
                                        </ul>
                                    @else
                                        <ul class="list-unstyled li-space-lg">
                                            <li>Akses Seluruh Tema</li>
                                            <li>{{ $paket->jumlah_tamu }} Penerima</li>
                                            <li>{{ $paket->jumlah_foto }} Foto</li>
                                            <li>{{ $paket->jumlah_vidio }} Vidio</li>
                                            <li>Profile</li>
                                            <li>Konfirmasi Kehadiran Tamu</li>
                                            <li>Informasi Acara</li>
                                            <li>Ucapan</li>
                                            <li>Link Lokasi</li>
                                            <li>Story</li>
                                            <li>Quotes</li>
                                            <li>Tanpa Masa Aktif </li>
                                            <li class="fw-bold">Dibuatin admin (terima beres)</li>
                                        </ul>
                                    @endif
                                    <div class="price">Rp{{ $paket->price }}</div>
                                    <a href="#" class="btn-solid-reg">Pilih Paket
                                        {{ $paket->category->name }}</a>
                                </div>
                            </div>
                        @endforeach

                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->
