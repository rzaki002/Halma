@extends('home.layout')
@section('content')
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">Produk</h3>
                                <p>Buy Now! &amp; gifts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div id="section_produk" class="product-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @foreach ($produks as $produk)
                            <div class="product-slider-default-2rows default-slider-nav-arrow">
                                <!-- Slider main container -->
                                <div
                                    class="swiper-container product-default-slider-4grid-2row swiper-container-initialized swiper-container-horizontal">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper" id="swiper-wrapper-1426532aebf102926" aria-live="polite"
                                        style="width: 1800px; transform: translate3d(0px, 0px, 0px);">
                                        <!-- Start Product Default Single Item -->
                                        <div class="product-default-single-item product-color--golden swiper-slide swiper-slide-active"
                                            role="group" aria-label="1 / 12"
                                            style="width: 270px; margin-right: 30px; mb-2">
                                            <div class="image-box">
                                                <a href="product-details-default.html" class="image-link">
                                                    <img src="/gambar/{{ $produk->gambar }}" width="600px" alt="Produk">
                                                </a>
                                                <div class="tag">
                                                    <span>sale</span>
                                                </div>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Add to Cart</a>
                                                    </div>
                                                    @if (Auth::check())
                                                        <div class="action-link-right">
                                                            <a onclick="getData({{ $produk->id }})" data-bs-toggle="modal"
                                                                data-bs-target="#modalQuickview"><i
                                                                    class="fa fa-cart-plus"></i></a>
                                                        </div>
                                                    @else
                                                        <div class="action-link-right">
                                                            <a href="{{ route('login') }}"><i
                                                                    class="fa fa-cart-plus"></i></a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left mb-2">
                                                    <h6 class="title"><a
                                                            href="product-details-default.html">{{ $produk->nama }}</a>
                                                    </h6>
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="content-right mb-2">
                                                    <span class="price">Rp
                                                        {{ number_format($produk->harga, 0, ',', '.') }}</span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Product Default Single Item -->
                                    </div>
                        @endforeach
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                        aria-label="Previous slide" aria-controls="swiper-wrapper-1426532aebf102926" aria-disabled="true">
                    </div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                        aria-controls="swiper-wrapper-1426532aebf102926" aria-disabled="false"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Modal Quick View -->
    <div class="modal fade" id="modalQuickview" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

                                <input type="text" class="form-control" id="productName" name="productName" readonly>
                                {{-- <p id="productDescription"></p> --}}

                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" id="productDescription" name="deskripsi"
                                    readonly>
                                <label for="exampleInputEmail1">Price

                                </label>
                                <input type="text" class="form-control" id="productPrice" name="price" readonly>
                                {{-- <span class="price" id="productPrice"></span> --}}
                            </div>
                        </div>
                        @if (Auth::check())
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email"
                                    value="{{ Auth::user()->name }}" name="name" readonly>
                                <input type="text" id="id_product" hidden class="form-control" name="id_product">

                                <input type="text" id="user_id" name="user_id" class="form-control"
                                    value="{{ Auth::user()->id }}" hidden>
                            @else
                        @endif
                        <label>Alamat</label>
                        <input type="text" id="alamat" class="form-control" name="alamat_kirim"
                            placeholder="Alamat">

                        <label>Catatan</label>
                        <input type="text" class="form-control" name="catatan" placeholder="Catatan">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quantity" placeholder="Quantity">
                        <label>No handphone</label>
                        <input type="text" class="form-control" name="nohp" placeholder="no handphone">
                        <label>pilihan metode pengambilan</label>
                        <input type="text" class="form-control" name="status_pengambilan"
                            placeholder="status pengambilan">

                        <label>Input File</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="inputGroupFile01">
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
    @if (request()->segment(1)=="cariproduk")
    <script>
        var targetSection = document.getElementById('section_produk');

        // Scroll to the target section
        targetSection.scrollIntoView({
            behavior: 'smooth'
        });
    </script>
    @endif

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
