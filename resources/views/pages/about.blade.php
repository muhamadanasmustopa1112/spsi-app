@extends('layouts.default')

@section('content')
    
    
   <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            @include('includes.navbar')
            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-light">About</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-info">About Us</h4>
                            <div class="row g-4">
                                <div class="col">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-info">Legalitas PT. Sarana Prima Solusi Indoensia</h4>
                            <div class="row g-4">
                                <div class="col">
                                    <p class="mb-4">PT SARANA PRIMA SOLUSI INDONESIA
                                        didirikan berdasarkan Akta Pendirian Perseroan
                                        Terbatas yang dikeluarkan oleh Kantor Notaris
                                        LINCE HUTAHAYAN,S.H
                                        TANGGAL 12 JUNI 2015
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-info">Pengalaman Kerja</h4>
                            <div class="row g-4">
                                <div class="col">
                                    <p class="mb-4">Perusahaan kami adalah perusahaan yang
                                        bergerak di bidang kontraktor dan distributor
                                        infrastruktur telekomunikasi dan teknologi informasi.
                                        PT SARANA PRIMA SOLUSI INDONESIA memiliki
                                        pengalaman kerja di bidang fiber optic dan kami
                                        memiliki semangat dan kemampuan/pengalaman
                                        dalam mengerjakan pembangunan FTTH di seluruh
                                        Indonesia. Perusahaan kami juga sudah terdaftar
                                        sebagai mitra/supplier pada PT Telkom Indonesia dan
                                        PT Telkom Akses Indonesia.<br><br>
                                        Adapun kami para pendiri dan personil dari
                                        perusahaan ini adalah memiliki pengalaman kerja di
                                        Project Fiber Optik dan sebagai Distributor Material
                                        atau Alat Kerja Jaringan Telekomunikasi, sebelumnya
                                        kami sudah mengerjakan berbagai macam project
                                        fiber optic di seluruh Indonesia dan mensupplay
                                        material project fiber optic ke berbagai Perusahaan
                                        kontraktor telekomunikasi di seluruh Indonesia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <div class="row g-4">
                                <div class="col">
                                    <br>
                                    <h4 class="text-info">Visi</h4>
                                    <p class="mb-4">Menjadi perusahaan kontraktor dan distributor
                                        jaringan telekomunikasi dan teknologi informasi
                                        kelas dunia.
                                    </p>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col">
                                    <br>
                                    <h4 class="text-info">Misi</h4>
                                    <ul>
                                        <li>Menjadi kebanggaan Indonesia dalam bidang
                                            kontraktor dan distributor jaringan telekomunikasi
                                            dan teknologi informasi dengan memberikan
                                            kinerja terbaik kami
                                        </li>
                                        <li>Menyediakan standar operasional yang tinggi dan
                                            unggul untuk kepuasan pelanggan.
                                        </li>
                                        <li>Menjaga dan meningkatkan layanan secara terus
                                            menerus untuk customer dan lingkungan.
                                        </li>
                                        <li>Menerapkan standar keselamatan kerja dan
                                            teknologi tepat guna.
                                        </li>
                                    </ul>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Sertifikasi start -->
        <div class="container-fluid feature pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-info">Sertifikasi</h4>
                    <p class="mb-0">PT. Sarana Prima Solusi Indoensia tentunya sudah terverifikasi
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('img/iso-spsi.jpg')}}" class="img-fluid" alt="ISO Sertifikasi">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{asset('img/spsi-sertifikasi.jpg')}}" class="img-fluid" alt="ISO Sertifikasi2">

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <img src="{{asset('img/spsi-sertifikasi2.jpg')}}" class="img-fluid" alt="ISO Sertifikasi3">

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <img src="{{asset('img/spsi-sertifikasi3.jpg')}}" class="img-fluid" alt="ISO Sertifikasi4">

                    </div>
                </div>
            </div>
        </div>
        <!-- Sertifikasi End -->

@endsection