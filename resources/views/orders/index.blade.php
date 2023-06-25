@extends('orders.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Order Produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Create NewOrder Produk</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
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
        @foreach ($orders as $order)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $order->customer->nama }}</td>
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
    </table>

    {!! $orders->links() !!}
@endsection
