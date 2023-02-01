@extends('layouts.dashboard')
@section('title', 'Home')
@section('content')
 <!-- Section Content -->
 <div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Transactions</h2>
      <p class="dashboard-subtitle">Big result start from the small one</p>
    </div>
    <div class="dashboard-content">
      <!-- recent transactions -->
      <div class="row">
        <div class="col-12 mt-2">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Sell Product</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Buy Product</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <!-- Sell Product -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <a href="{{ route('dashboard-transactions-details') }}" class="card card-list d-block" data-aos="fade-right" data-aos-delay="200">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-product-1.png" alt="img">
                    </div>
                    <div class="col-md-4">
                      Shirup Marzzan
                    </div>
                    <div class="col-md-3">
                      Angga Risky
                    </div>
                    <div class="col-md-3">
                      12 Januari, 2020
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/arrow-right-icon.svg" alt=">">
                    </div>
                  </div>
                </div>
              </a>
              <a href="{{ route('dashboard-transactions-details') }}" class="card card-list d-block" data-aos="fade-right" data-aos-delay="400">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-product-2.png" alt="img">
                    </div>
                    <div class="col-md-4">
                      LeBrone X
                    </div>
                    <div class="col-md-3">
                      Masayoshi
                    </div>
                    <div class="col-md-3">
                      11 January, 2020
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/arrow-right-icon.svg" alt=">">
                    </div>
                  </div>
                </div>
              </a>
              <a href="{{ route('dashboard-transactions-details') }}" class="card card-list d-block" data-aos="fade-right" data-aos-delay="600">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-product-3.png" alt="img">
                    </div>
                    <div class="col-md-4">
                      Soffa Lembutte
                    </div>
                    <div class="col-md-3">
                      Shayna
                    </div>
                    <div class="col-md-3">
                      11 January, 2020
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/arrow-right-icon.svg" alt=">">
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- Buy Product -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
              <a href="{{ route('dashboard-transactions-details') }}" class="card card-list d-block" data-aos="fade-right" data-aos-delay="800">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-product-2.png" alt="img">
                    </div>
                    <div class="col-md-4">
                      LeBrone X
                    </div>
                    <div class="col-md-3">
                      Masayoshi
                    </div>
                    <div class="col-md-3">
                      11 January, 2020
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/arrow-right-icon.svg" alt=">">
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection