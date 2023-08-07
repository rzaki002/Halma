@extends('home.layout')
@section('content')
<div class="col-lg-9">
    <!-- Start Shop Product Sorting Section -->
    <div class="shop-sort-section">
        <div class="container">
            <div class="row">
                <!-- Start Sort Wrapper Box -->
                <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                    data-aos="fade-up" data-aos-delay="0">
                    <!-- Start Sort tab Button -->
                    <div class="sort-tablist d-flex align-items-center">
                        <ul class="tablist nav sort-tab-btn">
                            <li><a class="nav-link active" data-bs-toggle="tab" href="#layout-3-grid"><img
                                        src="{{asset('halma-fe/assets/images/icons/bkg_grid.png')}}" alt=""></a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                        src="{{asset('halma-fe/assets/images/icons/bkg_list.png')}}" alt=""></a></li>
                        </ul>

                        <!-- Start Page Amount -->
                        <div class="page-amount ml-2">
                            <span>Showing 1–9 of 21 results</span>
                        </div> <!-- End Page Amount -->
                    </div> <!-- End Sort tab Button -->

                    <!-- Start Sort Select Option -->
                    <div class="sort-select-list d-flex align-items-center">
                        <label class="mr-2">Sort By:</label>
                        <form action="#">
                            <fieldset>
                                <select name="speed" id="speed">
                                    <option>Sort by average rating</option>
                                    <option>Sort by popularity</option>
                                    <option selected="selected">Sort by newness</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                    <option>Product Name: Z</option>
                                </select>
                            </fieldset>
                        </form>
                    </div> <!-- End Sort Select Option -->



                </div> <!-- Start Sort Wrapper Box -->
            </div>
        </div>
    </div> <!-- End Section Content -->

    <!-- Start Tab Wrapper -->
    <div class="sort-product-tab-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content tab-animate-zoom">
                        <!-- Start Grid View Product -->
                        <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                            <div class="row">
                                {{-- foreacg --}}
                                @foreach ($produks as $produk)
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <!-- Start Product Default Single Item -->
                                    <div class="product-default-single-item product-color--golden" data-aos="fade-up"
                                        data-aos-delay="0">
                                        <div class="image-box">
                                            <a href="product-details-default.html" class="image-link">
                                                <img src="/gambar/{{$produk->gambar}}" width="600px" height="690px"
                                                    alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart">Add To Card</a>
                                                </div>
                                                @if (Auth::check())
                                                <div class="action-link-right">
                                                    <a onclick="getData({{ $produk->id }})" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                </div>
                                                @else
                                                <div class="action-link-right">
                                                    <a href="{{route('login')}}"><i
                                                            class="icon-magnifier"></i></a>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a
                                                        href="product-details-default.html">{{$produk->nama}}</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i>
                                                    </li>
                                                    <li class="fill"><i class="ion-android-star"></i>
                                                    </li>
                                                    <li class="fill"><i class="ion-android-star"></i>
                                                    </li>
                                                    <li class="fill"><i class="ion-android-star"></i>
                                                    </li>
                                                    <li class="fill"><i class="ion-android-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="content-right">
                                                <span class="price">Rp
                                                    {{number_format($produk->harga, 0, ',', '.')}}</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                </div>
                                @endforeach
                                {{-- endofrnya di sini --}}
                            </div> <!-- End Grid View Product -->
                            <!-- Start List View Product -->
                            <div class="tab-pane sort-layout-single" id="layout-list">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-list-single product-color--golden">
                                            <a href="product-details-default.html" class="product-list-img-link">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-2.jpg" alt="">
                                            </a>
                                            <div class="product-list-content">
                                                <h5 class="product-list-link"><a
                                                        href="product-details-default.html">KAOREET LOBORTIS
                                                        SAGIT</a></h5>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                                <span class="product-list-price"><del>$30.12</del>
                                                    $25.12</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                    eveniet inventore doloremque necessitatibus sed, ducimus
                                                    quisquam, ad asperiores</p>
                                                <div class="product-action-icon-link-list">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"
                                                        class="btn btn-lg btn-black-default-hover">Add to
                                                        cart</a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"
                                                        class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"
                                                        class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-heart"></i></a>
                                                    <a href="compare.html" class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                    </div>
                                    <div class="col-12">
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-list-single product-color--golden">
                                            <a href="product-details-default.html" class="product-list-img-link">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                            </a>
                                            <div class="product-list-content">
                                                <h5 class="product-list-link"><a
                                                        href="product-details-default.html">CONDIMENTUM
                                                        POSUERE</a></h5>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                                <span class="product-list-price">$95.00</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                    eveniet inventore doloremque necessitatibus sed, ducimus
                                                    quisquam, ad asperiores</p>
                                                <div class="product-action-icon-link-list">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"
                                                        class="btn btn-lg btn-black-default-hover">Add to
                                                        cart</a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"
                                                        class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"
                                                        class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-heart"></i></a>
                                                    <a href="compare.html" class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                    </div>
                                    <div class="col-12">
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-list-single product-color--golden">
                                            <a href="product-details-default.html" class="product-list-img-link">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                            </a>
                                            <div class="product-list-content">
                                                <h5 class="product-list-link"><a
                                                        href="product-details-default.html">ALIQUAM
                                                        LOBORTIS</a></h5>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                                <span class="product-list-price"> $25.12</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                    eveniet inventore doloremque necessitatibus sed, ducimus
                                                    quisquam, ad asperiores</p>
                                                <div class="product-action-icon-link-list">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"
                                                        class="btn btn-lg btn-black-default-hover">Add to
                                                        cart</a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"
                                                        class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"
                                                        class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-heart"></i></a>
                                                    <a href="compare.html" class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                    </div>
                                    <div class="col-12">
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-list-single product-color--golden">
                                            <a href="product-details-default.html" class="product-list-img-link">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-7.jpg" alt="">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-8.jpg" alt="">
                                            </a>
                                            <div class="product-list-content">
                                                <h5 class="product-list-link"><a
                                                        href="product-details-default.html">CONVALLIS QUAM
                                                        SIT</a></h5>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                                <span class="product-list-price">$75.00 - $85.00</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                    eveniet inventore doloremque necessitatibus sed, ducimus
                                                    quisquam, ad asperiores</p>
                                                <div class="product-action-icon-link-list">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"
                                                        class="btn btn-lg btn-black-default-hover">Add to
                                                        cart</a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"
                                                        class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"
                                                        class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-heart"></i></a>
                                                    <a href="compare.html" class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                    </div>
                                    <div class="col-12">
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-list-single product-color--golden">
                                            <a href="product-details-default.html" class="product-list-img-link">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-9.jpg" alt="">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-10.jpg" alt="">
                                            </a>
                                            <div class="product-list-content">
                                                <h5 class="product-list-link"><a
                                                        href="product-details-default.html">DONEC EU LIBERO
                                                        AC</a></h5>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                                <span class="product-list-price"><del>$25.12</del>
                                                    $20.00</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                    eveniet inventore doloremque necessitatibus sed, ducimus
                                                    quisquam, ad asperiores</p>
                                                <div class="product-action-icon-link-list">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"
                                                        class="btn btn-lg btn-black-default-hover">Add to
                                                        cart</a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"
                                                        class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"
                                                        class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-heart"></i></a>
                                                    <a href="compare.html" class="btn btn-lg btn-black-default-hover"><i
                                                            class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                    </div>
                                </div>
                            </div> <!-- End List View Product -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Tab Wrapper -->

        <!-- Start Pagination -->
        <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
            <ul>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="ion-ios-skipforward"></i></a></li>
            </ul>
        </div> <!-- End Pagination -->
    </div>
        <!-- Start Modal Quickview cart -->
        <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col text-right">
                                    <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-details-gallery-area mb-7">
                                        <!-- Start Large Image -->
                                        <div class="product-large-image modal-product-image-large swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="product-image-large-image swiper-slide img-responsive">
                                                    <img src="{{asset ('halma-fe/assets/images/product/default/home-1/default-1.jpg')}}" alt="">
                                                </div>
                                                <div class="product-image-large-image swiper-slide img-responsive">
                                                    <img src="{{asset ('halma-fe/assets/images/product/default/home-1/default-2.jpg')}}" alt="">
                                                </div>
                                                <div class="product-image-large-image swiper-slide img-responsive">
                                                    <img src="{{asset ('halma-fe/assets/images/product/default/home-1/default-3.jpg')}}" alt="">
                                                </div>
                                                <div class="product-image-large-image swiper-slide img-responsive">
                                                    <img src="{{asset ('halma-fe/assets/images/product/default/home-1/default-4.jpg')}}" alt="">
                                                </div>
                                                <div class="product-image-large-image swiper-slide img-responsive">
                                                    <img src="{{asset ('halma-fe/assets/images/product/default/home-1/default-5.jpg')}}" alt="">
                                                </div>
                                                <div class="product-image-large-image swiper-slide img-responsive">
                                                    <img src="{{asset ('halma-fe/assets/images/product/default/home-1/default-6.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Large Image -->
                                        <!-- Start Thumbnail Image -->
                                        <div class="product-image-thumb modal-product-image-thumb swiper-container pos-relative mt-5">
                                            <div class="swiper-wrapper">
                                                <div class="product-image-thumb-single swiper-slide">
                                                    <img class="img-fluid" src="{{asset ('halma-fe/assets/images/product/default/home-1/default-1.jpg')}}" alt="">
                                                </div>
                                                <div class="product-image-thumb-single swiper-slide">
                                                    <img class="img-fluid" src="{{asset ('halma-fe/assets/images/product/default/home-1/default-2.jpg')}}" alt="">
                                                </div>
                                                <div class="product-image-thumb-single swiper-slide">
                                                    <img class="img-fluid" src="{{asset ('halma-fe/assets/images/product/default/home-1/default-3.jpg')}}" alt="">
                                                </div>
                                                <div class="product-image-thumb-single swiper-slide">
                                                    <img class="img-fluid" src="{{asset ('halma-fe/assets/images/product/default/home-1/default-4.jpg')}}" alt="">
                                                </div>
                                                <div class="product-image-thumb-single swiper-slide">
                                                    <img class="img-fluid" src="{{asset ('halma-fe/assets/images/product/default/home-1/default-5.jpg')}}" alt="">
                                                </div>
                                                <div class="product-image-thumb-single swiper-slide">
                                                    <img class="img-fluid" src="{{asset ('halma-fe/assets/images/product/default/home-1/default-6.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <!-- Add Arrows -->
                                            <div class="gallery-thumb-arrow swiper-button-next"></div>
                                            <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                        </div>
                                        <!-- End Thumbnail Image -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-product-details-content-area">
                                        <!-- Start  Product Details Text Area-->
                                        <div class="product-details-text">
                                            <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                            <div class="price"><del>$70.00</del>$80.00</div>
                                        </div> <!-- End  Product Details Text Area-->
                                        <!-- Start Product Variable Area -->
                                        <div class="product-details-variable">
                                            <!-- Product Variable Single Item -->
                                            <div class="variable-single-item">
                                                <span>Color</span>
                                                <div class="product-variable-color">
                                                    <label for="modal-product-color-red">
                                                        <input name="modal-product-color" id="modal-product-color-red" class="color-select" type="radio" checked>
                                                        <span class="product-color-red"></span>
                                                    </label>
                                                    <label for="modal-product-color-tomato">
                                                        <input name="modal-product-color" id="modal-product-color-tomato" class="color-select" type="radio">
                                                        <span class="product-color-tomato"></span>
                                                    </label>
                                                    <label for="modal-product-color-green">
                                                        <input name="modal-product-color" id="modal-product-color-green" class="color-select" type="radio">
                                                        <span class="product-color-green"></span>
                                                    </label>
                                                    <label for="modal-product-color-light-green">
                                                        <input name="modal-product-color" id="modal-product-color-light-green" class="color-select" type="radio">
                                                        <span class="product-color-light-green"></span>
                                                    </label>
                                                    <label for="modal-product-color-blue">
                                                        <input name="modal-product-color" id="modal-product-color-blue" class="color-select" type="radio">
                                                        <span class="product-color-blue"></span>
                                                    </label>
                                                    <label for="modal-product-color-light-blue">
                                                        <input name="modal-product-color" id="modal-product-color-light-blue" class="color-select" type="radio">
                                                        <span class="product-color-light-blue"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Product Variable Single Item -->
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="variable-single-item ">
                                                    <span>Quantity</span>
                                                    <div class="product-variable-quantity">
                                                        <input min="1" max="100" value="1" type="number">
                                                    </div>
                                                </div>
    
                                                <div class="product-add-to-cart-btn">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                        Cart</a>
                                                </div>
                                            </div>
                                        </div> <!-- End Product Variable Area -->
                                        <div class="modal-product-about-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                                laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                                in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                                recusandae</p>
                                        </div>
                                        <!-- Start  Product Details Social Area-->
                                        <div class="modal-product-details-social">
                                            <span class="title">SHARE THIS PRODUCT</span>
                                            <ul>
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
    
                                        </div> <!-- End  Product Details Social Area-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Modal Quickview cart -->
    
    @endsection
    <script>
        function getData(productId) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Ganti URL sesuai dengan route Anda
            var url = '{{ route('showDataById', ':id') }}';
            url = url.replace(':id', productId);
            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    console.log(data);
                    // Menampilkan data ke dalam modal
                    $("#productImage").attr("src", "/gambar/" + data.data.gambar);
                    $("#id_product").val(data.data.id);
                    $("#productName").val(data.data.nama);
                    $("#productDescription").val(data.data.keterangan);
                    $("#productPrice").val(data.data.harga);
                    // Menampilkan modal
                    $('#modalQuickview').modal('show');
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>