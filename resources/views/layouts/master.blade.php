<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/demo.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.default.css') }}" rel="stylesheet">

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>

<body>
    <div id="app">
        <header class="header header-absolute">

            <!-- Navbar-->
            <nav class="navbar navbar-expand-lg bg-transparent navbar-sticky navbar-airy navbar-dark bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light">
                <div class="container">
                    <!-- Navbar Header  --><a href="index-2.html" class="navbar-brand">
                        <svg class="navbar-brand-svg" viewBox="0 0 65 16" width="85" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="navbar-brand-svg-text" d="M5.72266 18.1562C4.88281 18.1562 4.08529 18.0033 3.33008 17.6973C2.58138 17.3913 1.94661 16.9355 1.42578 16.3301C0.911458 15.7181 0.582682 14.9759 0.439453 14.1035L2.90039 13.4785C2.98503 14.2988 3.28776 14.9173 3.80859 15.334C4.33594 15.7507 4.98698 15.959 5.76172 15.959C6.23698 15.959 6.64714 15.8841 6.99219 15.7344C7.33724 15.5781 7.59766 15.3665 7.77344 15.0996C7.94922 14.8327 8.03711 14.5332 8.03711 14.2012C8.03711 13.804 7.91341 13.4655 7.66602 13.1855C7.42513 12.9056 7.1224 12.6745 6.75781 12.4922C6.39323 12.3099 5.89193 12.0918 5.25391 11.8379C4.42057 11.5059 3.74674 11.1999 3.23242 10.9199C2.7181 10.6335 2.27539 10.2363 1.9043 9.72852C1.53971 9.2207 1.35742 8.57943 1.35742 7.80469C1.35742 7.01693 1.54948 6.33659 1.93359 5.76367C2.32422 5.18424 2.84505 4.74479 3.49609 4.44531C4.15365 4.14583 4.8763 3.99609 5.66406 3.99609C6.54948 3.99609 7.35677 4.19792 8.08594 4.60156C8.8151 4.9987 9.40755 5.60417 9.86328 6.41797L7.80273 7.67773C7.56185 7.20898 7.24609 6.84766 6.85547 6.59375C6.46484 6.33333 6.03841 6.20312 5.57617 6.20312C5.25065 6.20312 4.95443 6.26497 4.6875 6.38867C4.42708 6.51237 4.21875 6.68815 4.0625 6.91602C3.91276 7.13737 3.83789 7.39128 3.83789 7.67773C3.83789 8.0293 3.95182 8.32878 4.17969 8.57617C4.40755 8.82357 4.69401 9.0319 5.03906 9.20117C5.39062 9.37044 5.86914 9.57227 6.47461 9.80664C7.33398 10.1387 8.0306 10.4512 8.56445 10.7441C9.09831 11.0371 9.55729 11.4473 9.94141 11.9746C10.3255 12.502 10.5176 13.1693 10.5176 13.9766C10.5176 14.8229 10.3027 15.5618 9.87305 16.1934C9.44987 16.8249 8.8737 17.3099 8.14453 17.6484C7.41536 17.987 6.60807 18.1562 5.72266 18.1562ZM16.8906 4.20117H26.0703V6.47656H19.3711V9.96289H25.6113V12.2383H19.3711V15.6562H26.0703V18H16.8906V4.20117ZM33.0586 4.20117H35.5391V15.6562H41.4375V18H33.0586V4.20117ZM47.4492 4.20117H49.9297V15.6562H55.8281V18H47.4492V4.20117Z"
                                transform="translate(0 -3)" fill="#212529"></path>
                            <path class="text-primary" d="M62.0254 15.4219H64.418V18H62.0254V15.4219Z" transform="translate(0 -3)"
                                fill="#9A6EE2"></path>
                        </svg></a>
                    <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                        aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i
                            class="fa fa-bars"></i></button>
                    <!-- Navbar Collapse -->
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item dropdown"><a id="homeDropdownMenuLink" href="{{url('/') }}"
                                    aria-haspopup="true" aria-expanded="false" class="nav-link active">

                                    Home</a>
                            </li>
                            <li class="nav-item"><a href="{{ url('/shop') }}" class="nav-link">Shop</a>
                            </li>
                            <!-- Megamenu-->
                            <li class="nav-item dropdown position-static"><a href="#" data-toggle="dropdown" class="nav-link">Template<i
                                        class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu megamenu py-lg-0">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="row p-3 pr-lg-0 pl-lg-5 pt-lg-5">
                                                <div class="col-lg-3">
                                                    <!-- Megamenu list-->
                                                    <h6 class="text-uppercase">Homepage</h6>
                                                    <ul class="megamenu-list list-unstyled">
                                                        <li class="megamenu-list-item"><a href="index-2.html" class="megamenu-list-link">Fullscreen
                                                                home + Lookbook </a></li>
                                                        <li class="megamenu-list-item"><a href="index2.html" class="megamenu-list-link">Split-screen
                                                                home </a></li>
                                                        <li class="megamenu-list-item"><a href="index3.html" class="megamenu-list-link">Classic
                                                                home </a></li>
                                                        <li class="megamenu-list-item"><a href="index4.html" class="megamenu-list-link">Parallax
                                                                sections <span class="badge badge-info ml-1">New</span>
                                                            </a></li>
                                                    </ul>
                                                    <!-- Megamenu list-->
                                                    <h6 class="text-uppercase">Shop</h6>
                                                    <ul class="megamenu-list list-unstyled">
                                                        <li class="megamenu-list-item"><a href="category.html" class="megamenu-list-link">Category
                                                                - left sidebar </a></li>
                                                        <li class="megamenu-list-item"><a href="category-right.html"
                                                                class="megamenu-list-link">Category - right sidebar </a></li>
                                                        <li class="megamenu-list-item"><a href="category-no-sidebar.html"
                                                                class="megamenu-list-link">Category - no sidebar </a></li>
                                                        <li class="megamenu-list-item"><a href="category-full.html"
                                                                class="megamenu-list-link">Category - full width </a></li>
                                                        <li class="megamenu-list-item"><a href="category-masonry.html"
                                                                class="megamenu-list-link">Category - masonry items </a></li>
                                                        <li class="megamenu-list-item"><a href="category-banner.html"
                                                                class="megamenu-list-link">Category - w/ banner </a></li>
                                                        <li class="megamenu-list-item"><a href="detail.html" class="megamenu-list-link">Product
                                                                detail </a></li>
                                                        <li class="megamenu-list-item"><a href="detail-2.html" class="megamenu-list-link">Product
                                                                detail - v.2 </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Megamenu list-->
                                                    <h6 class="text-uppercase">Order process</h6>
                                                    <ul class="megamenu-list list-unstyled">
                                                        <li class="megamenu-list-item"><a href="cart.html" class="megamenu-list-link">Shopping
                                                                cart </a></li>
                                                        <li class="megamenu-list-item"><a href="cart-2.html" class="megamenu-list-link">Shopping
                                                                cart - v. 2 <span class="badge badge-info ml-1">New</span>
                                                            </a></li>
                                                        <li class="megamenu-list-item"><a href="checkout1.html" class="megamenu-list-link">Checkout
                                                                1 - Address </a></li>
                                                        <li class="megamenu-list-item"><a href="checkout2.html" class="megamenu-list-link">Checkout
                                                                2 - Delivery </a></li>
                                                        <li class="megamenu-list-item"><a href="checkout3.html" class="megamenu-list-link">Checkout
                                                                3 - Payment </a></li>
                                                        <li class="megamenu-list-item"><a href="checkout4.html" class="megamenu-list-link">Checkout
                                                                4 - Review </a></li>
                                                        <li class="megamenu-list-item"><a href="checkout5.html" class="megamenu-list-link">Checkout
                                                                5 - Confirmation </a></li>
                                                    </ul>
                                                    <!-- Megamenu list-->
                                                    <h6 class="text-uppercase">Blog</h6>
                                                    <ul class="megamenu-list list-unstyled">
                                                        <li class="megamenu-list-item"><a href="blog.html" class="megamenu-list-link">Blog
                                                            </a></li>
                                                        <li class="megamenu-list-item"><a href="post.html" class="megamenu-list-link">Post
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Megamenu list-->
                                                    <h6 class="text-uppercase">Pages</h6>
                                                    <ul class="megamenu-list list-unstyled">
                                                        <li class="megamenu-list-item"><a href="contact.html" class="megamenu-list-link">Contact
                                                            </a></li>
                                                        <li class="megamenu-list-item"><a href="contact-2.html" class="megamenu-list-link">Contact
                                                                v.2 </a></li>
                                                        <li class="megamenu-list-item"><a href="text.html" class="megamenu-list-link">Text
                                                                page </a></li>
                                                        <li class="megamenu-list-item"><a href="faq.html" class="megamenu-list-link">F.A.Q.s
                                                                <span class="badge badge-info ml-1">New</span> </a></li>
                                                        <li class="megamenu-list-item"><a href="coming-soon.html" class="megamenu-list-link">Coming
                                                                soon </a></li>
                                                    </ul>
                                                    <!-- Megamenu list-->
                                                    <h6 class="text-uppercase">Customer</h6>
                                                    <ul class="megamenu-list list-unstyled">
                                                        <li class="megamenu-list-item"><a href="customer-login.html"
                                                                class="megamenu-list-link">Login/sign up </a></li>
                                                        <li class="megamenu-list-item"><a href="customer-orders.html"
                                                                class="megamenu-list-link">Orders </a></li>
                                                        <li class="megamenu-list-item"><a href="customer-order.html"
                                                                class="megamenu-list-link">Order detail </a></li>
                                                        <li class="megamenu-list-item"><a href="customer-addresses.html"
                                                                class="megamenu-list-link">Addresses </a></li>
                                                        <li class="megamenu-list-item"><a href="customer-account.html"
                                                                class="megamenu-list-link">Profile </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Megamenu list-->
                                                    <h6 class="text-uppercase">Documentation</h6>
                                                    <ul class="megamenu-list list-unstyled">
                                                        <li class="megamenu-list-item"><a href="docs/docs-introduction.html"
                                                                class="megamenu-list-link">Introduction </a></li>
                                                        <li class="megamenu-list-item"><a href="docs/docs-directory-structure.html"
                                                                class="megamenu-list-link">Directory structure </a></li>
                                                        <li class="megamenu-list-item"><a href="docs/docs-gulp.html"
                                                                class="megamenu-list-link">Gulp </a></li>
                                                        <li class="megamenu-list-item"><a href="docs/docs-customizing-css.html"
                                                                class="megamenu-list-link">Customizing CSS </a></li>
                                                        <li class="megamenu-list-item"><a href="docs/docs-credits.html"
                                                                class="megamenu-list-link">Credits </a></li>
                                                        <li class="megamenu-list-item"><a href="docs/docs-changelog.html"
                                                                class="megamenu-list-link">Changelog </a></li>
                                                    </ul>
                                                    <!-- Megamenu list-->
                                                    <h6 class="text-uppercase">Components</h6>
                                                    <ul class="megamenu-list list-unstyled">
                                                        <li class="megamenu-list-item"><a href="docs/components-bootstrap.html"
                                                                class="megamenu-list-link">Bootstrap </a></li>
                                                        <li class="megamenu-list-item"><a href="docs/components-sell.html"
                                                                class="megamenu-list-link">Theme </a></li>
                                                        <li class="megamenu-list-item"><a href="component-variants/header.html"
                                                                class="megamenu-list-link">Header variants <span class="badge badge-info ml-1">New</span>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row megamenu-services d-none d-lg-flex">
                                                <div class="col-xl-3 col-lg-6 d-flex">
                                                    <div class="megamenu-services-item">
                                                        <svg class="svg-icon megamenu-services-icon">
                                                            <use xlink:href="#delivery-time-1"> </use>
                                                        </svg>
                                                        <div>
                                                            <h6 class="text-uppercase">Free shipping &amp; return</h6>
                                                            <p class="mb-0 text-muted text-sm">Free Shipping over $300</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 d-flex">
                                                    <div class="megamenu-services-item">
                                                        <svg class="svg-icon megamenu-services-icon">
                                                            <use xlink:href="#money-1"> </use>
                                                        </svg>
                                                        <div>
                                                            <h6 class="text-uppercase">Money back guarantee</h6>
                                                            <p class="mb-0 text-muted text-sm">30 Days Money Back</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 d-flex">
                                                    <div class="megamenu-services-item">
                                                        <svg class="svg-icon megamenu-services-icon">
                                                            <use xlink:href="#customer-support-1"> </use>
                                                        </svg>
                                                        <div>
                                                            <h6 class="text-uppercase">020-800-456-747</h6>
                                                            <p class="mb-0 text-muted text-sm">24/7 Available Support</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 d-flex">
                                                    <div class="megamenu-services-item">
                                                        <svg class="svg-icon megamenu-services-icon">
                                                            <use xlink:href="#secure-payment-1"> </use>
                                                        </svg>
                                                        <div>
                                                            <h6 class="text-uppercase">Secure Payment</h6>
                                                            <p class="mb-0 text-muted text-sm">Secure Payment</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 d-none d-lg-block"><img src="img/megamenu.jpg" alt=""
                                                class="bg-image"></div>
                                    </div>
                                </div>
                            </li>
                            <!-- /Megamenu end-->
                            <!-- Multi level dropdown    -->
                            <li class="nav-item dropdown"><a id="navbarDropdownMenuLink" href="http://example.com/"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Dropdown<i
                                        class="fa fa-angle-down"></i></a>
                                <ul aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item">Action</a></li>
                                    <li><a href="#" class="dropdown-item">Another action</a></li>
                                    <li class="dropdown-submenu"><a id="navbarDropdownMenuLink2" href="http://example.com/"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item">Dropdown
                                            link<i class="fa fa-angle-down ml-2"></i></a>
                                        <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li class="dropdown-submenu"><a id="navbarDropdownMenuLink3" href="http://example.com/"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    class="dropdown-item">

                                                    Another action<i class="fa fa-angle-down ml-2"></i></a>
                                                <ul aria-labelledby="navbarDropdownMenuLink3" class="dropdown-menu">
                                                    <li><a href="#" class="dropdown-item">Action</a></li>
                                                    <li><a href="#" class="dropdown-item">Action</a></li>
                                                    <li><a href="#" class="dropdown-item">Action</a></li>
                                                    <li><a href="#" class="dropdown-item">Action</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- Multi level dropdown end-->
                            <li class="nav-item"><a href="#" class="nav-link">Contact</a>
                            </li>

                        </ul>
                        <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
                            <!-- Search Button-->
                            <div data-toggle="search" class="nav-item navbar-icon-link">
                                <svg class="svg-icon">
                                    <use xlink:href="#search-1"> </use>
                                </svg>
                            </div>
                            <!-- User Not Logged - link to login page-->
                            <div class="nav-item"><a href="{{ url('/login') }}" class="navbar-icon-link">
                                    <svg class="svg-icon">
                                        <use xlink:href="#male-user-1"> </use>
                                    </svg><span class="text-sm ml-2 ml-lg-0 text-uppercase text-sm font-weight-bold d-none d-sm-inline d-lg-none">Log
                                        in </span></a></div>
                            <!-- Cart Dropdown-->

                        </div>
                    </div>
                </div>
            </nav>
            <!-- /Navbar -->

            <!-- Fullscreen search area-->
            <div class="search-area-wrapper">
                <div class="search-area d-flex align-items-center justify-content-center">
                    <div class="close-btn">
                        <svg class="svg-icon svg-icon-light w-3rem h-3rem">
                            <use xlink:href="#close-1"> </use>
                        </svg>
                    </div>
                    <form action="#" class="search-area-form">
                        <div class="form-group position-relative">
                            <input type="search" name="search" id="search" placeholder="What are you looking for?"
                                class="search-area-input">
                            <button type="submit" class="search-area-button">
                                <svg class="svg-icon">
                                    <use xlink:href="#search-1"> </use>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Fullscreen search area-->

        </header>


        @yield('content')

    </div>

    @include('layouts.footer')
</body>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/owl.carousel/owl.carousel.js"></script>
<script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
<script src="vendor/nouislider/nouislider.min.js"></script>
<script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
<script src="vendor/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="js/demo.js"></script>
<script>
    var basePath = ''

</script>

<script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite - 
    //   see more here 
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function (e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }
    // this is set to Bootstrapious website as you cannot 
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://demo.bootstrapious.com/sell/1-2-0/icons/orion-svg-sprite.svg');

</script>

</html>
