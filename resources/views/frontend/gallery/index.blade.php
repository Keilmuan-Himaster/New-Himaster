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
                    @foreach ($structures as $data)
                        <li data-filter="#{{Str::slug($data->name)}}">{{$data->name}}</li>
                    @endforeach
                </ul><!-- End Portfolio Filters -->

                <div class="row g-0 portfolio-container">
                    @foreach ($gallery as $data)
                    <div id="{{Str::slug($data->structure->name)}}" class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset($data->image) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$data->title}}</h4>
                            <a href="{{ asset($data->image) }}" title="{{$data->title}}"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    @endforeach
                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->
@endsection
