@extends('layout.master')

@section('content')

    {{-- startup --}}
    <section class="section">
        <div class="swiper bannerSwiper">
            <div class="swiper-wrapper container-1">
                <div class="swiper-slide content">
                    <div class="box">
                        <p class="bar">#NEW ARRVAL</p>
                        <h5>SHOES COLLECTION <br> 2019</h5>
                        <p>A small river named Duden Flows by their place and supplies it with the <br>
                            necessary regelialia. It is paradisematic country
                        </p>
                        <button class="btn">Discover Now</button>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/images/bg_1.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide content">
                    <div class="box">
                        <p class="bar">#NEW ARRVAL</p>
                        <h5>NEW SHOES WINTER <br> COLLECTION</h5>
                        <p>A small river named Duden Flows by their place and supplies it with the <br>
                            necessary regelialia. It is paradisematic country
                        </p>
                        <button class="btn">Discover Now</button>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/images/bg_2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- service --}}
    <section class="service">
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

    {{-- products --}}
    <section class="products">
        <div class="title">
            <h5>New Shoes Arrival</h5>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
        <div class="containery">
            @foreach ($products as $item)
                <div class="cardo">
                    <div class="image">
                        <div class="bg"></div>
                        @if(!empty($item->description))
                            <div class="offer">
                                <p>{{ $item->description }}</p>
                            </div>
                        @endif
                        <img src="{{ asset('assets/images/' . $item->image) }}" alt="{{ $item->name }}">
                        <div class="btns" style="overflow: hidden;">
                            <form action="{{ url('store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="name" value="{{ $item->name }}">
                                <input type="hidden" name="price" value="{{ $item->price }}">
                                <input type="hidden" name="offer_price" value="{{ $item->offer_price ?? 0 }}">
                                <input type="hidden" name="image" value="{{ $item->image }}">
                                <input type="hidden" name="category" value="{{ $item->category }}">
                                <input type="hidden" name="description" value="{{ $item->description ?? '' }}">
                                <button type="submit" class="btn one">ADD TO CART <i class="fa-solid fa-plus"></i></button>
                                <button type="submit" class="btn two">BUY NOW <i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="rating">
                        <p>{{ $item->category }}</p>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="subject">
                        <h6>{{ $item->name }}</h6>
                    </div>
                    <div class="price">
                        @if($item->original_price > 0 && $item->offer_price > 0)
                            <span><s>${{ $item->original_price }}</s> ${{ $item->offer_price }}</span>
                        @elseif($item->price > 0)
                            <span>${{ $item->price }}</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- collection --}}
    <section class="collection">
        <div class="container">
            <div class="box one">
                <div class="content">
                    <span>MEN'S SHOES</span>
                    <h2>Men's Collection</h2>
                    <p>Separated they live in <br>
                        Bookmarksgrove right at the coast <br>
                        of the Semantics, a large language <br>
                        ocean.
                    </p>
                    <button class="btn">shop now</button>
                </div>
            </div>
            <div class="second-c">
                <div class="box two">
                    <div class="content">
                        <span>WOMEN'S SHOES</span>
                        <h2>Women's Collection</h2>
                        <p>Separated they live in Bookmarksgrove <br>
                            right at the coast of the Semantics, a large <br>
                            language ocean.
                        </p>
                        <button class="btn">Shop now</button>
                    </div>
                </div>
                <div class="third">
                    <div class="box three">
                        <div class="content">
                            <span>SUMMER SALE</span>
                            <h2>Extra 50% Off</h2>
                            <p>Separated they live in Bookmarksgrove <br>
                                right at the coast of the Semantics, a <br>
                                large language ocean.
                            </p>
                            <button class="btn">Shop now</button>
                        </div>
                    </div>
                    <div class="box four">
                        <div class="content">
                            <span>SHOES</span>
                            <h2>Best Sellers</h2>
                            <p>Separated they live in Bookmarksgrove <br>
                                right at the coast of the Semantics, a <br>
                                large language ocean.
                            </p>
                            <button class="btn">Shop now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- timer --}}
    <section class="timer">
        <div class="container">
            <div class="image">
                <img src="{{asset('assets/images/prod-1.png')}}" alt="">
            </div>
            <div class="content">
                <span class="deal">DEAL OF THE MONTH</span>
                <h2>Deal of the month</h2>
                <div id="countdown">
                    <div><span id="days">00</span>
                        <p>DAYS</p>
                    </div>
                    <div><span id="hours">00</span>
                        <p>HOURS</p>
                    </div>
                    <div><span id="minutes">00</span>
                        <p>MINUTES</p>
                    </div>
                    <div><span id="seconds">00</span>
                        <p>SECONDS</p>
                    </div>
                </div>
                <a href="">Nike Free RN 2026 iD</a>
                <div class="price">
                    <span><s>$120.00</s></span>
                    <span>$80.00</span>
                </div>
                <div class="images">
                    <img src="{{asset('assets/images/product-6.png')}}" alt="">
                    <img src="{{asset('assets/images/product-2.png')}}" alt="">
                    <img src="{{asset('assets/images/product-4.png')}}" alt="">
                </div>
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

{{-- <div class="rate swiper-slide">
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
        <p>Garreth Smith</p>
        <span>MARKETING MANAGER</span>
    </div>
</div> --}}


{{-- <div class="cardo">
    <div class="image">
        <div class="bg"></div>
        <div class="offer">
            <p>50 % OFF</p>
        </div>
        <img src="{{asset('assets/images/product-2.png')}}" alt="">
        <div class="btns" style="overflow: hidden;">
            <button class="btn one">ADD TO CART <i class="fa-solid fa-plus"></i></button>
            <button class="btn two">BUY NOW <i class="fa-solid fa-cart-shopping"></i></button>
        </div>
    </div>
    <div class="rating">
        <p>LIFESTYLE</p>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
    </div>
    <div class="subject">
        <h6>NIKE FREE RN 2019 ID</h6>
    </div>
    <div class="price">
        <span><s>$120</s>$80</span>
    </div>
</div>
<div class="cardo">
    <div class="image">
        <div class="bg"></div>
        <img src="{{asset('assets/images/product-3.png')}}" alt="">
        <div class="btns" style="overflow: hidden;">
            <button class="btn one">ADD TO CART <i class="fa-solid fa-plus"></i></button>
            <button class="btn two">BUY NOW <i class="fa-solid fa-cart-shopping"></i></button>
        </div>
    </div>
    <div class="rating">
        <p>LIFESTYLE</p>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
    </div>
    <div class="subject">
        <h6>NIKE FREE RN 2019 ID</h6>
    </div>
    <div class="price">
        <span>$120</span>
    </div>
</div>
<div class="cardo">
    <div class="image">
        <div class="bg"></div>
        <img src="{{asset('assets/images/product-4.png')}}" alt="">
        <div class="btns" style="overflow: hidden;">
            <button class="btn one">ADD TO CART <i class="fa-solid fa-plus"></i></button>
            <button class="btn two">BUY NOW <i class="fa-solid fa-cart-shopping"></i></button>
        </div>
    </div>
    <div class="rating">
        <p>LIFESTYLE</p>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
    </div>
    <div class="subject">
        <h6>NIKE FREE RN 2019 ID</h6>
    </div>
    <div class="price">
        <span>$120</span>
    </div>
</div>
<div class="cardo">
    <div class="image">
        <div class="bg"></div>
        <img src="{{asset('assets/images/product-5.png')}}" alt="">
        <div class="btns" style="overflow: hidden;">
            <button class="btn one">ADD TO CART <i class="fa-solid fa-plus"></i></button>
            <button class="btn two">BUY NOW <i class="fa-solid fa-cart-shopping"></i></button>
        </div>
    </div>
    <div class="rating">
        <p>LIFESTYLE</p>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
    </div>
    <div class="subject">
        <h6>NIKE FREE RN 2019 ID</h6>
    </div>
    <div class="price">
        <span>$120</span>
    </div>
</div>
<div class="cardo">
    <div class="image">
        <div class="offer">
            <p>50 % OFF</p>
        </div>
        <div class="bg"></div>
        <img src="{{asset('assets/images/product-6.png')}}" alt="">
        <div class="btns" style="overflow: hidden;">
            <button class="btn one">ADD TO CART <i class="fa-solid fa-plus"></i></button>
            <button class="btn two">BUY NOW <i class="fa-solid fa-cart-shopping"></i></button>
        </div>
    </div>
    <div class="rating">
        <p>LIFESTYLE</p>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
    </div>
    <div class="subject">
        <h6>NIKE FREE RN 2019 ID</h6>
    </div>
    <div class="price">
        <span><s>$120</s>$80</span>
    </div>
</div>
<div class="cardo">
    <div class="image">
        <div class="bg"></div>
        <img src="{{asset('assets/images/product-7.png')}}" alt="">
        <div class="btns" style="overflow: hidden;">
            <button class="btn one">ADD TO CART <i class="fa-solid fa-plus"></i></button>
            <button class="btn two">BUY NOW <i class="fa-solid fa-cart-shopping"></i></button>
        </div>
    </div>
    <div class="rating">
        <p>LIFESTYLE</p>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
    </div>
    <div class="subject">
        <h6>NIKE FREE RN 2019 ID</h6>
    </div>
    <div class="price">
        <span>$120</span>
    </div>
</div>
<div class="cardo">
    <div class="image">
        <div class="bg"></div>
        <img src="{{asset('assets/images/product-8.png')}}" alt="">
        <div class="btns" style="overflow: hidden;">
            <button class="btn one">ADD TO CART <i class="fa-solid fa-plus"></i></button>
            <button class="btn two">BUY NOW <i class="fa-solid fa-cart-shopping"></i></button>
        </div>
    </div>
    <div class="rating">
        <p>LIFESTYLE</p>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
    </div>
    <div class="subject">
        <h6>NIKE FREE RN 2019 ID</h6>
    </div>
    <div class="price">
        <span>$120</span>
    </div>
</div> --}}









{{-- @foreach ($products as $item)
<div class="cardo">
    <div class="image">
        <div class="bg"></div>
        @if(!empty($item->description))
        <div class="offer">
            <p>{{ $item->description }}</p>
        </div>
        @endif
        <img src="{{ asset('assets/images/' . $item->image) }}" alt="{{ $item->name }}">
        <div class="btns" style="overflow: hidden;">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $item->id }}">
                <button type="submit" class="btn one">ADD TO CART <i class="fa-solid fa-plus"></i></button>
            </form>
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $item->id }}">
                <button type="submit" class="btn two">BUY NOW <i class="fa-solid fa-cart-shopping"></i></button>
            </form>
        </div>
    </div>
    <div class="rating">
        <p>{{ $item->category }}</p>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
    </div>
    <div class="subject">
        <h6>{{ $item->name }}</h6>
    </div>
    <div class="price">
        @if($item->original_price > 0 && $item->offer_price > 0)
        <span><s>${{ number_format($item->original_price, 2) }}</s>
            ${{ number_format($item->offer_price, 2) }}</span>
        @elseif($item->price > 0)
        <span>${{ number_format($item->price, 2) }}</span>
        @endif
    </div>
</div>
@endforeach --}}