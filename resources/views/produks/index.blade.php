@extends('produks.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Produk</h2>
            </div>
            <div class="pull-right">
                @can('produk-create')
                    <a class="btn btn-success" href="{{ route('produks.create') }}"> Create New Product</a>
                @endcan
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
            <th>Nama</th>
            <th>Id Kategori</th>
            <th>Harga</th>
            <th>Id Satuan</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($produks as $produk)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->id_kategori }}</td>
                <td>{{ $produk->harga }}</td>
                <td>{{ $produk->id_satuan }}</td>
                <td>{{ $produk->keterangan }}</td>
                <td><img src="/gambar/{{ $produk->gambar }}" width="100px" /></td>
                <td>
                    <form action="{{ route('produks.destroy', $produk->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('produks.show', $produk->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('produks.edit', $produk->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $produks->links() !!}
@endsection
