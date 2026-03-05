@extends('layouts.default')

@section('content')
    


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            @include('includes.navbar')

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                
            @foreach ($banner as $data)
                    
                <div class="header-carousel-item">
                    <img src="{{asset('storage/' . $data->images) }}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row gy-0 gx-5">
                                <div class="col-lg-0 col-xl-5"></div>
                                <div class="col-xl-7 animated fadeInLeft">
                                    <div class="text-sm-center text-md-end">
                                        <h4 class="text-info text-uppercase fw-bold mb-4">Sarana Prima Solusi Indonesia</h4>
                                        <h3 class="display-4 text-uppercase text-white mb-4">{{$data->title}}</h3>
                                        <p class="mb-5 fs-5">{{$data->description}}
                                        </p>
                                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                            <h2 class="text-white me-2">Follow Us:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->



  <!-- Abvout Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-info">About Us</h4>
                    <h1 class="display-5 mb-4">Sarana Prima Solusi Indonesia (SPSI)</h1>
                    <p class="mb-4">PT SARANA PRIMA SOLUSI INDONESIA
                        adalah salah satu perusahaan yang bergerak
                        dibidang kontraktor dan distributor infrastruktur
                        jaringan telekomunikasi dan teknologi informasi
                        yang sudah tersertifikasi di Indonesia.
                        Dengan didukung oleh sumber daya
                        manusia yang berkualitas dibidangnya, PT
                        Sarana Prima Solusi Indonesia berkomitmen
                        untuk menjadi perusahaan terkemuka dengan
                        didukung penerapan teknologi terbaru,
                        peningkatan kualitas pelayanan, dan secara
                        terus menerus mengembangkan sumber daya
                        manusia, infrastruktur bersama dengan
                        perluasan fasilitas, dan jaringan yang lebih luas.
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="fas fa-lightbulb fa-3x text-info"></i></div>
                                <div class="ms-4">
                                    <h4>Business Consuluting</h4>
                                    <p>Temukan solusi permasalahan anda dengan tim profesional kami.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="bi bi-bookmark-heart-fill fa-3x text-info"></i></div>
                                <div class="ms-4">
                                    <h4>Year Of Expertise</h4>
                                    <p>PT. Sarana Prima Solusi sudah bergerak dibidang infrastructure jaringan dari tahun 2015.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-info rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-phone-alt fa-2x text-info me-4"></i>
                                <div>
                                    <h4>Call Us</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;">(022) 87355420</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-info rounded position-relative overflow-hidden">
                    <img src="{{asset('img/kontraktor2.png')}}" class="img-fluid rounded w-100" alt="">
                    
            
                    <div class="rounded-bottom">
                        <img src="{{asset('img/kontraktor3.jpg')}}" class="img-fluid rounded-bottom w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

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

            @foreach ($service as $service_data)
                
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('storage/' . $service_data->images) }}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">{{$service_data->title}}</a>
                        <p class="mb-4">{{$service_data->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Services End -->


<!-- Partner Start -->
<div class="container-fluid team pb-5 text-center">
    <div class="container pb-5">
        <div class=" mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-info">Our Client</h4>
    
        </div>
        <br>
        <div class="row g-4 text-center">
            <center>
 
            <swiper-container class="mySwiper" effect="cards" grab-cursor="true">

                @foreach ($partner as $data)
                    <swiper-slide>
                            <img src="{{asset('storage/' . $data->images) }}" class="img-fluid" alt="">
                    </swiper-slide>
                @endforeach

            </swiper-container>
            
        </center>
        </div>
    </div>
</div>
<!-- Partner End -->


<script>



</script>


@endsection