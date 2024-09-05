<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{route('index')}}" class="navbar-brand p-0">
        @php
            $no = 0;
        @endphp
        @foreach ($logo as $data)
            @php
                $no++;
                $logoid = 'logo' . $no;
            @endphp
        <img class="{{$logoid}}" src="{{asset('storage/' . $data->images) }}" alt="Logo">
        @endforeach

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{route('index')}}" class="nav-item nav-link {{ Route::is('index') ? 'active' : '' }}">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">About</a>
            <a href="{{route('service')}}" class="nav-item nav-link {{ Route::is('service') ? 'active' : '' }}">Services</a>
            {{-- <a href="blog.html" class="nav-item nav-link">Blogs</a> --}}
           
            <a href="{{route('contact')}}" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact Us</a>
        </div>
    </div>
</nav>

