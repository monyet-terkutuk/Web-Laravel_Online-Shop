@extends('layouts.dashboard')
@section('title', 'Home')
@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Shirup Marzzan</h2>
      <p class="dashboard-subtitle">Product Details</p>
    </div>
    <div class="dashboard-content">
      <div class="row" data-aos="fade-up">
        <div class="col-12">
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
                  
                 
                  </div>
                  <div class="row">
                    <div class="col-12 text-right d-grid gap-2">
                      <button type="submit" class="btn btn-success btn-block px-6">Update Product</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
          </form>
        </div>

      

        <div class="row mt-3 mb-5" data-aos="fade-up" data-aos-delay="50">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-container">
                      <img src="/images/image-product-1.png" alt="Product" class="w-100">
                      <a href="#" class="delete-gallery">
                        <img src="/images/icon-delete.svg" alt="X ">
                      </a>
                    </div>
                  </div>

                  <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="gallery-container">
                      <img src="/images/image-product-2.png" alt="Product" class="w-100">
                      <a href="#" class="delete-gallery">
                        <img src="/images/icon-delete.svg" alt="X ">
                      </a>
                    </div>
                  </div>

                  <div class="col-md-4" data-aos="zoom-in" data-aos-delay="500">
                    <div class="gallery-container">
                      <img src="/images/image-product-3.png" alt="Product" class="w-100">
                      <a href="#" class="delete-gallery">
                        <img src="/images/icon-delete.svg" alt="X ">
                      </a>
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-12">
                    <input type="file" name="" id="file" style="display: none;" multiple>
                    <button class="btn btn-secondary btn-block mt-3" onclick="thisFileUpload()">Add Image</button>
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
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
  $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $('#wrapper').toggleClass('toggled');
  });
</script>
<script>
  function thisFileUpload(){
    document.getElementById("file").click();
  }
</script>
<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>
@endpush