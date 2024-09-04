<!DOCTYPE html>
<html lang="en">


{{-- style admin --}}
@include('includes.admin.style')


<body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">

    {{-- includes sidebar --}}
    @include('includes.admin.sidebar')

    {{-- includes header --}}
    @include('includes.admin.header')


    {{-- Conten --}}
    @yield('content')
      
        


  {{-- includes script --}}
  @include('includes.admin.script')

</body>

</html>