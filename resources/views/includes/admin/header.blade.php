<header class="pc-header">
    <div class="m-header">
      <a href="{{route('dashboard')}}" class="b-brand text-light">
        <!-- ========   Change your logo from here   ============ -->
        {{-- <img src="{{asset('administrator/images/logo-white.svg')}}" alt="logo image" class="logo-lg"> --}}
        SPSI Admin
      </a>
    </div>
    <div class="header-wrapper"> 
  <!-- [Mobile Media Block] start -->
  <div class="me-auto pc-mob-drp">
    <ul class="list-unstyled">
      <!-- ======= Menu collapse Icon ===== -->
      <li class="pc-h-item pc-sidebar-collapse">
        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
          <i class="ph ph-list"></i>
        </a>
      </li>
      <li class="pc-h-item pc-sidebar-popup">
        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
          <i class="ph ph-list"></i>
        </a>
      </li>
      <li class="dropdown pc-h-item">
        <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button"
          aria-haspopup="false" aria-expanded="false">
          <i class="ph ph-magnifying-glass"></i>
        </a>
        <div class="dropdown-menu pc-h-dropdown drp-search">
          <form class="px-3">
            <div class="form-group mb-0 d-flex align-items-center">
              <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
              <button class="btn btn-light-secondary btn-search">Search</button>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </div>
  <!-- [Mobile Media Block end] -->
  <div class="ms-auto">
    <ul class="list-unstyled">
      <li class="dropdown pc-h-item header-user-profile">
        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
          aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
          <img src="{{asset('administrator/images/user/avatar-2.jpg')}}" alt="user-image" class="user-avtar">
        </a>
        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
          <div class="dropdown-body">
            <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
              <ul class="list-group list-group-flush w-100">
                <li class="list-group-item">
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <a href="{{ route('logout') }}" class="dropdown-item"   onclick="event.preventDefault();this.closest('form').submit();">
                      <span class="d-flex align-items-center">
                        <i class="ph ph-power"></i>
                        <span>Logout</span>
                      </span>
                    </a>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div> </div>
</header>
  <!-- [ Header ] end -->
  
  