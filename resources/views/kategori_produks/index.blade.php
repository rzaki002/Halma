@extends('kategori_produks.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kategori Produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kategori_produks.create') }}"> Create New Kategori Produk</a>
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
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kategori_produks as $kategori_produk)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $kategori_produk->nama }}</td>
                <td>{{ $kategori_produk->keterangan }}</td>
                <td>
                    <form action="{{ route('kategori_produks.destroy', $kategori_produk->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('kategori_produks.show', $kategori_produk->id) }}">Show</a>

                        <a class="btn btn-primary"
                            href="{{ route('kategori_produks.edit', $kategori_produk->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $kategori_produks->links() !!}
@endsection