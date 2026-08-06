<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minishop</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    {{-- navbar --}}
    <div class="startup">
        <div class="phone">
            <p><i class="fa-solid fa-phone"></i>+1235 2355 98</p>
        </div>
        <div class="email">
            <p><i class="fa-solid fa-paper-plane"></i>YOUREMAIL@EMAIL.COM</p>
        </div>
        <div class="times">
            <p>3-5 Business days delivery & Free Returns</p>
        </div>
    </div>
    <div class="navbar" id="navbar">
        <div class="logo">
            <h3>Minishop</h3>
        </div>
        <div class="list">
            <ul class="ul">
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">CATALOG</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Shop</a></li>
                        <li><a class="dropdown-item" href="#">Single Product</a></li>
                        <li><a class="dropdown-item" href="{{url('/cart')}}">Cart</a></li>
                        <li><a class="dropdown-item" href="#">Checkout</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/about') }}">ABOUT</a></li>
                <li><a href="{{url('/blog')}}">BLOG</a></li>
                <li><a href="">CONTACT</a></li>
                <li><a href="{{url('/cart')}}"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </div>


    @yield('content')


    {{-- footer --}}

    <div class="starts">
        <div class="title">
            <h1>Follow Us On Instagram</h1>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live <br>
                the blind texts. Separated they live in
            </p>
        </div>
        <div class="container">
            <div class="boxes">
                <div class="gallery">
                    <img src="{{ asset('assets/images/gallery-1.jpg') }}" alt="">
                </div>
                <div class="icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            <div class="boxes">
                <div class="gallery">
                    <img src="{{ asset('assets/images/gallery-2.jpg') }}" alt="">
                </div>
                <div class="icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            <div class="boxes">
                <div class="gallery">
                    <img src="{{ asset('assets/images/gallery-3.jpg') }}" alt="">
                </div>
                <div class="icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            <div class="boxes">
                <div class="gallery">
                    <img src="{{ asset('assets/images/gallery-4.jpg') }}" alt="">
                </div>
                <div class="icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            <div class="boxes">
                <div class="gallery">
                    <img src="{{ asset('assets/images/gallery-5.jpg') }}" alt="">
                </div>
                <div class="icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            <div class="boxes">
                <div class="gallery">
                    <img src="{{ asset('assets/images/gallery-6.jpg') }}" alt="">
                </div>
                <div class="icon">
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="ends">
        <div class="containers">
            <div class="container-1">
                <h4>MINISHOP</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                <div class="icons">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            <div class="container-2">
                <h4>Menu</h4>
                <p>Shop</p>
                <p>About</p>
                <p>Journal</p>
                <p>Contact US</p>
            </div>
            <div class="container-3">
                <h4>HELP</h4>
                <div class="text">
                    <div class="first">
                        <p>Shipping Information</p>
                        <p>Returns & Exchange</p>
                        <p>Terms and condition</p>
                        <p>Privacy & Policy</p>
                    </div>
                    <div class="second">
                        <p>FAQs</p>
                        <p>Contact</p>
                    </div>
                </div>
            </div>
            <div class="container-4">
                <h4>Have a Questions?</h4>
                <div class="text">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>203 Fake St. Mountain View, <br> San Francisco, California, USA</p>
                </div>

                <p><i class="fa-solid fa-phone"></i> +2 392 3929 210</p>
                <p><i class="fa-solid fa-house"></i>info@yourdomain.com</p>
            </div>
        </div>
        <div class="copy">
            <p>Copyright ©2025 All rights reserved | This template is made with ❤️ by <span>GANNAT ASHRAF</span></p>
        </div>
    </div>








    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            window.addEventListener('scroll', function () {
                const navbar = document.getElementById('navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        </script>


</body>

</html>