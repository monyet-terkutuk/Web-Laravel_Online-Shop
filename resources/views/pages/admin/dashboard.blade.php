@extends('layouts.admin')
@section('title', 'Home')
@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Admin Dashboard</h2>
        <p class="dashboard-subtitle">This Is Belanjain Administrator Panel!</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Customer
                </div>
                <div class="dashboard-card-subtitle">
                  {{ $customer }}
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Revenue
                </div>
                <div class="dashboard-card-subtitle">
                  RP.{{ $revenue }}
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">
                  Transaction
                </div>
                <div class="dashboard-card-subtitle">
                  {{ $transaction }} 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- recent transactions -->
        <div class="row mt-3">
          <div class="col-12 mt-2">
            <h5 class="mb-3">Recent Transactions</h5>
            <a href="dashboard-transactions-details.html" class="card card-list d-block" data-aos="fade-right" data-aos-delay="200">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="images/dashboard-product-1.png" alt="img">
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
                    <img src="images/arrow-right-icon.svg" alt=">">
                  </div>
                </div>
              </div>
            </a>
            <a href="dashboard-transactions-details.html" class="card card-list d-block" data-aos="fade-right" data-aos-delay="400">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="images/dashboard-product-2.png" alt="img">
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
                    <img src="images/arrow-right-icon.svg" alt=">">
                  </div>
                </div>
              </div>
            </a>
            <a href="dashboard-transactions-details.html" class="card card-list d-block" data-aos="fade-right" data-aos-delay="600">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="images/dashboard-product-3.png" alt="img">
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
                    <img src="images/arrow-right-icon.svg" alt=">">
                  </div>
                </div>
              </div>
            </a>
          </div> 
        </div>
      </div>
    </div>
  </div>
  
@endsection