@extends('auth.admin.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb pt-5">
            <div class="pull-left">
                <h2>Kategori Produk</h2>
            </div>
            <div class="pull-right mb-2">
                @can('kategori_produk-create')
                <a class="btn btn-success" href="{{ route('kategori_produks.create') }}"> Create New Kategori Produk</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card">
        <div class="table-responsive">
    <table  class="table table-striped" >
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
</div>
    </div>


    {!! $kategori_produks->links() !!}

@endsection
