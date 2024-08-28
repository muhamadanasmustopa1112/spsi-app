@extends('layouts.default')

@section('content')
      
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('includes.navbar')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-light">Service</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <br>
<!-- Services Start -->
<div class="container-fluid service pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-info">Services</h4>
            <h1 class="display-5 mb-4">Kami Memberikan Layanan Terbaik</h1>
            <p class="mb-0">Sarana Prima Solusi Indonesia menyediakan jasa pembuatan
                perangkat lunak yang spesifik dan fleksibel yang disesuaikan dengan kebutuhan bisnis anda. Baik itu aplikasi
                berbasis desktop, aplikasi berbasis web, aplikasi client-server dan juga aplikasi enterprise.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/isp.png')}}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Pembangungan Infrastructure OSP dan ISP</a>
                        <p class="mb-4">Sarana Prima Solusi Indonesia (SPSI) menawarkan solusi jasa pembangunan infrastructure jaringan telekomunikasi baik OSP (Out Side Pant) maupun ISP (In Side Plant) 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/softwere.jpeg')}}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Softwere Development</a>
                        <p class="mb-4">Sarana Prima Solusi Indonesia menyediakan jasa pembuatan
                            perangkat lunak yang spesifik dan fleksibel yang disesuaikan dengan kebutuhan bisnis anda. Baik itu aplikasi
                            berbasis desktop, aplikasi berbasis web, aplikasi client-server dan juga aplikasi enterprise.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/network.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Network Development</a>
                        <p class="mb-4">Sarana Prima Solusi Indonesia dapat membantu anda dan usaha anda jika menginginkan solusi untuk Local
                            Area Network (LAN), Wide Area Network (WAN), dan atau jaringan internet. Kami siap memberikan solusi dan
                            implementasi dengan dukungan SDM yang handal dan berpengalaman.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/infrastruktur.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Infrastructure Management System</a>
                        <p class="mb-4">Sarana Prima Solusi Indonesia menawarkan solusi Infrastructure Management System untuk monitoring

                            konstruksi infrastruktur berbasis web dan android 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/M2M.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Solusi M2M</a>
                        <p class="mb-4">PT Sarana Prima Solusi Indonesia (PT SPSI) menghadirkan inovasi terbaru berupa layanan Vehicle Telematics dengan fungsi lengkap 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/e-goverment.png')}}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">E-Goverment</a>
                        <p class="mb-4">Sebuah struktur yang siap dibangun oleh Sarana Prima solusi Indonesia akan menjadi
                            jawabannya sehingga diharapkan seluruh kebijakan pemerintah semakin terarah dengan baik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

@endsection