@extends('frontend.layouts.app')

@section('content')
    <!-- ======= Services Section ======= -->

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Struktur Himaster</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, obcaecati.</p>
            </div>

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/img/siskom cup.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <a href="{{url('structure/kaderisasi')}}" class="stretched-link">
                                <h3>Kaderisasi</h3>
                            </a>
                            <p>Divisi Kaderisasi merupakan salah satu Divisi dalam kepengurusan Himaster, memiliki
                                ruang lingkup kerja yang berkaitan dengan regenerasi atau kelanjutan estafet
                                kepemimpinan Himaster.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/img/services-2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <a href="{{url('structure/kaderisasi')}}" class="stretched-link">
                                <h3>Infokom</h3>
                            </a>
                            <p>Divisi Infokom adalah bidang yang menangani masalah hubungan ke masyarakat, dalam
                                hal ini berupa penyampaian informasi.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-easel"></i>
                            </div>
                            <a href="{{url('structure/kaderisasi')}}" class="stretched-link">
                                <h3>Keilmuan</h3>
                            </a>
                            <p>Keilmuan merupakan salah satu divisi dalam kepengurusan Himaster yang memiliki ruang
                                lingkup kerja ke arah pengembangan sumber daya mahasiswa Rekayasa Sistem Komputer
                                dalam bidang akademik dan riset.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/img/services-4.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <a href="{{url('structure/kaderisasi')}}" class="stretched-link">
                                <h3>Mikat</h3>
                            </a>
                            <p>Divisi Minat dan Bakat (Mikat) adalah divisi yang menangani minat dan bakat
                                mahasiswa Program Studi Rekayasa Sistem Komputer, dalam hal ini berupa pelatihan
                                yang bertujuan mengembangkan minat dan bakat serta mengikutkan turnamen yang sesuai
                                dengan minat dan bakat mahasiswa tersebut.</p>
                            <a href="{{url('structure/kaderisasi')}}" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/img/services-5.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-calendar4-week"></i>
                            </div>
                            <a href="{{url('structure/kaderisasi')}}" class="stretched-link">
                                <h3>Kesekretariatan</h3>
                            </a>
                            <p>Bidang Sekretaris dan Kesekretariatan bertugas dalam mengelola surat masuk dan surat
                                keluar serta inventarisasi barang tidak habis pakai HIMASTER.</p>
                            <a href="{{url('structure/kaderisasi')}}" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/img/services-6.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-chat-square-text"></i>
                            </div>
                            <a href="{{url('structure/kaderisasi')}}" class="stretched-link">
                                <h3>Kewirausahaan</h3>
                            </a>
                            <p>Bendahara dan Kewirausahaan merupakan bidang yang bertanggung jawab dalam mengelola
                                pemasukan dan pengeluaran serta pendapatan dari HIMASTER.</p>
                            <a href="{{url('structure/kaderisasi')}}" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section>

    <!-- End Services Section -->
@endsection
