@extends('layout.master')

@section('content')
    <section class="bg-stand">
        <div class="title">
            <div class="links">
                <a href="{{url('/')}}">HOME</a>
                <span>ABOUT</span>
            </div>
            <h1>ABOUT US</h1>
        </div>
    </section>


     {{-- service --}}
    <section class="service service-about">
        <div class="card one">
            <img src="{{asset('assets/images/gifts.png')}}" class="card-img-top one" alt="...">
            <div class="card-body one">
                <h5 class="card-title">Free Shipping</h5>
                <p class="card-text">
                    Far far away, behind the word mountains, far <br>
                    from the countries Vokalia and Consonantia, <br>
                    there live the blind texts.
                </p>
            </div>
        </div>
        <div class="card two">
            <img src="{{asset('assets/images/service.png')}}" class="card-img-top two" alt="...">
            <div class="card-body two">
                <h5 class="card-title">Support Customer</h5>
                <p class="card-text">
                    Far far away, behind the word mountains, far <br>
                    from the countries Vokalia and Consonantia, <br>
                    there live the blind texts.
                </p>
            </div>
        </div>
        <div class="card three">
            <img src="{{asset('assets/images/secure.png')}}" class="card-img-top three" alt="...">
            <div class="card-body three">
                <h5 class="card-title">Secure Payments</h5>
                <p class="card-text">
                    Far far away, behind the word mountains, far <br>
                    from the countries Vokalia and Consonantia, <br>
                    there live the blind texts.
                </p>
            </div>
        </div>
    </section>


    {{-- brief --}}
    <section class="brief">
        <div class="containery">
            <div class="image">
                <img src="{{asset('assets/images/about.jpg')}}" alt="">
            </div>
            <div class="content">
                <h2>Stablished Sinced 1975</h2>
                <p class="p1">But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                <p class="p2">But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her.</p>
                <button class="btn">shop now</button>
            </div>
        </div>
    </section>


{{-- testimonials --}}
    <section class="testimonials">
        <div class="container">
            <div class="bar">
                <div class="box one">
                    <div class="image">
                        <img src="{{asset('assets/images/gift.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        <p>Separated they live in. A small river <br> named Duden flows</p>
                    </div>
                </div>
                <div class="box two">
                    <div class="image">
                        <img src="{{asset('assets/images/heart-box.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>Valuable Gifts</h3>
                        <p>Separated they live in. A small river <br> named Duden flows</p>
                    </div>
                </div>
                <div class="box three">
                    <div class="image">
                        <img src="{{asset('assets/images/secure-data.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>All Day Support</h3>
                        <p>Separated they live in. A small river <br> named Duden flows</p>
                    </div>
                </div>
                <div class="box four">
                    <div class="image">
                        <img src="{{asset('assets/images/live-chat.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        <p>Separated they live in. A small river <br> named Duden flows</p>
                    </div>
                </div>
            </div>
            <div class="swiper testimonialSwiper">
                <div class="swiper-wrapper rate">
                    <div class="rate swiper-slide">
                        <div class="title">
                            <h2>Our satisfied customer says</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in
                            </p>
                        </div>
                        <div class="image">
                            <img src="{{asset('assets/images/person_1.jpg')}}" alt="">
                            <div class="icon">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                        </div>
                        <p class="text">
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in
                        </p>
                        <div class="person">
                            <p>Jay Carter</p>
                            <span>MARKETING MANAGER</span>
                        </div>
                    </div>
                    <div class="rate swiper-slide">
                        <div class="title">
                            <h2>Our satisfied customer says</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in
                            </p>
                        </div>
                        <div class="image">
                            <img src="{{asset('assets/images/person_2.jpg')}}" alt="">
                            <div class="icon">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                        </div>
                        <p class="text">
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in
                        </p>
                        <div class="person">
                            <p>Max Ryder</p>
                            <span>INTERFACE DESIGNER</span>
                        </div>
                    </div>
                    <div class="rate swiper-slide">
                        <div class="title">
                            <h2>Our satisfied customer says</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in
                            </p>
                        </div>
                        <div class="image">
                            <img src="{{asset('assets/images/person_3.jpg')}}" alt="">
                            <div class="icon">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                        </div>
                        <p class="text">
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in
                        </p>
                        <div class="person">
                            <p>Tyler Knox</p>
                            <span>WEB DEVELOPER</span>
                        </div>
                    </div>
                    <div class="rate swiper-slide">
                        <div class="title">
                            <h2>Our satisfied customer says</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in
                            </p>
                        </div>
                        <div class="image">
                            <img src="{{asset('assets/images/person_4.jpg')}}" alt="">
                            <div class="icon">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                        </div>
                        <p class="text">
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in
                        </p>
                        <div class="person">
                            <p>Nate West</p>
                            <span>SYSTEM ANALYST</span>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>





@endsection