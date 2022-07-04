@extends('frontend.layouts.app')

@section('content')
    <!-- ======= Services Section ======= -->

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="row gy-5">
                @foreach ($structures as $data)
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item">
                        <div class="img">
                            @foreach ($data->files as $file)
                            <img src="{{ asset('storage/'.$file->link) }}" class="img-fluid" alt="">

                            @endforeach
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <a href="{{url('structure/'.$data->id)}}" class="stretched-link">
                                <h3>{{$data->name}}</h3>
                            </a>
                            <p>{{$data->description}}</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                @endforeach


        </div>
    </section>

    <!-- End Services Section -->
@endsection
