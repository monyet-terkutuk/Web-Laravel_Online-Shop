@extends('layouts.dashboard')
@section('title', 'Product')
@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Products</h2>
      <p class="dashboard-subtitle">Manage it well and get money</p>
    </div>

    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <a href="{{ route('dashboard-product-add') }}" class="btn btn-success">Add New Product</a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="{{ route('dashboard-product-details') }}" class="card card-dashboard-product d-block" data-aos="fade-right" data-aos-delay="200">
            <div class="card-body">
              <img src="/images/image-product-1.png" alt="Product" class="w-100 mb-2">
              <div class="product-title">Shitup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="{{ route('dashboard-product-details') }}" class="card card-dashboard-product d-block" data-aos="fade-right" data-aos-delay="400">
            <div class="card-body">
              <img src="/images/image-product-2.png" alt="Product" class="w-100 mb-2">
              <div class="product-title">Shitup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="{{ route('dashboard-product-details') }}" class="card card-dashboard-product d-block" data-aos="fade-right" data-aos-delay="600">
            <div class="card-body">
              <img src="/images/image-product-3.png" alt="Product" class="w-100 mb-2">
              <div class="product-title">Shitup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="{{ route('dashboard-product-details') }}" class="card card-dashboard-product d-block" data-aos="fade-right" data-aos-delay="800">
            <div class="card-body">
              <img src="/images/image-product-2.png" alt="Product" class="w-100 mb-2">
              <div class="product-title">Shitup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="{{ route('dashboard-product-details') }}" class="card card-dashboard-product d-block" data-aos="fade-right" data-aos-delay="1000">
            <div class="card-body">
              <img src="/images/image-product-3.png" alt="Product" class="w-100 mb-2">
              <div class="product-title">Shitup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="{{ route('dashboard-product-details') }}" class="card card-dashboard-product d-block" data-aos="fade-right" data-aos-delay="1200">
            <div class="card-body">
              <img src="/images/image-product-3.png" alt="Product" class="w-100 mb-2">
              <div class="product-title">Shitup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a href="{{ route('dashboard-product-details') }}" class="card card-dashboard-product d-block" data-aos="fade-right" data-aos-delay="1400">
            <div class="card-body">
              <img src="/images/image-product-1.png" alt="Product" class="w-100 mb-2">
              <div class="product-title">Shitup Marzzan</div>
              <div class="product-category">Foods</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection