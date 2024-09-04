<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{route('index')}}" class="navbar-brand p-0">
        <img class="logo" src="{{asset('img/spsi-logo.png')}}" alt="Logo">
        <img class="logo2" src="{{asset('img/spsi-logo2.png')}}" alt="Logo">
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

