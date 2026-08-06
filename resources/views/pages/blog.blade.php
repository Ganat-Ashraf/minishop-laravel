@extends('layout.master')

@section('content')
    <section class="bg-stand">
        <div class="title">
            <div class="links">
                <a href="{{url('/')}}">HOME</a>
                <span>BLOG</span>
            </div>
            <h1>BLOG</h1>
        </div>
    </section>

    {{-- blogs --}}

    <section class="blogs">
        <div class="container-1">
            <div class="search">
                <input type="text" placeholder="TYPE A KEYWORD AND HIT ENTER">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="box box-1">
                <h3>CATEGORIES</h3>
                <div class="div">
                    <p>Shoes</p>
                    <span>(12)</span>
                </div>
                <hr>
                <div class="div">
                    <p>Men's Shoes</p>
                    <span>(22)</span>
                </div>
                <hr>
                <div class="div">
                    <p>Women'sShoes</p>
                    <span>(47)</span>
                </div>
                <hr>
                <div class="div">
                    <p>Accesories</p>
                    <span>(42)</span>
                </div>
                <hr>
                <div class="div">
                    <p>Sports</p>
                    <span>(14)</span>
                </div>
                <hr>
                <div class="div">
                    <p>Lifestyle</p>
                    <span>(120)</span>
                </div>
            </div>
            <div class="box box-2">
                <h3>RECENT BLOG</h3>
                <div class="div">
                    <div class="image">
                        <img src="{{asset('assets/images/image_1.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{url('/blog')}}">Even the all-powerfull pointing has no control about the blind text</a>
                        <div class="data">
                            <p><i class="fa-solid fa-calendar-days"></i>April 27,2019</p>
                            <p><i class="fa-solid fa-user"></i>Admin</p>
                            <p><i class="fa-solid fa-message"></i>19</p>
                        </div>
                    </div>
                </div>
                <div class="div">
                    <div class="image">
                        <img src="{{asset('assets/images/image_2.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{url('/blog')}}">Even the all-powerfull pointing has no control about the blind text</a>
                        <div class="data">
                            <p><i class="fa-solid fa-calendar-days"></i>April 27,2019</p>
                            <p><i class="fa-solid fa-user"></i>Admin</p>
                            <p><i class="fa-solid fa-message"></i>19</p>
                        </div>
                    </div>
                </div>
                <div class="div">
                    <div class="image">
                        <img src="{{asset('assets/images/image_3.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <a href="{{url('/blog')}}">Even the all-powerfull pointing has no control about the blind text</a>
                        <div class="data">
                            <p><i class="fa-solid fa-calendar-days"></i>April 27,2019</p>
                            <p><i class="fa-solid fa-user"></i>Admin</p>
                            <p><i class="fa-solid fa-message"></i>19</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box box-3">
                <h3>TAG CLOUD</h3>
                <div class="div">
                    <p>Shop</p>
                    <p>Products</p>
                    <p>Shirt</p>
                    <p>jeans</p>
                    <p>shoes</p>
                    <p>dress</p>
                    <p>coats</p>
                    <p>jumpsuits</p>
                </div>
            </div>
            <div class="box box-4">
                <h3>Paragraph</h3>
                <div class="div">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                        voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique,
                        inventore eos fugit cupiditate numquam!</p>
                </div>
            </div>
        </div>
        <div class="container-2">
            <div class="box">
                <div class="image">
                    <img src="{{asset('assets/images/image_1.jpg')}}" alt="">
                </div>
                <div class="content">
                    <p class="data">april 9,2019 <span>Admin</span> <span class="comm"><i class="fa-solid fa-message"></i> 3</span></p>
                    <a href="{{url('/blog')}}">Even the all-powerfull pointing has no control about the blind texts</a>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <button class="btn">Read more</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('assets/images/image_2.jpg')}}" alt="">
                </div>
                <div class="content">
                    <p class="data">april 9,2019 <span>Admin</span> <span class="comm"><i class="fa-solid fa-message"></i> 3</span></p>
                    <a href="{{url('/blog')}}">Even the all-powerfull pointing has no control about the blind texts</a>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <button class="btn">Read more</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('assets/images/image_3.jpg')}}" alt="">
                </div>
                <div class="content">
                    <p class="data">april 9,2019 <span>Admin</span> <span class="comm"><i class="fa-solid fa-message"></i> 3</span></p>
                    <a href="{{url('/blog')}}">Even the all-powerfull pointing has no control about the blind texts</a>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <button class="btn">Read more</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('assets/images/image_5.jpg')}}" alt="">
                </div>
                <div class="content">
                    <p class="data">april 9,2019 <span>Admin</span> <span class="comm"><i class="fa-solid fa-message"></i> 3</span></p>
                    <a href="{{url('/blog')}}">Even the all-powerfull pointing has no control about the blind texts</a>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <button class="btn">Read more</button>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('assets/images/image_6.jpg')}}" alt="">
                </div>
                <div class="content">
                    <p class="data">april 9,2019 <span>Admin</span> <span class="comm"><i class="fa-solid fa-message"></i> 3</span></p>
                    <a href="{{url('/blog')}}">Even the all-powerfull pointing has no control about the blind texts</a>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <button class="btn">Read more</button>
                </div>
            </div>
        </div>
    </section>

@endsection