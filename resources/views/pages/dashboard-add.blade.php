@extends('layouts.dashboard')
@section('title', 'Home')
@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Create New Product</h2>
      <p class="dashboard-subtitle">Create your own product</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12 pb-5">
          <form action="">
            <div class="card text-left">
              <div class="card-body">
                  <div class="row">

                  <div class="col-md-6">
                    <div class="form-group mt-3" v-if="is_store">
                      <label for="productName">Product Name</label>
                      <input type="text" id="productName" class="form-control" value="Sepatu Bekas" autofocus required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group mt-3" v-if="is_store">
                      <label for="price">Price</label>
                      <input type="text" id="price" class="form-control" value="$100.00" autofocus required>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group mt-3" v-if="is_store">
                      <label for="category">Category</label>
                      <select name="category" id="category" class="form-control">
                        <option value="">Select A category</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group mt-3" v-if="is_store">
                      <label for="thumbnails">Description</label> 
                        <textarea class="form-control" name="description" id="editor" rows="3"></textarea>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group mt-3 mb-5" v-if="is_store">
                      <label for="thumbnails">Thumbnails</label>
                      <input type="file" id="thumbnails" class="form-control">
                      <p class="text-muted mt-2">Kamu dapat memilih lebih dari satu file!</p>
                    </div>
                  </div>
                  
                  </div>
                  <div class="row">
                    <div class="col-12 text-right pb-3">
                      <button type="submit" class="btn btn-success btn-block px-5">Save Now</button>
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

@push('addon-script')
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
  $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $('#wrapper').toggleClass('toggled');
  });
</script>
<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>
@endpush