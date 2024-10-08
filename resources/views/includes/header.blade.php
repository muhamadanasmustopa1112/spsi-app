        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-info" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-flex flex-wrap" style="padding: 10px;">
                        @foreach ($contact as $data)
                            
                
                        <a href="https://maps.app.goo.gl/hYiurirahkvUULU6A" target="_blank" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-info me-2"></i>Find A Location</a>
                        <a href="tel:+622287355420" class="text-muted small me-4"><i class="fas fa-phone-alt text-info me-2"></i>{{$data->telepon}}</a>
                        <a href="mailto:{{$data->email}}" class="text-muted small me-0"><i class="fas fa-envelope text-info me-2"></i>{{$data->email}}</a>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero End -->
