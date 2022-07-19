<div class="sidebar-item recent-posts">
    <h3 class="sidebar-title">Recent Posts</h3>

    <div class="mt-3">
        @foreach ($news as $data)
        <div class="post-item mt-3">
            @foreach ($data->files as $file)
            <img src="{{asset('storage/'.$file->link)}}" alt="" class="flex-shrink-0">
            @break
            @endforeach
            <div>
                <h4><a href="{{url('blog/'.$data->slug)}}">{{$data->title }}</a></h4>
                <time datetime="2020-01-01">{{\Carbon\Carbon::parse($data->created_at)->format('j F, Y') }}</time>
            </div>
        </div><!-- End recent post item-->

        @endforeach

    </div>

</div><!-- End sidebar recent posts-->
