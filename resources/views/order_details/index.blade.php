@extends('order_details.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Order Detail Produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('order_details.create') }}"> Create New Order Detail Produk</a>
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
            <th>Id Order</th>
            <th>Id Produk</th>
            <th>QTY</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>File</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($order_details as $order_detail)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $order_detail->id_order }}</td>
                <td>{{ $order_detail->id_produk }}</td>
                <td>{{ $order_detail->qty }}</td>
                <td>{{ $order_detail->harga }}</td>
                <td>{{ $order_detail->deskripsi }}</td>
                <td><img src="/gambar/{{ $order_detail->file }}" width="100px" /></td>
                <td>
                    <form action="{{ route('order_details.destroy', $order_detail->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('order_details.show', $order_detail->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('order_details.edit', $order_detail->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $order_details->links() !!}
@endsection
