@extends('auth.admin.app')

@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            {{-- <div class="pull-left mt-4">
                <h3 style="color: rgb(0, 0, 0)">Order Produk</h3>
            </div> --}}
            {{-- <div class="pull-right pt-5 pb-4">
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Create NewOrder Produk</a>
            </div> --}}

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <a class="btn btn-success" href="{{ route('orders.create') }}"> Create NewOrder Produk</a>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="header-title">
                            <h4 class="card-title">Majemen Order</h4>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive mt-4">
                            <table id="basic-table" class="table table-striped mb-0" role="grid">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Customer</th>
                                        <th>Catatan</th>
                                        <th>Status</th>
                                        <th>Status Pengambilan</th>
                                        <th>Alamat Kirim</th>
                                        <th>Ongkir</th>
                                        <th>Status Bayar</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $order->customer?->nama }}</td>
                                    <td>{{ $order->catatan }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->status_pengambilan }}</td>
                                    <td>{{ $order->alamat_kirim }}</td>
                                    <td>{{ $order->ongkir }}</td>
                                    <td>{{ $order->status_bayar }}</td>
                                    <td>
                                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                    
                                            <a class="btn btn-info" href="{{ route('orders.show', $order->id) }}">Show</a>
                    
                                            <a class="btn btn-primary" href="{{ route('orders.edit', $order->id) }}">Edit</a>
                    
                                            @csrf
                                            @method('DELETE')
                    
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $orders->links() !!}
@endsection
