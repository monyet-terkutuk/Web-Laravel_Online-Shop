@extends('layouts.dashboard')
@section('title', 'Home')
@section('content')
 <!-- Section Content -->
 <div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">#STORE0839</h2>
      <p class="dashboard-subtitle">Transactions     /     <b style="font-weight: 500;font-size: 16px;color: #0C0D36;">Details</b></p>
    </div>

    <div class="dashboard-content" id="transactionDetails">
      <div class="row mr-3">
        <div class="col-12">
          <div class="card mb-5 pb-3">
            <div class="card-body ml-3 mt-4">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img src="/images/transaction-product.png" alt="product" data-aos="zoom-in" class="w-100 mb-3">
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title" data-aos="fade-up">Customer Name</div>
                      <div class="product-subtitle">Angga Risky</div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="product-title" data-aos="fade-up">Product Name</div>
                      <div class="product-subtitle">Shyrup Marzzan</div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="product-title" data-aos="fade-up">Date of Transaction</div>
                      <div class="product-subtitle">12 Januari, 2020</div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="product-title" data-aos="fade-up">Payment Status</div>
                      <div class="product-subtitle text-success">Success</div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="product-title" data-aos="fade-up">Total Amount</div>
                      <div class="product-subtitle">$280,409</div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="product-title" data-aos="fade-up">Mobile</div>
                      <div class="product-subtitle">+628 2020 11111</div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- baris 2 -->
              <div class="row">
                <div class="col-12 mt-4">
                  <h5>Shipping Information</h5>
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="product-title">Address I</div>
                      <div class="product-subtitle">Setra Duta Cemara</div>
                    </div>
                    <div class="col-md-6">
                      <div class="product-title">Address II</div>
                      <div class="product-subtitle">Blok B2 No. 34</div>
                    </div>
                    <div class="col-md-6">
                      <div class="product-title">Province</div>
                      <div class="product-subtitle">West Java</div>
                    </div>
                    <div class="col-md-6">
                      <div class="product-title">City</div>
                      <div class="product-subtitle">Bandung</div>
                    </div>
                    <div class="col-md-6">
                      <div class="product-title">Postal Code</div>
                      <div class="product-subtitle">123999</div>
                    </div>
                    <div class="col-md-6">
                      <div class="product-title">Country</div>
                      <div class="product-subtitle">Indonesia</div>
                    </div>
                    <div class="col-md-5">
                      <div class="product-title">Shipping Status</div>
                      <select name="status" id="status" class="form-control" v-model="status">
                        <option value="PENDING">Pending</option>
                        <option value="SHIPPING">Shipping</option>
                        <option value="SUCCESS">Success</option>
                      </select>
                    </div>

                    <template v-if="status == 'SHIPPING'">
                      <div class="col-md-5">
                        <div class="product-title">Input Resi</div>
                        <input type="text" class="form-control" v-model="resi">
                      </div>
                      <div class="col-md-2">
                        <div class="product-title text-white">Halooo</div>
                        <button type="submit" class="btn btn-danger btn-block">Update Resi</button>
                      </div>
                    </template>
                    <div class="col-12 mt-3">
                      <button class="btn btn-success btn-block">Save Now</button>
                    </div>
                  </div>
                  

                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection
@push('addon-script')

<script>
  $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $('#wrapper').toggleClass('toggled');
  });
</script>
<script src="/vendor/vue/vue.js"></script>
<script>
    var transactionDetails = new Vue({
      el: "#transactionDetails",
      mounted(){
      AOS.init();
    },
    data: {
      status: "SHIPPING",
      resi: "JNE20839149021029301231",
    },
    });
</script>
@endpush