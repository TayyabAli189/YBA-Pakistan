<title>@yield('title')</title>

@stack('styles')
@includeIf('frontend.include.styles')
@includeIf('frontend.include.scripts')


@includeIf('frontend.include.header')
@section('content')

{{--
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('images/bg_5.jpg')}}');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
        </div>
    </div>
</div>
</section>
--}}

{{--<section class="ftco-section ftco-no-pb ftco-no-pt">
<div class="container">
    <div class="row no-gutters">
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="img img-3 w-100 d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/about-1.jpg')}}); position: relative;">
            </div>
        </div>
        <div class="col-md-6 wrap-about ftco-animate">
            <div class="bg-light px-3 px-md-5 py-5 ">
                <div class="heading-section">
                    <span class="subheading">Welcome to Law Firm</span>
                    <h2 class="mb-3">Why to Put Trust Your Trust In Law Firm</h2>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="services d-flex w-100">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-lawyer"></span>
                            </div>
                            <div class="text pl-2">
                                <h2>Expert Attorneys</h2>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services d-flex w-100">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-discount"></span>
                            </div>
                            <div class="text pl-2">
                                <h2>Great Discount</h2>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services d-flex w-100">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-auction"></span>
                            </div>
                            <div class="text pl-2">
                                <h2>Legal Advisory</h2>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services d-flex w-100">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-handcuffs"></span>
                            </div>
                            <div class="text pl-2">
                                <h2>Quick Charges</h2>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</section>--}}



{{--<section class="ftco-section testimony-section">
<div class="img img-bg" style="background-image: url({{asset('images/bg_4.jpg')}});"></div>
<div class="overlay"></div>
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
        </div>
    </div>
    <div class="row ftco-animate">
        <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                        <div class="text">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="d-flex align-items-center">
                                <div class="user-img" style="background-image: url({{asset('images/person_1.jpg')}})"></div>
                                <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                        <div class="text">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="d-flex align-items-center">
                                <div class="user-img" style="background-image: url({{asset('images/person_2.jpg')}})"></div>
                                <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                        <div class="text">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="d-flex align-items-center">
                                <div class="user-img" style="background-image: url({{asset('images/person_3.jpg')}})"></div>
                                <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                        <div class="text">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="d-flex align-items-center">
                                <div class="user-img" style="background-image: url({{asset('images/person_1.jpg')}})"></div>
                                <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                        <div class="text">
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <div class="d-flex align-items-center">
                                <div class="user-img" style="background-image: url({{asset('images/person_2.jpg')}})"></div>
                                <div class="pl-3">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>--}}

<br>
<section class="ftco-appointment ftco-section img" style="background-image: url({{asset('images/bg_2.jpg')}});">
<div class="overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12 pr-md-5">
            <div class="heading-section heading-section-white">
                <h2 class="mb-3">About Us</h2>
                <p class="about" style="font-size:110%;">Youth Bar Alliance of Pakistan (YBA-Pakistan) is aimed at to unite young lawyers under one umbrella and to provide them an organized platform for their representation instead of so-called ineffective & immature forums etc...
                    <br>
                    For further info read the manifesto of YBA-Pakistan. We invite to all young lawyers, come forward & join the YBA from all corners of Pakistan to secure your future and the future of the whole fraternity & to secure the honor & prestige of the fraternity. Regards.
                    Team YBA-Pakistan.
                </p>
                {{--<div class="row mt-md-4">
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
                </div>--}}
            </div>
        </div>
   {{--     <div class="col-md-6 half ftco-animate">
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
        </div>--}}
    </div>
</div>
</section>

<br><br>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@stack('scripts')
@includeIf('frontend.include.scripts')
@extends('frontend.include.footer')

