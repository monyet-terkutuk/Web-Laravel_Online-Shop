@extends('layouts/app')
@section('title','Product Details')
    
@section('content')
<div class="page-content page-details">
    <!-- Section Breadcrumb -->
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  Product Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Gallery -->
    <section class="store-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" alt="Images" class="w-100 main-image">
            </transition>
          </div>
          <div class="col-lg-2">
            <div class="row">
              <div class="col-3 col-lg-12 mt-lg-0 mt-2" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                <a href="#" v-on:click="changeActive(index)">
                  <img :src="photo.url" class="w-100 thumbnail-image" :class="{ active:  index == activePhoto }" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Description -->
    <!-- head -->
    <div class="store-details-container" data-aos="fade-down">
      <section class="store-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h1>Sofa Ternyaman</h1>
              <div class="owner">By Galih Pratama</div>
              <div class="price">$1,409</div>
            </div>
            <div class="col-lg-2" data-aos="zoom-in">
              <a href="{{ route('cart') }}" class="btn btn-success px-4 text-white btn-block mb-3">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- body -->
      <section class="store-description">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              <p>The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge.</p>
              <p>Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning underfoot adds unparalleled comfort while transparent mesh and vibrantly coloured details on the upper are blended with timeless OG features for an edgy, modernised look.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="store-riview">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-12 col-lg-8 mt-3 b-3">
              <h5>Customer Riview (3)</h5>
            </div>
          </div>
          <div class="col-12 col-lg-8">
            <ul class="list-unstyled">

              <li class="media" data-aos="fade-up" data-aos-delay="300">
                <img src="images/icon-riview.png" alt="profile" class="mr-3 rounded-circle">
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Hazza Rizky</h5>
                  I thought it was not good for living room. I really happy
                  to decided buy this product last week now feels like homey.
                </div>
              </li>

              <li class="media" data-aos="fade-up" data-aos-delay="400">
                <img src="images/icon-riview-2.png" alt="profile" class="mr-3 rounded-circle">
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Anna Sukkirata</h5>
                  Color is great with the minimalist concept. Even I thought it was
                  made by Cactus industry. I do really satisfied with this.
                </div>
              </li>

              <li class="media" data-aos="fade-up" data-aos-delay="500">
                <img src="images/icon-riview-3.png" alt="profile" class="mr-3 rounded-circle">
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Dakimu Wangi</h5>
                  When I saw at first, it was really awesome to have with.
                  Just let me know if there is another upcoming product like this.
                </div>
              </li>

            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@push('addon-script')
<script src="vendor/vue/vue.js"></script>
<script>
  var gallery = new Vue({
    el: "#gallery",
    mounted(){
      AOS.init();
    },
    data: {
      activePhoto: 1,
      photos: [
        {
          id: 1,
          url: "/images/details-1.png"
        },
        {
          id: 2,
          url: "/images/details-2.png"
        },
        {
          id: 3,
          url: "/images/details-3.png"
        },
        {
          id: 4,
          url: "/images/details-4.png"
        },
       
      ],
    },
    methods: {
      changeActive(id){
        this.activePhoto = id;
      },
    },
  })
</script>
@endpush