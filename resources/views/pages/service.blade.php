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

@endsection