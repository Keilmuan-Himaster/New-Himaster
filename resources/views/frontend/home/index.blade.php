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
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                    class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Video
                        Profil Siskom</span></a>
            </div>
        </div>
    </section>
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-activity icon"></i></div>
                        <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                        <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                        <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                        <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Featured Services Section -->

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
                    {{-- <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div> --}}
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
                        <img src="{{ asset('storage/'.$file->link) }}" alt="" class="img-fluid">

                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= On Focus Section ======= -->
    <section id="onfocus" class="onfocus">
        <div class="container-fluid p-0" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-6 video-play position-relative">
                    <a href="https://www.youtube.com/watch?v=6kguaGI7aZg" class="glightbox play-btn"></a>
                </div>
                <div class="col-lg-6">
                    <div class="content d-flex flex-column justify-content-center h-100">
                        <h3>Voluptatem dignissimos provident quasi corporis</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</li>
                            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in
                                voluptate velit.</li>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <a href="#" class="read-more align-self-start"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
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

                <div class="tab-pane active show" id="tab-1">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                            <h3>HIMASTER</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ullam ratione architecto
                                delectus assumenda optio debitis ab magnam eos, impedit veritatis quod nihil praesentium
                                provident. Voluptatum doloribus odit minus cupiditate? Enim beatae sit, voluptatum maiores,
                                dicta incidunt non odit tempore vitae a excepturi qui saepe. Molestiae ut sit provident
                                eligendi maiores blanditiis repellat maxime sequi voluptatem mollitia sint vitae vero quam
                                dignissimos, omnis ab quas? Soluta magni, fugit alias esse ipsam ad blanditiis quibusdam
                                voluptatibus iusto, dolor numquam perspiciatis autem excepturi! Incidunt vitae itaque iste
                                fuga distinctio voluptatem quidem ratione natus aliquam ipsum accusamus nihil labore, aut ex
                                doloremque eius.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i>Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Rem, tenetur hic maiores ad rerum ducimus molestias voluptates illo
                                    vitae, temporibus aperiam? Amet saepe fugit iure, quae blanditiis ea necessitatibus
                                    omnis.</li>
                                <li><i class="bi bi-check-circle-fill"></i>Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Nesciunt quae enim, magnam sunt quaerat quibusdam et? Harum sapiente
                                    aliquid eius incidunt in molestias, corrupti vero reiciendis quibusdam consectetur
                                    exercitationem totam.</li>
                                <li><i class="bi bi-check-circle-fill"></i>Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Atque aut accusantium quia, consectetur soluta fuga tenetur quis et
                                    eos vel officia dolorum veritatis mollitia in exercitationem suscipit illo velit
                                    necessitatibus?</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('frontend/assets/img/features-1.svg') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 1 -->
                @foreach ($structures as $data)
                    <div class="tab-pane" id="{{ Str::slug($data->name) }}">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>{{ $data->name }}</h3>
                                <p class="fst-italic">
                                    {{ $data->description }}
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit
                                        in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                    non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                            </div>
                            @foreach ($data->files as $files)
                                <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <img src="{{ asset('storage/' . $files->link) }}" alt="" class="img-fluid">
                                </div>
                            @endforeach
                        </div>
                    </div><!-- End Tab Content 1 -->
                @endforeach

            </div>

        </div>
    </section>
    <!-- End Features Section -->



    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="testimonials-slider swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="{{asset('frontend/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="{{asset('frontend/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="{{asset('frontend/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="{{asset('frontend/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="{{asset('frontend/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
            </div>

        </div>
        </section>
        <!-- End Testimonials Section --> --}}

    <!-- ======= Pricing Section ======= -->
    {{-- <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Our Pricing</h2>
            <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
            </div>

            <div class="row gy-4">

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="pricing-item">

                <div class="pricing-header">
                    <h3>Free Plan</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                </div>

                <ul>
                    <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                    <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>

                <div class="text-center mt-auto">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>

                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="pricing-item featured">

                <div class="pricing-header">
                    <h3>Business Plan</h3>
                    <h4><sup>$</sup>29<span> / month</span></h4>
                </div>

                <ul>
                    <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</spa>
                    </li>
                    <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</spa>
                    </li>
                    <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>

                <div class="text-center mt-auto">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>

                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                <div class="pricing-item">

                <div class="pricing-header">
                    <h3>Developer Plan</h3>
                    <h4><sup>$</sup>49<span> / month</span></h4>
                </div>

                <ul>
                    <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                    <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>

                <div class="text-center mt-auto">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>

                </div>
            </div><!-- End Pricing Item -->

            </div>

        </div>
        </section> --}}
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content px-xl-5">
                        <h3>FAQ</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                    </div>

                    <div class="accordion accordion-flush px-xl-5" id="faqlist">

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Non consectetur a erat nam at lectus urna duis?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                    laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                    rhoncus dolor purus non.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                    Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                    suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                    convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-5">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                    suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                    Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                    turpis cursus in
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

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">

        <div class="container">

            <div class="section-header">
                <h2>Portfolio</h2>
                <p>Hal yang telah dikembangkan oleh Himaster</p>
            </div>

        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Product</li>
                    <li data-filter=".filter-branding">Branding</li>
                    <li data-filter=".filter-books">Books</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row g-0 portfolio-container">

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('frontend/assets/img/portfolio/app-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <a href="{{ 'assets/img/portfolio/app-1.jpg' }}" title="App 1"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="{{ asset('frontend/assets/img/portfolio/product-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <a href="{{ 'assets/img/portfolio/product-1.jpg' }}" title="Product 1"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="{{ asset('frontend/assets/img/portfolio/branding-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <a href="{{ 'assets/img/portfolio/branding-1.jpg' }}" title="Branding 1"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="{{ asset('frontend/assets/img/portfolio/books-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Books 1</h4>
                            <a href="{{ 'assets/img/portfolio/books-1.jpg' }}" title="Branding 1"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('frontend/assets/img/portfolio/app-2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <a href="{{ 'assets/img/portfolio/app-2.jpg' }}" title="App 2"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="{{ asset('frontend/assets/img/portfolio/product-2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <a href="{{ 'assets/img/portfolio/product-2.jpg' }}" title="Product 2"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="{{ asset('frontend/assets/img/portfolio/branding-2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <a href="{{ 'assets/img/portfolio/branding-2.jpg' }}" title="Branding 2"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="{{ asset('frontend/assets/img/portfolio/books-2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Books 2</h4>
                            <a href="{{ 'assets/img/portfolio/books-2.jpg' }}" title="Branding 2"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('frontend/assets/img/portfolio/app-3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <a href="{{ 'assets/img/portfolio/app-3.jpg' }}" title="App 3"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="{{ asset('frontend/assets/img/portfolio/product-3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <a href="{{ 'assets/img/portfolio/product-3.jpg' }}" title="Product 3"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="{{ asset('frontend/assets/img/portfolio/branding-3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <a href="{{ 'assets/img/portfolio/branding-3.jpg' }}" title="Branding 2"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="{{ asset('frontend/assets/img/portfolio/books-3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Books 3</h4>
                            <a href="{{ 'assets/img/portfolio/books-3.jpg' }}" title="Branding 3"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Ketua Umum Himaster</h2>
                <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam
                    voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
            </div>

            <div class="row gy-5">
                <div class="col-xl-4 col-md-6 d-flex mx-auto" data-aos="zoom-in" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('frontend/assets/img/reza.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <h4>Reza</h4>
                            <span>Ketua Umum Himaster</span>
                        </div>
                    </div>
                </div>
                <!-- End Team Member -->

            </div>

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
                                    <img src="{{ asset('storage/'.$file->link) }}" class="img-fluid"
                                        alt="">
                                </div>
                            @break
                            @endforeach
                            <div class="meta">
                                <span class="post-date">{{ \Carbon\Carbon::parse($data->created_at)->format('j F, Y') }}</span>
                                <span class="post-author"> / Admin </span>
                            </div>
                            <h3 class="post-title">{{ $data->title }}</h3>
                            <p>{!! Str::limit($data->body, 50, $end = '...') !!}</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Selengkapnya</span><i
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
