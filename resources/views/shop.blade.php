@extends('layouts.master')

@section('content')
<section class="hero">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Shop </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
            <h1 class="hero-heading">Jackets and tops</h1>
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="px-xl-5">
        <div class="row">
            <!-- Grid -->
            <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
                <header class="product-grid-header">
                    <div class="mr-3 mb-3">

                        Showing <strong>1-12 </strong>of <strong>158 </strong>products
                    </div>
                    <div class="mr-3 mb-3"><span class="mr-2">Show</span><a href="#" class="product-grid-header-show active">12
                        </a><a href="#" class="product-grid-header-show ">24 </a><a href="#" class="product-grid-header-show ">All
                        </a>
                    </div>
                    <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-1">Sort by</span>
                        <select class="custom-select w-auto border-0">
                            <option value="orderby_0">Default</option>
                            <option value="orderby_1">Popularity</option>
                            <option value="orderby_2">Rating</option>
                            <option value="orderby_3">Newest first</option>
                        </select>
                    </div>
                </header>
                <div class="row">
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image">
                                <div class="ribbon ribbon-info">Fresh</div><img src="img/product/serrah-galos-494312-unsplash.jpg"
                                    alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Jackets</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">White Tee</a></h3><span
                                    class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img src="img/product/kyle-loftus-590881-unsplash.jpg" alt="product"
                                    class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Black blouse</a></h3><span
                                    class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image">
                                <div class="ribbon ribbon-primary">Sale</div><img src="img/product/kyle-loftus-596319-unsplash.jpg"
                                    alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Accessories</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">College
                                        jacket</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img src="img/product/ethan-haddox-484912-unsplash.jpg" alt="product"
                                    class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Carrot-fit
                                        jeans</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img src="img/product/serrah-galos-494231-unsplash.jpg" alt="product"
                                    class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Jackets</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Striped
                                        T-Shirt</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img src="img/product/averie-woodard-319832-unsplash.jpg" alt="product"
                                    class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Shirts</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Short top</a></h3><span
                                    class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image">
                                <div class="ribbon ribbon-danger">Sold out</div><img src="img/product/serrah-galos-494279-unsplash.jpg"
                                    alt="product" class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Sweaters</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Ethnic
                                        Sweater</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img src="img/product/dmitriy-ilkevich-437760-unsplash.jpg" alt="product"
                                    class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Coats</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Beige</a></h3><span
                                    class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img src="img/product/ian-dooley-347968-unsplash.jpg" alt="product"
                                    class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">T-Shirts</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Skull Tee</a></h3><span
                                    class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img src="img/product/alex-holyoake-571682-unsplash.jpg" alt="product"
                                    class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Trucker
                                        jacket</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img src="img/product/ao-456813-unsplash.jpg" alt="product"
                                    class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Blouse</a></h3><span
                                    class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product-image"><img src="img/product/kyle-loftus-592041-unsplash.jpg" alt="product"
                                    class="img-fluid">
                                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons"><a href="#" class="btn btn-outline-dark btn-product-left"><i
                                                class="fa fa-shopping-cart"></i></a><a href="detail.html" class="btn btn-dark btn-buy"><i
                                                class="fa-search fa"></i></a><a href="#" data-toggle="modal"
                                            data-target="#exampleModal" class="btn btn-outline-dark btn-product-right"><i
                                                class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Shirt</a></h3><span
                                    class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                </div>
                <nav aria-label="page navigation" class="d-flex justify-content-center mb-5 mt-3">
                    <ul class="pagination">
                        <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">Prev</span><span
                                    class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a href="#" class="page-link">1 </a></li>
                        <li class="page-item"><a href="#" class="page-link">2 </a></li>
                        <li class="page-item"><a href="#" class="page-link">3 </a></li>
                        <li class="page-item"><a href="#" class="page-link">4 </a></li>
                        <li class="page-item"><a href="#" class="page-link">5 </a></li>
                        <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span
                                    class="sr-only">Next </span></a></li>
                    </ul>
                </nav>
            </div>
            <!-- / Grid End-->
            <!-- Sidebar-->
            <div class="sidebar col-xl-3 col-lg-4 pr-xl-5 order-lg-1">
                <div class="sidebar-block px-3 px-lg-0"><a data-toggle="collapse" href="#categoriesMenu" aria-expanded="false"
                        aria-controls="categoriesMenu" class="d-lg-none block-toggler">Product Categories</a>
                    <div id="categoriesMenu" class="expand-lg collapse">
                        <div class="nav nav-pills flex-column mt-4 mt-lg-0"> <a href="#" class="nav-link d-flex justify-content-between mb-2 "><span>Jackets</span><span
                                    class="sidebar-badge"> 120</span></a>
                            <div class="nav nav-pills flex-column ml-3"><a href="#" class="nav-link mb-2">Lorem ipsum</a><a
                                    href="#" class="nav-link mb-2">Dolor</a><a href="#" class="nav-link mb-2">Sit amet</a><a
                                    href="#" class="nav-link mb-2">Donec vitae</a>
                            </div><a href="#" class="nav-link d-flex justify-content-between mb-2 active"><span>Jeans
                                    &amp; chinos</span><span class="sidebar-badge"> 55</span></a>
                            <div class="nav nav-pills flex-column ml-3"><a href="#" class="nav-link mb-2">Lorem ipsum</a><a
                                    href="#" class="nav-link mb-2">Dolor</a><a href="#" class="nav-link mb-2">Sit amet</a><a
                                    href="#" class="nav-link mb-2">Donec vitae</a>
                            </div><a href="#" class="nav-link d-flex justify-content-between mb-2 "><span>Accessories</span><span
                                    class="sidebar-badge"> 80</span></a>
                            <div class="nav nav-pills flex-column ml-3"><a href="#" class="nav-link mb-2">Sit amet</a><a
                                    href="#" class="nav-link mb-2">Donec vitae</a><a href="#" class="nav-link mb-2">Lorem
                                    ipsum</a><a href="#" class="nav-link mb-2">Dolor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-block px-3 px-lg-0"><a data-toggle="collapse" href="#priceFilterMenu" aria-expanded="false"
                        aria-controls="priceFilterMenu" class="d-lg-none block-toggler">Filter by price</a>
                    <div id="priceFilterMenu" class="expand-lg collapse">
                        <h6 class="sidebar-heading d-none d-lg-block">Price </h6>
                        <div id="slider-snap" class="mt-4 mt-lg-0 noUi-target noUi-ltr noUi-horizontal">
                            <div class="noUi-base">
                                <div class="noUi-connects">
                                    <div class="noUi-connect" style="transform: translate(16%, 0px) scale(0.28, 1);"></div>
                                </div>
                                <div class="noUi-origin" style="transform: translate(-84%, 0px); z-index: 5;">
                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider"
                                        aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="44.0"
                                        aria-valuenow="16.0" aria-valuetext="40.00"></div>
                                </div>
                                <div class="noUi-origin" style="transform: translate(-56%, 0px); z-index: 6;">
                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider"
                                        aria-orientation="horizontal" aria-valuemin="16.0" aria-valuemax="100.0"
                                        aria-valuenow="44.0" aria-valuetext="110.00"></div>
                                </div>
                            </div>
                        </div>
                        <div class="nouislider-values">
                            <div class="min">From $<span id="slider-snap-value-lower">40.00</span></div>
                            <div class="max">To $<span id="slider-snap-value-upper">110.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-block px-3 px-lg-0"><a data-toggle="collapse" href="#brandFilterMenu" aria-expanded="true"
                        aria-controls="brandFilterMenu" class="d-lg-none block-toggler">Filter by brand</a>
                    <!-- Brand filter menu - this menu has .show class, so is expanded by default-->
                    <div id="brandFilterMenu" class="expand-lg collapse show">
                        <h6 class="sidebar-heading d-none d-lg-block">Brands </h6>
                        <form action="#" class="mt-4 mt-lg-0">
                            <div class="form-group mb-1">
                                <div class="custom-control custom-checkbox">
                                    <input id="brand0" type="checkbox" name="clothes-brand" checked="" class="custom-control-input">
                                    <label for="brand0" class="custom-control-label">Calvin Klein <small>(18)</small></label>
                                </div>
                            </div>
                            <div class="form-group mb-1">
                                <div class="custom-control custom-checkbox">
                                    <input id="brand1" type="checkbox" name="clothes-brand" checked="" class="custom-control-input">
                                    <label for="brand1" class="custom-control-label">Levi Strauss <small>(30)</small></label>
                                </div>
                            </div>
                            <div class="form-group mb-1">
                                <div class="custom-control custom-checkbox">
                                    <input id="brand2" type="checkbox" name="clothes-brand" class="custom-control-input">
                                    <label for="brand2" class="custom-control-label">Hugo Boss <small>(120)</small></label>
                                </div>
                            </div>
                            <div class="form-group mb-1">
                                <div class="custom-control custom-checkbox">
                                    <input id="brand3" type="checkbox" name="clothes-brand" class="custom-control-input">
                                    <label for="brand3" class="custom-control-label">Tomi Hilfiger <small>(70)</small></label>
                                </div>
                            </div>
                            <div class="form-group mb-1">
                                <div class="custom-control custom-checkbox">
                                    <input id="brand4" type="checkbox" name="clothes-brand" class="custom-control-input">
                                    <label for="brand4" class="custom-control-label">Tom Ford <small>(110)</small></label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sidebar-block px-3 px-lg-0"> <a data-toggle="collapse" href="#sizeFilterMenu" aria-expanded="false"
                        aria-controls="sizeFilterMenu" class="d-lg-none block-toggler">Filter by size</a>
                    <!-- Size filter menu-->
                    <div id="sizeFilterMenu" class="expand-lg collapse">
                        <h6 class="sidebar-heading d-none d-lg-block">Size </h6>
                        <form action="#" class="mt-4 mt-lg-0">
                            <div class="form-group mb-1">
                                <div class="custom-control custom-radio">
                                    <input id="size0" type="radio" name="size" checked="" class="custom-control-input">
                                    <label for="size0" class="custom-control-label">Small</label>
                                </div>
                            </div>
                            <div class="form-group mb-1">
                                <div class="custom-control custom-radio">
                                    <input id="size1" type="radio" name="size" class="custom-control-input">
                                    <label for="size1" class="custom-control-label">Medium</label>
                                </div>
                            </div>
                            <div class="form-group mb-1">
                                <div class="custom-control custom-radio">
                                    <input id="size2" type="radio" name="size" class="custom-control-input">
                                    <label for="size2" class="custom-control-label">Large</label>
                                </div>
                            </div>
                            <div class="form-group mb-1">
                                <div class="custom-control custom-radio">
                                    <input id="size3" type="radio" name="size" class="custom-control-input">
                                    <label for="size3" class="custom-control-label">X-Large</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sidebar-block px-3 px-lg-0"><a data-toggle="collapse" href="#colourFilterMenu"
                        aria-expanded="false" aria-controls="colourFilterMenu" class="d-lg-none block-toggler">Filter
                        by colour</a>
                    <!-- Size filter menu-->
                    <div id="colourFilterMenu" class="expand-lg collapse">
                        <h6 class="sidebar-heading d-none d-lg-block">Colour </h6>
                        <div class="mt-4 mt-lg-0">
                            <ul class="list-inline mb-0 colours-wrapper">
                                <li class="list-inline-item">
                                    <label for="colour_sidebar_Blue" style="background-color: #668cb9"
                                        data-allow-multiple="" class="btn-colour"> </label>
                                    <input type="checkbox" name="colour" value="value_sidebar_Blue" id="colour_sidebar_Blue"
                                        class="input-invisible">
                                </li>
                                <li class="list-inline-item">
                                    <label for="colour_sidebar_White" style="background-color: #fff"
                                        data-allow-multiple="" class="btn-colour"> </label>
                                    <input type="checkbox" name="colour" value="value_sidebar_White" id="colour_sidebar_White"
                                        class="input-invisible">
                                </li>
                                <li class="list-inline-item">
                                    <label for="colour_sidebar_Violet" style="background-color: #8b6ea4"
                                        data-allow-multiple="" class="btn-colour"> </label>
                                    <input type="checkbox" name="colour" value="value_sidebar_Violet" id="colour_sidebar_Violet"
                                        class="input-invisible">
                                </li>
                                <li class="list-inline-item">
                                    <label for="colour_sidebar_Red" style="background-color: #dd6265"
                                        data-allow-multiple="" class="btn-colour"> </label>
                                    <input type="checkbox" name="colour" value="value_sidebar_Red" id="colour_sidebar_Red"
                                        class="input-invisible">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Sidebar end-->
        </div>
    </div>
</div>

@endsection
