@extends('layouts.dashboard')
@section('title', 'Home')
@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Store Settings</h2>
      <p class="dashboard-subtitle">Make store that profitable</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card text-left">
              <div class="card-body">
                  <div class="row">

                  <div class="col-md-6">
                    <div class="form-group mt-3" data-aos="fade-up" v-if="is_store">
                      <label for="nameStore">Store Name</label>
                      <input type="text" id="nameStore" class="form-control " autofocus required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group mt-3" data-aos="fade-up" v-if="is_store">
                      <label for="category">Category</label>
                      <select name="category" id="category" class="form-control">
                        <option value="">Select A category</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password">Store Status</label>
                      <p class="text-muted">Apakah saat ini toko Anda buka?</p>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="is_store" id="openStoreTrue" value="true">
                        <label class="custom-control-label" for="openStoreTrue">Buka</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="is_store" id="openStoreFalse" value="false">
                        <label class="custom-control-label" for="openStoreFalse">Sementara Tutup</label>
                      </div>
                    </div>
                  </div>
      
                  </div>
                  <div class="row">
                    <div class="col-12 text-right">
                      <button type="submit" class="btn btn-success px-5">Save Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
      </div>
      </div>
    </div>
  </div>
@endsection