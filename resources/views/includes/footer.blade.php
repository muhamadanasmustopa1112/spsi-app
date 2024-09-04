<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <a href="{{route('index')}}" class="p-0">
                        <img src="{{asset('img/spsi-logo.png')}}" alt="Logo">
                    </a>
                    <p class="mb-4">Jl. Sekemala Paledang
                        Komplek Sahmi Village No. A-1 Rt/Rw.005/006
                        Kelurahan Pasangrahan - Kecamatan Ujung Berung
                        Kota Bandung - Jawa Barat - 40617 - Indonesia
                        </p>
                    <div class="d-flex">
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Support</h4>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Contact Info</h4>

                    @foreach ($contact as $contact_data)
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-info me-3"></i>
                            <p class="text-white mb-0">{{$contact_data->email}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-info me-3"></i>
                            <p class="text-white mb-0">{{$contact_data->telepon}}</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fab fa-firefox-browser text-info me-3"></i>
                            <p class="text-white mb-0">{{$contact_data->email}}</p>
                        </div>
                    @endforeach

                    <div class="d-flex">
                        <a class="btn btn-info btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                        <a class="btn btn-info btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                        <a class="btn btn-info btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body text-center"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Sarana Prima Solusi Indonesia</a>, All right reserved.</span>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-info btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
