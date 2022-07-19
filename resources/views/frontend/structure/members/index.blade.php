@extends('frontend.layouts.app')

@section('content')
<section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="row gy-5">
            @foreach ($member as $data)
            <div class="col-xl-4 col-md-6 d-flex mx-auto" data-aos="zoom-in" data-aos-delay="400">
                <div class="team-member">
                    <div class="member-img">
                        @if (isset($data->files->last()->link))

                        <img src="{{ asset('storage/'.$data->files->last()->link) }}" class="img-fluid" alt="">
                        @else
                        <img src="{{asset('frontend/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">

                        @endif
                    </div>
                    <div class="member-info">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>{{$data->name}}</h4>
                        <span>{{$data->grade}} </span>
                        <span>{{$data->year}} </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</section>
<!-- End Team Section -->
@endsection
