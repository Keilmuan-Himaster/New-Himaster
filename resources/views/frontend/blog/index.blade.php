@extends('frontend.layouts.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Berita</h2>
            <ol>
              <li><a href="{{url('')}}">Home</a></li>
              <li>Berita</li>
            </ol>
          </div>

        </div>
      </div><!-- End Breadcrumbs -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

          <div class="row g-5">

            <div class="col-lg-8">

              <div class="row gy-4 posts-list">

                @foreach ($blog as $data)
                <div class="col-lg-6">
                  <article class="d-flex flex-column">

                    <div class="post-img">
                        @foreach ($data->files as $file)
                        <img src="{{asset('storage/'.$file->link)}}" alt="" class="img-fluid">

                        @endforeach
                    </div>

                    <h2 class="title">
                      <a href="{{url('blog/'.$data->slug)}}">{{$data->title}}</a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{url('blog/'.$data->slug)}}">Admin</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{url('blog/'.$data->slug)}}">{{ \Carbon\Carbon::parse($data->created_at)->format('j F, Y') }}</a></li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                        {!!Str::limit($data->body, 50, $end='...')!!}
                      </p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href="{{url('blog',$data->slug)}}">Read More</a>
                    </div>

                  </article>
                </div><!-- End post list item -->
                @endforeach

              </div><!-- End blog posts list -->

              <div class="blog-pagination">
                  <ul class="justify-content-center">
                    {{$blog->links()}}
                </ul>
              </div><!-- End blog pagination -->

            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    @include('frontend.layouts.tag')
                </div>
            </div>

          </div>

        </div>
      </section><!-- End Blog Section -->

@endsection
