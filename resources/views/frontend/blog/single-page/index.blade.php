@extends('frontend.layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $blog->title }}</h2>
                <ol>
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><a href="{{ url('blog') }}">Berita</a></li>
                    <li>{{ $blog->title }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            @foreach ($blog->files as $file)
                            <img src="{{ asset('storage/'.$file->link) }}" alt="" class="img-fluid">

                            @endforeach
                        </div>

                        <h2 class="title">{{ $blog->title }}
                        </h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="#">Admin</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="#">{{ \Carbon\Carbon::parse($blog->created_at)->format('j F, Y') }}
                                    </a>
                                </li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            <p>
                                {!! $blog->body !!}
                            </p>
                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Turnamen</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div><!-- End meta bottom -->

                    </article><!-- End blog post -->

                    <div class="post-author d-flex align-items-center">
                        <img src="{{ asset('frontend/assets/img/blog/blog-author.jpg') }}"
                            class="rounded-circle flex-shrink-0" alt="">
                        <div>
                            <h4>Jane Smith</h4>
                            <div class="social-links">
                                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas
                                repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde
                                voluptas.
                            </p>
                        </div>
                    </div><!-- End post author -->
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        @include('frontend.layouts.recent-post')
                        @include('frontend.layouts.tag')

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->
@endsection
