<title>@yield('event')</title>

@stack('styles')
@includeIf('frontend.include.styles')
@includeIf('frontend.include.scripts')


@includeIf('frontend.include.header')


@section('content')

    <br>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('images/new.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <h1 class="mb-0 bread">YBA-Pakistan Events</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 style="color: white"> Events Detail</h2>
                </div>
            </div>

        </div>
    </section>


    <div>
        <div class="gallery">

                <img src="{{asset('images/'.$event->image)}}" alt="" width="600" height="400">

        </div>
    </div>

    <div class="event_name">
        <div class="desc">{{ucwords($event->event_name)}}</div>
    </div>
        <div class="_date">
            {{date('d-M-Y', strtotime($event->created_at))}}
        </div>

    <div class="detail_discrption">{{ucfirst($event->discription)}} </div>

    <br>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    @stack('scripts')
    @includeIf('frontend.include.scripts')
    @extends('frontend.include.footer')

