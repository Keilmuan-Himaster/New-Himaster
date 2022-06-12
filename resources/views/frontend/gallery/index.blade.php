@extends('frontend.layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Galeri</h2>
                <ol>
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li>Galeri</li>
                </ol>
            </div>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">

        <div class="container">

            <div class="section-header">
                <h2>Galeri Himaster</h2>
                <p>Hal yang telah dikembangkan oleh Himaster</p>
            </div>

        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-app">Kaderisasi</li>
                    <li data-filter=".filter-product">Infokom</li>
                    <li data-filter=".filter-branding">Keilmuan</li>
                    <li data-filter=".filter-books">Mikat</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row g-0 portfolio-container">

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('frontend/assets/img/portfolio/app-1.jpg') }}" class="img-fluid" alt="">
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
                        <img src="{{ asset('frontend/assets/img/portfolio/books-1.jpg') }}" class="img-fluid" alt="">
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
                        <img src="{{ asset('frontend/assets/img/portfolio/app-2.jpg') }}" class="img-fluid" alt="">
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
                        <img src="{{ asset('frontend/assets/img/portfolio/app-3.jpg') }}" class="img-fluid" alt="">
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
@endsection
