@extends('layouts.master')

@section('content')
<section>
      <div class="container-fluid">
        <div class="row">
          <div style="background-image: url(img/photo/ian-dooley-347942-unsplash.jpg); background-color: #d2cecb;" class="col-lg-6 dark-overlay split-screen-column align-items-center align-items-lg-end"> 
            <div class="overlay-content py-6 mt-6 px-lg-5 mt-lg-0 mb-lg-5">
              <h1 class="display-3 mb-4 text-white font-weight-bold split-screen-heading letter-spacing-1">Gentlemen              </h1>
              <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p> <a href="category.html" class="btn btn-light mx-1 mb-1">View collection      </a><a href="category.html" class="btn btn-outline-light mx-1 mb-1">See more      </a></p>
            </div>
          </div>
          <div style="background-image: url(img/photo/ian-dooley-347962-unsplash.jpg); background-color: #e5b6b4;" class="col-lg-6 split-screen-column align-items-center align-items-lg-end"> 
            <div class="py-6 px-lg-5 mb-lg-5">
              <h1 class="display-3 mb-4 text-white font-weight-bold split-screen-heading letter-spacing-1">Ladies              </h1>
              <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p> <a href="category.html" class="btn btn-light mx-1 mb-1">View collection      </a><a href="category.html" class="btn btn-outline-light mx-1 mb-1">See more                              </a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-6 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 mx-auto text-center mb-5">
            <h2 class="text-uppercase">Latest arrivals</h2>
            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="row">
          <!-- product-->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="product">
              <div class="product-image">
                <div class="ribbon ribbon-info">Fresh</div><img src="img/product/serrah-galos-494312-unsplash.jpg" alt="product" class="img-fluid"/>
                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                  <div class="product-hover-overlay-buttons"><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">Jackets</p>
                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">White Tee</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
          <!-- /product-->
          <!-- product-->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="product">
              <div class="product-image"><img src="img/product/kyle-loftus-596319-unsplash.jpg" alt="product" class="img-fluid"/>
                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                  <div class="product-hover-overlay-buttons"><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">Denim</p>
                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Black blouse</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
          <!-- /product-->
          <!-- product-->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="product">
              <div class="product-image">
                <div class="ribbon ribbon-primary">Sale</div><img src="img/product/kyle-loftus-596319-unsplash.jpg" alt="product" class="img-fluid"/>
                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                  <div class="product-hover-overlay-buttons"><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">Accessories</p>
                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
          <!-- /product-->
          <!-- product-->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="product">
              <div class="product-image"><img src="img/product/kyle-loftus-596319-unsplash.jpg" alt="product" class="img-fluid"/>
                <div class="product-hover-overlay"><a href="detail.html" class="product-hover-overlay-link"></a>
                  <div class="product-hover-overlay-buttons"><a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a>
                  </div>
                </div>
              </div>
              <div class="py-2">
                <p class="text-muted text-sm mb-1">Denim</p>
                <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Carrot-fit jeans</a></h3><span class="text-muted">$40.00</span>
              </div>
            </div>
          </div>
          <!-- /product-->
        </div>
      </div>
    </section>
    <section class="py-6 bg-gray-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 mx-auto text-center mb-5">
            <h2>Spring 2018 Collection</h2>
            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 d-flex align-items-md-stretch mb-30px mb-md-0">
            <div style="background: center center url(img/photo/kyle-loftus-596319-unsplash.jpg) no-repeat; background-size: cover;" class="d-flex align-items-center text-white dark-overlay w-100 text-center py-6 py-md-0"><a href="category.html" class="tile-link"> </a>
              <div class="card-img-overlay w-100 overlay-content">
                <h2 class="display-2 font-weight-bold text-uppercase mb-0">Men </h2>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card border-0 text-white text-center mb-30px dark-overlay"> <img src="img/photo/malvestida-magazine-458585-unsplash.jpg" alt="Ladies" class="card-img"><a href="category.html" class="tile-link"> </a>
              <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center w-100 overlay-content">
                  <h2 class="display-4 font-weight-bold text-uppercase text-center mb-0">Ladies                                               </h2>
                </div>
              </div>      
            </div>
            <div class="card border-0 text-white text-center  dark-overlay"> <img src="img/photo/haley-phelps-62815-unsplash.jpg" alt="Accessories" class="card-img"><a href="category.html" class="tile-link"> </a>
              <div class="card-img-overlay d-flex align-items-center">
                <div class="text-center w-100 overlay-content">
                  <h2 class="display-4 font-weight-bold text-uppercase text-center mb-0">Accessories                                               </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    
@endsection
