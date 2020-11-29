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

{{--
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Practice Area</span>
                <h2>What We Cover</h2>
            </div>
        </div>
        <div class="row">
            @foreach($events as $event)
                <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                <div class="services-2 text-center">
                    <div class="icon-wrap">
                        <div class="mini-icon d-flex align-items-center justify-content-center"><span class="flaticon-stats"></span></div>
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-stats"></span>
                        </div>
                    </div>
                    <h2>{{ucwords($event->event_name)}}</h2>
                    <p>{{ucfirst($event->description)}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
--}}

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 style="color: white">Events</h2>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($events as $event)
                <div class="gallery">
                    <div class="date_event">
                        {{date('d-M-Y', strtotime($event->created_at))}}
                    </div>
                    <a target="_blank" href="detail/{{$event['id']}}">

                        <img src="{{asset('images/'.$event->image)}}" alt="" width="600" height="400">
                    </a>
                    <div class="desc">{{ucwords($event->event_name)}}</div>

                </div>
            @endforeach
        </div>
    </div>
</section>


{{--<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach($events as $event)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch"  >
                            <img src="{{asset('images/'.$event->image)}}" alt="">
                        </div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3 class="heading mb-3" ><a href="#" style="color: white">{{ucwords($event->event_name)}}</a></h3>

                        <span class="position mb-2">Civil Lawyer</span>
                        <div class="faded">
                            <p style="color: white">{{ucfirst($event->discription)}}</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>--}}

<br>
{{--
<section class="ftco-appointment ftco-section img" style="background-image: url({{asset('images/bg_2.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 pr-md-5">
                <div class="heading-section heading-section-white">
                    <h2 class="mb-3">We Have Great Results</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <div class="row mt-md-4">
                        <div class="col-lg-6">
                            <div class="services d-flex w-100">
                                <div class="icon icon-2 d-flex align-items-center justify-content-center">
                                    <span class="flaticon-medal"></span>
                                </div>
                                <div class="text pl-3">
                                    <h2>Award Winning</h2>
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services d-flex w-100">
                                <div class="icon icon-2 d-flex align-items-center justify-content-center">
                                    <span class="flaticon-auction"></span>
                                </div>
                                <div class="text pl-3">
                                    <h2>60 Years of Experience</h2>
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="services d-flex w-100">
                                <div class="icon icon-2 d-flex align-items-center justify-content-center">
                                    <span class="flaticon-lawyer"></span>
                                </div>
                                <div class="text pl-3">
                                    <h2>Best Attorneys team</h2>
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 half ftco-animate">
                <h2 class="mb-4">Free Case Consultation</h2>
                <form action="#" class="appointment">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Practice Areas</option>
                                            <option value="">Business Law</option>
                                            <option value="">Criminal Law</option>
                                            <option value="">Family Law</option>
                                            <option value="">Judicial Law</option>
                                            <option value="">Personal Injury</option>
                                            <option value="">Real Estate Law</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

--}}

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
@stack('scripts')
@includeIf('frontend.include.scripts')
@extends('frontend.include.footer')

