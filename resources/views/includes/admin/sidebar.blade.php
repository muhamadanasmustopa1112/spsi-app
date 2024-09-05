   <!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
</div>
  <!-- [ Pre-loader ] End -->
  
 <!-- [ Sidebar Menu ] start -->
 <nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="../dashboard/index.html" class="b-brand text-primary">
          <img src="{{asset('administrator/images/logo-white.svg')}}" alt="logo image" class="logo-lg">
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
  
          <li class="pc-item pc-caption">
              <label>UI Components</label>
              <i class="ph ph-compass-tool"></i>
          </li>
          <li class="pc-item {{ Route::is('dashboard') ? 'active' : '' }}">
            <a href="{{route('dashboard')}}" class="pc-link">
              <span class="pc-micon"><i class="ph ph-image"></i></span>
              <span class="pc-mtext">Banner</span>
            </a>
          </li>
          <li class="pc-item {{ Route::is('testimoni') ? 'active' : '' }}">
            <a href="{{route('testimoni')}}" class="pc-link">
              <span class="pc-micon"><i class="ph ph-user"></i></span>
              <span class="pc-mtext">Testimoni</span>
            </a>
          </li>
          <li class="pc-item {{ Route::is('service-admin') ? 'active' : '' }}">
            <a href="{{route('service-admin')}}" class="pc-link">
              <span class="pc-micon"><i class="ph ph-folder"></i></span>
              <span class="pc-mtext">Service</span>
            </a>
          </li>
          
          <li class="pc-item {{ Route::is('contact-admin') ? 'active' : '' }}">
            <a href="{{route('contact-admin')}}" class="pc-link">
              <span class="pc-micon"><i class="ph ph-phone"></i></span>
              <span class="pc-mtext">Contact</span>
            </a>
          </li>
          
          <li class="pc-item {{ Route::is('logo') ? 'active' : '' }}">
            <a href="{{route('logo')}}" class="pc-link">
              <span class="pc-micon"><i class="ph ph-images"></i></span>
              <span class="pc-mtext">Logo</span>
            </a>
          </li>

          <li class="pc-item {{ Route::is('partner') ? 'active' : '' }}">
            <a href="{{route('partner')}}" class="pc-link">
              <span class="pc-micon"><i class="ph ph-images"></i></span>
              <span class="pc-mtext">Partner</span>
            </a>
          </li>
          
        </ul>
  
      </div>
    </div>
  </nav>
  <!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->