<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sarana Prima Solusi Indonesia </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

       {{-- Style --}}
       @include('includes.style')
    </head>

    <body>
        @include('includes.header')


        {{-- Conten --}}
        @yield('content')
      
        
        {{-- Footer Sart --}}
        @include('includes.footer')
        {{-- Footer End --}}

     {{-- Script --}}
     
     @include('includes.script')
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    
     <script>
        $(document).ready(function() {
            var lastScrollTop = 1;


            $('.logo2').hide();

            $(window).scroll(function() {
                var currentScrollTop = $(this).scrollTop();
                

                if (currentScrollTop < 2) {
                    $('.logo').show();
                    $('.logo2').hide();

                    console.log(currentScrollTop)

                } else if(currentScrollTop >= 48) {
                    // Scrolling up
                    $('.logo2').show();
                    $('.logo').hide();

                }

                currentScrollTop = lastScrollTop

            });
        });
     </script>

    </body>

</html>