@extends('produks.layout2')
@section('content')
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Produk</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderUser as $ou)
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="{{ asset('gambar/') . '/' . $ou->orderdetail->file }}" alt="" width="100px">
                    </td>
                    {{-- <td>{{ $ou->orderdetail->produk->nama }}</td> --}}
                    <td>{{ $ou->orderdetail->produk->nama }}</td>
                    <td>{{ $ou->orderdetail->harga }}</td>
                    <td>{{ $ou->orderdetail->qty }}</td>
                    @if ($ou->status_bayar == null)
                        <td>Belum Di Bayar</td>
                    @else
                        <td>{{ $ou->status_bayar }}</td>
                    @endif

                    <td>
                        <a href="{{ route('chekout', $ou->id) }}" class="btn btn-primary mb-3 mt-3">Checkout</a>
                        <a href="" class="btn btn-primary">batal</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
