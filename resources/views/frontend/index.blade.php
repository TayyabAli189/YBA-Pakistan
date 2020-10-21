<!DOCTYPE html>
<html lang="en">
<head>
    <title>Law </title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @stack('styles')
    @includeIf('frontend.include.styles')
    @includeIf('frontend.include.scripts')
</head>
<body>

@includeIf('frontend.include.header')

<div class="hero-wrap" style="background-image: url('{{asset('images/01.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-6 ftco-animate d-flex align-items-end">
                <div class="text w-100">
                    <h1 class="mb-4">Youth Bar Alliance</h1>
                    <p class="mb-4">Youth Bar Alliance of Pakistan (YBA-Pakistan) is aimed at to unite young lawyers under one umbrella and to provide them an organized platform for their representation instead of so-called ineffective & immature forums etc...</p>
                    {{--<p><a href="#" class="btn btn-primary py-3 px-4">Contact us</a> <a href="#" class="btn btn-white py-3 px-4">Read more</a></p>
              --}}  </div>
            </div>
          {{--  <a href="/" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
                <span class="fa fa-play"></span>
            </a>--}}
        </div>
    </div>
</div>

@yield('content')



<!-- loader -->
@includeIf('frontend.include.footer')

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@stack('scripts')
@includeIf('frontend.include.scripts')
</body>
</html>
