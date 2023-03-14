@extends('frontend.layouts.app')

@section('content')
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('img/HIMASTER.png') }}" class="img-fluid animated">
            <h2>Selamat Datang di Website <span>Himaster</span></h2>
            <p>Siap Sedia Kompak</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/embed/AcRcXtGawXI"
                    class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Video
                        Profil Siskom</span></a>
            </div>
        </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Apa Itu Himaster?</h2>
                <p>Himaster merupakan suatu organisasi kepengurusan Himpunan yang berada di program studi Rekayasa
                    Sistem Komputer yang dimana didalamnya banyak sekali kegiatan-kegiatan serta program kerja
                    selalu berkembang dan membuat Himaster menjadi lebih baik untuk kedepannya.</p>
            </div>

            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('frontend/assets/img/visimisi.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-7">
                    <h3 class="pt-0 pt-lg-5">Lebih dekat dengan Himaster</h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Visi</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Misi</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Sejarah</a></li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">

                            <p class="fst-italic">Menjadikan Himaster sebagai rumah yang berasaskan kekeluargaan
                                untuk membentuk kader yang aspiratif dan inovatif dengan mengembangkan potensi
                                keilmuan sesuai Tri Dharma Perguruan Tinggi yaitu pendidikan dan pengajaran,
                                penelitian, dan pengembangan, serta pengabdian kepada masyarakat.</p>
                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">

                            <p class="fst-italic">Adapun misi dari Himaster antara lain : </p>

                            <div class="d-flex align-items-center mt-4">
                                <h4>1</h4>
                            </div>
                            <p>Mewadahi aspirasi mahasiswa Rekayasa Sistem Komputer FMIPA Untan.</p>

                            <div class="d-flex align-items-center mt-4">
                                <h4>2</h4>
                            </div>
                            <p>Mengadakan kegiatan-kegiatan yang menunjang keilmuan. </p>

                            <div class="d-flex align-items-center mt-4">
                                <h4>3</h4>
                            </div>
                            <p>Melaksanakan kaderisasi agar terbentuknya generasi penerus.</p>

                            <div class="d-flex align-items-center mt-4">
                                <h4>4</h4>
                            </div>
                            <p>Menjalin hubungan yang baik dengan cara memperluas jaringan dengan civitas akademika
                                dan alumni serta organisasi atau lembaga lain.</p>

                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab3">

                            <p class="fst-italic">Himaster merupakan suatu organisasi kepengurusan Himpunan yang
                                berada di program studi Rekayasa Sistem Komputer yang dimana didalamnya banyak
                                sekali kegiatan-kegiatan serta program kerja selalu berkembang dan membuat Himaster
                                menjadi lebih baik untuk kedepannya.</p>
                        </div><!-- End Tab 3 Content -->

                    </div>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <h3 class="img-fluid">Bios</h3>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="img-fluid">Screen</h3>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="img-fluid">Siskom Cup</h3>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="img-fluid">IT Club</h3>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="img-fluid">Tutorial</h3>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="img-fluid">Spirit Day</h3>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="img-fluid">Paste</h3>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="img-fluid">SGTS</h3>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="img-fluid">CC</h3>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-out">

            <div class="row g-5">

                <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                    <h3>BERITA TERBARU !!!!</h3>
                    <h4>{{ $content->title }}</h4>
                    <p> {!! Str::limit($content->body, 50, $end = '....') !!}</p>
                    <a class="cta-btn align-self-start" href="#">Lebih Banyak</a>
                </div>


                <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                    <div class="img">
                        @foreach ($content->files as $file)
                            <img src="{{ asset('storage/' . $file->link) }}" alt="" class="img-fluid">
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= On Focus Section ======= -->
    <section id="onfocus" class="onfocus">
        <div class="container-fluid p-0" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 video-play position-relative mx-auto">
                    <a href="https://www.youtube.com/embed/AcRcXtGawXI" class="glightbox play-btn"></a>
                </div>
            </div>

        </div>
    </section><!-- End On Focus Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row gy-4 d-flex">
                @foreach ($structures as $data)
                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#{{ Str::slug($data->name) }}">
                            <i class="bi bi-binoculars color-cyan"></i>
                            <h4>{{ $data->name }}</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->
                @endforeach
            </ul>

            <div class="tab-content">
                @foreach ($structures as $data)
                    <div class="tab-pane" id="{{ Str::slug($data->name) }}">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>{{ $data->name }}</h3>
                                <p class="fst-italic">
                                    {{ $data->description }}
                                </p>
                            </div>
                                <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <img src="{{ asset('storage/' . $data->files->last()->link) }}" alt="" class="img-fluid">
                                </div>
                        </div>
                    </div><!-- End Tab Content 1 -->
                @endforeach

            </div>

        </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content px-xl-5">
                        <h3>FAQ</strong></h3>
                        <p>
                            Pertanyaan yang biasa ditanyakan kepada HIMASTER
                        </p>
                    </div>

                    <div class="accordion accordion-flush px-xl-5" id="faqlist">

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Kapan HIMASTER dibentuk?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    HIMASTER dibentuk pada tanggal 10 Mei 2009, dimana ketua HIMASTER pertama adalah
                                    Muhammad Jumeidi.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Apa saja keuntungan menjadi angota HIMASTER ?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Selain bisa belajar bareng pemrograman dan dunia teknologi lainnya, juga belajar
                                    berorganisasi, meningkatkan kemampuan public speaking, leadership, kewirausahaan dan
                                    masih banyak lagi.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Dimana bisa mendapatkan info-info terbaru terkait HIMASTER?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Teman-teman bisa nih pantengin terus akun media social Himaster di :
                                    <br>
                                    Instagram : @himasterfmipauntan
                                    <br>
                                    Website : himaster.id

                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Apa aja kegiatan dari HIMASTER?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    HIMASTER mempunyai banyak kegiatan yang sangat menarik mulai dari pemrograman, olahraga,
                                    Desain Grafis dan masih banyak lagi. yang dilaksanakan dalam bentuk event keren mulai
                                    dari Siskom Cup, Screen, IT Club dan lain-lain.
                                </div>
                            </div>
                        </div><!-- # Faq item-->
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                    style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Ketua Umum Himaster</h2>
            </div>
            @foreach ($structures as $structure)
            @if ($structure->name == 'Ketua')
                @foreach ($structure->members as $data)
                <div class="row gy-5">
                    <div class="col-xl-4 col-md-6 d-flex mx-auto" data-aos="zoom-in" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('storage/'.$data->files->last()->link) }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>{{$data->name}}</h4>
                                <span>{{$data->structure->name }} Himaster</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                </div>

                @endforeach

            @endif

            @endforeach

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Berita Himaster</h2>
                <p>Berita seputar Himaster, teknologi, dan lain lain</p>
            </div>

            <div class="row">
                @foreach ($news as $data)
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            @foreach ($data->files as $file)
                                <div class="post-img">
                                    <img src="{{ asset('storage/' . $file->link) }}" class="img-fluid" alt="">
                                </div>
                            @break
                        @endforeach
                        <div class="meta">
                            <span
                                class="post-date">{{ \Carbon\Carbon::parse($data->created_at)->format('j F, Y') }}</span>
                            <span class="post-author"> / Admin </span>
                        </div>
                        <h3 class="post-title">{{ $data->title }}</h3>
                        <p>{!! Str::limit($data->body, 50, $end = '...') !!}</p>
                        <a href="{{url('blog/'.$data->slug)}}" class="readmore stretched-link"><span>Selengkapnya</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</section><!-- End Recent Blog Posts Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-header">
            <h2>Contact Us</h2>
            <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad
                dolores adipisci aliquam.</p>
        </div>

    </div>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.816341469762!2d109.3430738146338!3d-0.05706503553610213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59972b85950f%3A0x3e453dacc71a6e21!2sGedung%20Prodi%20Sistem%20Komputer!5e0!3m2!1sen!2sid!4v1654974795325!5m2!1sen!2sid"
            style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- End Google Maps -->
<!-- End Contact Section -->
@endsection
