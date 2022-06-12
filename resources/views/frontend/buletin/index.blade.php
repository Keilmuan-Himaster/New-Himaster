@extends('frontend.layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Buletin</h2>
                <ol>
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li>Buletin</li>
                </ol>
            </div>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Buletin Himaster</h2>
                <p>Buletin Himaster atau yang disingkat BUSTER adalah publikasi yang mengangkat perkembangan suatu topik atau aspek tertentu dan diterbitkan/ dipublikasikan secara teratur (berkala) dalam waktu yang relatif singkat (harian hingga bulanan). Buletin ditujukan kepada khalayak yang lebih sempit, yang berkaitan dengan bidang tertentu saja.</p>
            </div>

            <div class="row gy-5">
                <div class="col-xl-4 col-md-6 d-flex mx-auto" data-aos="zoom-in" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('frontend/assets/img/buletin.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <h4>Buletin Himaster 1</h4>
                            <span>Terbit Februari 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex mx-auto" data-aos="zoom-in" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('frontend/assets/img/buletin.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <h4>Buletin Himaster 2</h4>
                            <span>Terbit Februari 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex mx-auto" data-aos="zoom-in" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('frontend/assets/img/buletin.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <h4>Buletin Himaster 3</h4>
                            <span>Terbit Februari 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
@endsection