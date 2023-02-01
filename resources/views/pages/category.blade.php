@extends('layouts/app')
@section('title','Category')
    
@section('content')
<div class="page-content page-home">

    <!-- All Categories -->
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Categories </h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/gadgets.svg" alt="Icon" class="w-100">
              </div>
              <p class="categories-text">Gadgets</p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/furniture.svg" alt="Icon" class="w-100">
              </div>
              <p class="categories-text">Furniture</p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/makeup.svg" alt="Icon" class="w-100">
              </div>
              <p class="categories-text">Make Up</p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/sneakers.svg" alt="Icon" class="w-100">
              </div>
              <p class="categories-text">Sneaker</p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/tools.svg" alt="Icon" class="w-100">
              </div>
              <p class="categories-text">Tools</p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/baby.svg" alt="Icon" class="w-100">
              </div>
              <p class="categories-text">Baby</p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- All Product -->
    <section class="store-new-products">
      <div class="container">

        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Products</h5>
          </div>
        </div>

        <div class="row">

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="details.html" class="component-products d-block">
              <div class="products-tumbnail">
                <div class="product-image" style="background-image: url('images/product-watch.jpg');"></div>
              </div>
              <div class="product-text">
                Apple Wacth 4
              </div> 
              <div class="product-price">
                $898
              </div>
            </a>
          </div>
        
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="details.html" class="component-products d-block">
              <div class="products-tumbnail">
                <div class="product-image" style="background-image: url('images/product-bogotta.jpg');"></div>
              </div>
              <div class="product-text">
                Orange Bogotta
              </div> 
              <div class="product-price">
                $898
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="details.html" class="component-products d-block">
              <div class="products-tumbnail">
                <div class="product-image" style="background-image: url('images/product-sofa.jpg');"></div>
              </div>
              <div class="product-text">
                Sofa Ternyaman
              </div> 
              <div class="product-price">
                $898
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="details.html" class="component-products d-block">
              <div class="products-tumbnail">
                <div class="product-image" style="background-image: url('images/product-powder.jpg');"></div>
              </div>
              <div class="product-text">
                Bubuk Maketti
              </div> 
              <div class="product-price">
                $898
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="details.html" class="component-products d-block">
              <div class="products-tumbnail">
                <div class="product-image" style="background-image: url('images/product-tatakan.jpg');"></div>
              </div>
              <div class="product-text">
                Tatakan Gelas
              </div> 
              <div class="product-price">
                $898
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="details.html" class="component-products d-block">
              <div class="products-tumbnail">
                <div class="product-image" style="background-image: url('images/product-drone.jpg');"></div>
              </div>
              <div class="product-text">
                Mavic Kawe
              </div> 
              <div class="product-price">
                $898
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="details.html" class="component-products d-block">
              <div class="products-tumbnail">
                <div class="product-image" style="background-image: url('images/product-watch.jpg');"></div>
              </div>
              <div class="product-text">
                Black Edition Nike
              </div> 
              <div class="product-price">
                $898
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="details.html" class="component-products d-block">
              <div class="products-tumbnail">
                <div class="product-image" style="background-image: url('images/product-monkey.jpg');"></div>
              </div>
              <div class="product-text">
                Monkey Toys
              </div> 
              <div class="product-price">
                $898
              </div>
            </a>
          </div>
          
        </div>
        
      </div>
    </section>
  </div>
@endsection