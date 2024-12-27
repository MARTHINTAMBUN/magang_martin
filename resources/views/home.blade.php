@extends('layouts.app')
@section('content')
        <section data-bs-version="5.1" class="header6 cid-uoLEEhWmC3 mbr-fullscreen mbr-parallax-background" id="header6-0" style="background-image: url('images/111.jpg'); background-size: cover; background-position: center;">
        <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);"></div>

        <div class="align-center container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>PT. Martel Karya Sumatra</strong></h1>

                    <p class="mbr-text mbr-white mbr-fonts-style display-7">
                        PT. MARTEL KARYA SUMATRA adalah platform tempat Anda dapat membeli perlengkapan konstruksi, Anda
                        dapat membangun proyek Anda lebih efisien dan dengan material berkualitas baik.
                    </p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-success display-4"
                            href="https://wa.me/6281264978260">Chat Via Whatsapp</a></div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="slider5 mbr-embla cid-ux9ybcfmck" id="slider5-6">
        <div class="position-relative">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-5">
                    <em>Terbaik Produk Kami</em>
                </h4>
            </div>
            <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps"
                data-auto-play-interval="5" data-draggable="true">
                <div class="embla__viewport container-fluid">
                    <div class="embla__container">
                        @foreach($products as $product)
                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">
                                <div class="slide-content">
                                    <div class="item-img">
                                        <div class="item-wrapper">
                                            <img src="{{ asset($product->image_path) }}" alt="{{ $product->title }}" title="">
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h5 class="item-title mbr-fonts-style display-5"><strong>{{ $product->title }}</strong></h5>
                                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">{{ $product->subtitle }}</h6>
                                    </div>
                                    <div class="mbr-section-btn item-footer mt-2">
                                        <a href="{{ route('products.detail', $product->id) }}" class="btn item-btn btn-black display-7" target="_blank">Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button class="embla__button embla__button--prev">
                    <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                    <span class="sr-only visually-hidden visually-hidden">Previous</span>
                </button>
                <button class="embla__button embla__button--next">
                    <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                    <span class="sr-only visually-hidden visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    
    <section data-bs-version="5.1" class="features12 cid-uoLJOnZoia" id="features13-1">





        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="card-wrapper">
                        <div class="card-box align-left">
                            <h4 class="card-title mbr-fonts-style mb-4 display-2"><strong>Kenapa harus memilih
                                    kami?</strong></h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">Pernahkah Anda merasa kecewa karena jalan
                                yang baru diaspal sudah rusak hanya dalam hitungan bulan? Kerusakan ini bisa disebabkan oleh
                                berbagai faktor, seperti kesalahan teknis saat pengerjaan, kualitas aspal yang tidak sesuai
                                spesifikasi, beban kendaraan yang berlebihan, atau bahkan pengaruh cuaca.
                                <br>
                                <br>Namun, tahukah Anda bahwa semua masalah ini sebenarnya bisa dicegah?
                                <br>Pemilihan jenis aspal yang tepat sangat penting, karena harus disesuaikan dengan fungsi
                                dan beban kendaraan yang melewati jalan tersebut setiap hari. Salah satu aspek penting dalam
                                pengaspalan adalah suhu aspal yang harus minimal 130°C saat diaplikasikan, sehingga dapat
                                mengikat agregat dengan sempurna.<br>
                            </p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-home mobi-mbri"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7"><strong>Konstruksi Ramah
                                    Lingkungan</strong></h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4" style="font-size: 20px">Dalam setiap pekerjaan, kami selalu
                                meminimalisir polusi berlebihan yang timbul dari alat-alat kami. Kenyamanan Anda adalah
                                prioritas kami.</h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-delivery mobi-mbri"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7"><strong>Teknologi Terbaik &amp;
                                    Terbaru</strong></h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4" style="font-size: 20px">All sites you create with the
                                Mobirise web builder are mobile-friendly natively. No special actions required.</h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-protect mobi-mbri"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7"><strong>Kualitas Terbaik</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4"style="font-size: 20px">Aspal yang kami gelar adalah aspal
                                terbaik yang sesuai dengan spesifikasi lokasi existing. Bagi kami, kualitas terbaik adalah
                                harga mati.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="header14 cid-sFzz5E692j" id="header14-1j">





        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 image-wrapper">
                    <img src="assets/images/pekerjaan-konstruksi.jpg" alt="#">
                </div>
                <div class="col-12 col-md">
                    <div class="text-wrapper">
                        <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                            <strong>Tentang Perusahaan</strong>
                        </h1>
                        <p class="mbr-text mbr-fonts-style display-7"><strong><em>PT Martel Karya Sumatra</em>
                            </strong>adalah perusahaan yang menyediakan jasa pengaspalan dan penjualan material konstruksi
                            di Indonesia, berfokus pada produk berkualitas tinggi untuk berbagai kebutuhan konstruksi<br>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="contacts3 map1 cid-uoLRd1oxr3" id="contacts3-5">





        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Kontak Kami</strong></h3>
                <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-7">Jl. Sei Musi No.21 A/15,
                    Babura Sunggal, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20121</h4>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont socicon-whatsapp socicon"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5"><strong>Telepone</strong></h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a href="tel:+12345678910" class="text-black">+6281264978260</a>
                            </p>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont socicon-mail socicon"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Email</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7"><a href="mailto:info@site.com"
                                    class="text-black">ptmartelkarya@gmail.com </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="map-wrapper col-12 col-md-6">
                    <div class="google-map"><iframe frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB7QWkvlxV39ZsyKvhZRjPGVqlJFvxxNkw&amp;q=Jl. Sei Musi No.21 A/15, Babura Sunggal, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20121"
                            allowfullscreen=""></iframe></div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="footer7 cid-uoLQunlmav" once="footers" id="footer7-4">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">Martin Tambunan © Copyright 2025 - All Rights
                        Reserved
                    </p>
                </div>
            </div>
        </div>
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/parallax/jarallax.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/ytplayer/index.js"></script>
        <script src="assets/embla/embla.min.js"></script>
        <script src="assets/embla/script.js"></script>
        <script src="assets/theme/js/script.js"></script>

    </section>
@endsection
