

    <div class="sidebar-item tags">
        <h3 class="sidebar-title">Tags</h3>
        <ul class="mt-3">
            @foreach ($tags as $data)
            <li><a href="#">{{$data->name}}</a></li>
            @endforeach
        </ul>
    </div><!-- End sidebar tags-->

