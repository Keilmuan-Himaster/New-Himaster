@extends('frontend.layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ Auth::check() ? 'Selamat ' . $currentTime : 'Silakan login terlebih dahulu' }}</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Presensi Himaster</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        @if (Auth::check())
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-4 mx-auto">
                                            <img src="{{ asset('img/presensi.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mx-auto text-center">
                                            <h3>{{ Auth::check() ? 'Hai ' . $user->name : 'Haloo...' }}</h3>
                                        </div>
                                    </div>
                                    @if (Auth::check())
                                        @foreach ($check_code as $event)
                                            @foreach ($event->code as $code)
                                                @if ($code->status == 0)
                                                    @continue
                                                @else
                                                    @if ($waktu < $code->end)
                                                        <div class="row my-3">
                                                            <div class="col-md-4">
                                                                Kegiatan : {{ $event->name }}
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="container">
                                                                    <form action="{{ route('presensi.store') }}"
                                                                        method="post" enctype="multipart/form">
                                                                        @csrf
                                                                        <div class="input-group">
                                                                            <input type="text" id="code"
                                                                                name="code" class="form-control"
                                                                                placeholder="CODE....">
                                                                            <div class="input-group-prepend">
                                                                                <button class="btn btn-outline-secondary"
                                                                                    type="submit">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                        <input type="text" id='id' name='id'
                                                                            hidden value="{{ $code->id }}">
                                                                        <input type="text" id="cek" name="cek"
                                                                            hidden value="{{ $code->code }}">
                                                                        <input type="text" id="code_id" name="code_id"
                                                                            hidden value="{{ $code->id }}">
                                                                        <input type="text" id="description"
                                                                            name="description" hidden value="web">
                                                                        <input type="text" id="title" name="title"
                                                                            hidden value="{{ $code->title }}">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @else
                            <div class="swiper-wrapper align items center">
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-4 mx-auto">
                                                <img src="{{ asset('img/presensi.png') }}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mx-auto text-center">
                                                <h3>Haloo Login dulu ya</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: Presence Web</li>
                            <li><strong>Project date</strong>: 10 October, 2021</li>
                            <li><strong>Project Lead</strong>: Madajabbar Palapa Hakim & Muhammad Iqbal</a></li>
                        </ul>
                    </div>
                    @if (Auth::check())
                        <div class="portfolio-info my-4">
                            <h2>Masukan Kode Kegiatan</h2>
                            <form action="{{route('presensi.addEvent')}}" method="post" enctype="multipart/form">
                                @csrf
                                <input type="text" class="form-control" name="check_code" placeholder="contoh : cx2qqw">
                                <button type="submit" class="btn btn-secondary btn-block mt-2"> Simpan</button>
                            </form>
                        </div>
                    @endif
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
