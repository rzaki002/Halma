@extends('produks.layout2')
@section('content')
<div class="cart-section">
    <!-- Start Cart Table -->
    <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <!-- Start Cart Table Head -->
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                        <th class="product_status">Status</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <tbody>
                                    <!-- Start Cart Single Item-->
                                    <tr>
                                        @foreach ($produkUser as $item)
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb"><a href="product-details-default.html"><img
                                                    src="{{asset('gambar').'/'.$item->gambar}}"
                                                    alt=""></a></td>
                                        <td class="product_name"><a href="product-details-default.html">{{$item->nama_produk}}</a></td>
                                        <td class="product-price">{{$item->harga}}</td>
                                        <td class="product_quantity"><label>{{$item->quantity}}</label> <input min="1"
                                                max="100" value="1" type="number"></td>
                                        <td class="product_total"></td>
                                        <td class="product_status"></td>
                                        @endforeach
                                    </tr> <!-- End Cart Single Item-->
                                    <!-- Start Cart Single Item-->
                                    {{-- <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb"><a href="product-details-default.html"><img
                                                    src="assets/images/product/default/home-1/default-2.jpg"
                                                    alt=""></a></td>
                                        <td class="product_name"><a href="product-details-default.html">Handbags
                                                justo</a></td>
                                        <td class="product-price">$90.00</td>
                                        <td class="product_quantity"><label>Quantity</label> <input min="1"
                                                max="100" value="1" type="number"></td>
                                        <td class="product_total">$180.00</td>
                                    </tr> <!-- End Cart Single Item-->
                                    <!-- Start Cart Single Item--> --}}
                                    <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb"><a href="product-details-default.html"><img
                                                    src="assets/images/product/default/home-1/default-3.jpg"
                                                    alt=""></a></td>
                                        <td class="product_name"><a href="product-details-default.html">Handbag
                                                elit</a></td>
                                        <td class="product-price">$80.00</td>
                                        <td class="product_quantity"><label>Quantity</label> <input min="1"
                                                max="100" value="1" type="number"></td>
                                        <td class="product_total">$160.00</td>
                                        
                                    </tr> <!-- End Cart Single Item-->
                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button class="btn btn-md btn-golden" type="submit">update Keranjang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Cart Table -->
    @endsection