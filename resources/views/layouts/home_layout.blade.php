<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS</title>
    @include('partials.top')
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" src="{{ asset('home-assets/images/loader.png') }}" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">
 @include('partials.header')
    @yield('home-content')

    @include('partials.footer')

    <!-- /.search-popup -->
</div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    @include('partials.bottom')
</body>


</html>