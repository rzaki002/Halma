<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest()->paginate(5);
        return view('orders.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function checkout($id)
    // {
    //     $token = "";
    //             // Set your Merchant Server Key
    //     \Midtrans\Config::$serverKey = config('midtrans.server_key');
    //     // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    //     \Midtrans\Config::$isProduction = false;
    //     // Set sanitization on (default)
    //     \Midtrans\Config::$isSanitized = true;
    //     // Set 3DS transaction for credit card to true
    //     \Midtrans\Config::$is3ds = true;
    //     // $productbyid = Order_detail::where();
    //     $dc = Order::where('id_customer','=',Auth::user()->id)->where('id','=',$id)->get();

    //     foreach ($dc as $val) {
    //         $params = array(
    //         'transaction_details' => array(
    //             'order_id' =>$val->id,
    //             'gross_amount ' => $val->orderdetail->harga,
    //         ),
    //         'customer_details' => array(
    //             'nama' => $val->customer->nama,
    //             'email'=>$val->customer->email
    //             // 'last_name' => 'pratama',
    //             // 'email' => 'budi.pra@example.com',
    //             // 'phone' => '08111222333',
    //         ),
    //     );
    //     // dd(gettype($val->orderdetail->harga));
    //     $snapToken = \Midtrans\Snap::getSnapToken($params);
    //     $token = $snapToken;
    //     }

    //     dd($token);

    //     //
    // }

    public function checkout($id)
{
    $token = "";

    // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = config('midtrans.server_key');
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = false;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;

    $dc = Order::where('id_customer', '=', Auth::user()->id)->where('id', '=', $id)->first();

    if ($dc) {
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $dc->orderdetail->harga,
            ),
            'customer_details' => array(
                'nama' => $dc->customer->nama,
                'email' => $dc->customer->email
            ),
            // Add the finish_redirect_url to the params array
            'finish_redirect_url' => 'http://localhost', // Replace with your desired URL
        );

        // Get the Snap Token
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $token = $snapToken;
    }

    return view('auth.customer_page.checkout', compact('token'));
}




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('orders.create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_customer' => 'required',
            'status'     => 'required',
            'status_pengambilan'  => 'required',
            'alamat_kirim'=> 'required',
            'ongkir'=>'required',
            'status_bayar'=> 'required',
        ]);

        Order::create([
            'id_customer'=>$request->id_customer,
            'status'=>$request->status,
            'status_pengambilan'  => $request->status_pengambilan,
            'alamat_kirim'=> $request->alamat_kirim,
            'ongkir'=>$request->ongkir,
            'status_bayar'=> $request->status_bayar,
            'catatan'=>$request->catatan
        ]);
        return redirect()->route('orders.index')
                        ->with('success','Orders created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'id_customer'     => 'required',
            'catatan'      => 'required',
            'status'     => 'required',
            'status_pengambilan'  => 'required',
            'alamat_kirim'=> 'required',
            'ongkir'=>'required',
            'status_bayar'=> 'required',
        ]);

        $order->update($request->all());
        return redirect()->route('orders.index')
                        ->with('success','Order Produk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')
            ->with('success', 'Order Produk deleted susccesfully');
    }

    public function addToCart(Request $request){
        $input = $request->all();

        if ($gambar = $request->file('file')) {
            $detinationPath = 'gambar/';
            $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($detinationPath, $profileGambar);
            $input['file'] = "$profileGambar";
        } else {
            unset($input['file']);
        }
        $order = Order::create(
            [
                'id_customer' => Auth::user()->id,
                'catatan' => $input['catatan'],
                'ongkir' => '12000',
                'status' => 'proses',
                'status_pengambilan'=>$input['status_pengambilan'],
                'alamat_kirim'=> $input['alamat_kirim'],
            ]
        );


        Order_detail::create([
            'id_order' =>$order->id,
            'id_produk' => $input['id_product'],
            'qty' => $input['quantity'],
            'file'=>$input['file'],
            'harga'=> $input['price'],
            'deskripsi'=>$input['deskripsi']
        ]);
    }
    public function keranjang()
    {
        $orderUser = Order::where('id_customer',Auth::user()->id)->get();
        return view('produks.keranjang', compact('orderUser'));

    }
}
