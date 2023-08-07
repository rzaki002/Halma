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