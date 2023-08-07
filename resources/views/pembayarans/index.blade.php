@extends('pembayarans.layout')
@section('content')
<div class="cart-section">
    <!-- Start Cart Table -->
    <div class="cart-table-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
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
                                        <th class="product_order">Id Order</th>
                                        <th class="product_jumbayar">Jumlah Bayar</th>
                                        <th class="product-transfer">Bukti Transfer</th>
                                        <th class="product_metodbayar">Metode Bayar</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <tbody>
                                    <!-- Start Cart Single Item-->
                                    <tr>
                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_order"><a href="product-details-default.html"><img src="assets/images/product/default/home-1/default-1.jpg" alt=""></a></td>
                                        <td class="product_jumbayar"><a href="product-details-default.html">Handbag
                                                fringilla</a></td>
                                        <td class="product-transfer">$65.00</td>
                                        <td class="product_metodbayar"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                    </tr> <!-- End Cart Single Item-->
                                </tbody>
                            </table>
                        </div>
                        <div class="submit">
                            <button class="btn btn-md btn-golden" type="submit">update cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Cart Table -->

    {{-- <!-- Start Coupon Start -->
    <div class="coupon_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code left aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h3>Coupon</h3>
                        <div class="coupon_inner">
                            <p>Enter your coupon code if you have one.</p>
                            <input class="mb-2" placeholder="Coupon code" type="text">
                            <button type="submit" class="btn btn-md btn-golden">Apply coupon</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code right aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <h3>Cart Totals</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Subtotal</p>
                                <p class="cart_amount">$215.00</p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>Shipping</p>
                                <p class="cart_amount"><span>Flat Rate:</span> $255.00</p>
                            </div>
                            <a href="#">Calculate shipping</a>

                            <div class="cart_subtotal">
                                <p>Total</p>
                                <p class="cart_amount">$215.00</p>
                            </div>
                            <div class="checkout_btn">
                                <a href="#" class="btn btn-md btn-golden">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Coupon Start --> --}}
</div>
@endsection