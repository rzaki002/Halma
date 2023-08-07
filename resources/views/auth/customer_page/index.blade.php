@extends('auth.customer_page.layout')

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
                                            src="{{ asset('halma-fe/assets/images/icons/bkg_grid.png') }}"
                                            alt=""></a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                            src="{{ asset('halma-fe/assets/images/icons/bkg_list.png') }}"
                                            alt=""></a></li>
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
                                            <div class="product-default-single-item product-color--golden"
                                                data-aos="fade-up" data-aos-delay="0">
                                                <div class="image-box">
                                                    <a href="product-details-default.html" class="image-link">
                                                        <img src="/gambar/{{ $produk->gambar }}" width="600px"
                                                            height="690px" alt="">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalAddcart">Add To Card</a>
                                                        </div>
                                                        <div class="action-link-right">
                                                            <a onclick="getData({{ $produk->id }})" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="icon-magnifier"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a
                                                                href="product-details-default.html">{{ $produk->nama }}</a>
                                                        </h6>
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
                                                            {{ number_format($produk->harga, 0, ',', '.') }}</span>
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
                                                        src="assets/images/product/default/home-1/default-1.jpg"
                                                        alt="">
                                                    <img class="img-fluid"
                                                        src="assets/images/product/default/home-1/default-2.jpg"
                                                        alt="">
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
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart"
                                                            class="btn btn-lg btn-black-default-hover">Add to
                                                            cart</a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-heart"></i></a>
                                                        <a href="compare.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
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
                                                        src="assets/images/product/default/home-1/default-3.jpg"
                                                        alt="">
                                                    <img class="img-fluid"
                                                        src="assets/images/product/default/home-1/default-4.jpg"
                                                        alt="">
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
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart"
                                                            class="btn btn-lg btn-black-default-hover">Add to
                                                            cart</a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-heart"></i></a>
                                                        <a href="compare.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
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
                                                        src="assets/images/product/default/home-1/default-5.jpg"
                                                        alt="">
                                                    <img class="img-fluid"
                                                        src="assets/images/product/default/home-1/default-6.jpg"
                                                        alt="">
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
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart"
                                                            class="btn btn-lg btn-black-default-hover">Add to
                                                            cart</a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-heart"></i></a>
                                                        <a href="compare.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
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
                                                        src="assets/images/product/default/home-1/default-7.jpg"
                                                        alt="">
                                                    <img class="img-fluid"
                                                        src="assets/images/product/default/home-1/default-8.jpg"
                                                        alt="">
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
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart"
                                                            class="btn btn-lg btn-black-default-hover">Add to
                                                            cart</a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-heart"></i></a>
                                                        <a href="compare.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
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
                                                        src="assets/images/product/default/home-1/default-9.jpg"
                                                        alt="">
                                                    <img class="img-fluid"
                                                        src="assets/images/product/default/home-1/default-10.jpg"
                                                        alt="">
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
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart"
                                                            class="btn btn-lg btn-black-default-hover">Add to
                                                            cart</a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="wishlist.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                class="icon-heart"></i></a>
                                                        <a href="compare.html"
                                                            class="btn btn-lg btn-black-default-hover"><i
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

            <!-- Modal Quick View -->
            <div class="modal fade" id="modalQuickview" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Product Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <form action="{{ route('add.cart') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div id="productDetails">
                                    <!-- Di sini akan ditampilkan data dari server -->
                                    <div class="product-image">
                                        <img src="" alt="Product Image" id="productImage" width="100px">
                                    </div>
                                    <div class="product-info">
                                        {{-- <h5 class="mb-3" id="productName"></h5> --}}
                                        <label for="exampleInputEmail1">Product</label>

                                        <input type="text" class="form-control" id="productName" name="productName"
                                            readonly>
                                        {{-- <p id="productDescription"></p> --}}

                                        <label for="exampleInputEmail1">Description</label>
                                        <input type="text" class="form-control" id="productDescription"
                                            name="deskripsi" readonly>
                                        <label for="exampleInputEmail1">Price

                                        </label>
                                        <input type="text" class="form-control" id="productPrice" name="price"
                                            readonly>
                                        {{-- <span class="price" id="productPrice"></span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email"
                                        value="{{ Auth::user()->name }}" name="name" readonly>
                                    <input type="text" id="id_product" hidden class="form-control" name="id_product">

                                    <input type="text" id="user_id" name="user_id" class="form-control"
                                        value="{{ Auth::user()->id }}" hidden>

                                    <label>Alamat</label>
                                    <input type="text" id="alamat" class="form-control" name="alamat_kirim"
                                        placeholder="Alamat">

                                    <label>Catatan</label>
                                    <input type="text" class="form-control" name="catatan" placeholder="Catatan">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" name="quantity" placeholder="Quantity">
                                    <label>No handphone</label>
                                    <input type="text" class="form-control" name="nohp"
                                        placeholder="no handphone">
                                    <label>pilihan metode pengambilan</label>
                                    <input type="text" class="form-control" name="status_pengambilan"
                                        placeholder="status pengambilan">

                                    <label>Input File</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="file"
                                                id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


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


    </div>
               <!-- Modal Quick View -->
               <div class="modal fade" id="modalQuickview" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Product Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <form action="{{ route('add.cart') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div id="productDetails">
                                    <!-- Di sini akan ditampilkan data dari server -->
                                    <div class="product-image">
                                        <img src="" alt="Product Image" id="productImage" width="100px">
                                    </div>
                                    <div class="product-info">
                                        {{-- <h5 class="mb-3" id="productName"></h5> --}}
                                        <label for="exampleInputEmail1">Product</label>

                                        <input type="text" class="form-control" id="productName" name="productName"
                                            readonly>
                                        {{-- <p id="productDescription"></p> --}}

                                        <label for="exampleInputEmail1">Description</label>
                                        <input type="text" class="form-control" id="productDescription"
                                            name="deskripsi" readonly>
                                        <label for="exampleInputEmail1">Price

                                        </label>
                                        <input type="text" class="form-control" id="productPrice" name="price"
                                            readonly>
                                        {{-- <span class="price" id="productPrice"></span> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email"
                                        value="{{ Auth::user()->name }}" name="name" readonly>
                                    <input type="text" id="id_product" hidden class="form-control" name="id_product">

                                    <input type="text" id="user_id" name="user_id" class="form-control"
                                        value="{{ Auth::user()->id }}" hidden>

                                    <label>Alamat</label>
                                    <input type="text" id="alamat" class="form-control" name="alamat_kirim"
                                        placeholder="Alamat">

                                    <label>Catatan</label>
                                    <input type="text" class="form-control" name="catatan" placeholder="Catatan">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" name="quantity" placeholder="Quantity">
                                    <label>No handphone</label>
                                    <input type="text" class="form-control" name="nohp"
                                        placeholder="no handphone">
                                    <label>pilihan metode pengambilan</label>
                                    <input type="text" class="form-control" name="status_pengambilan"
                                        placeholder="status pengambilan">

                                    <label>Input File</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="file"
                                                id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
@endsection
