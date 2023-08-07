@extends('auth.admin.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left pt-5">
                <h2>Produk</h2>
            </div>
            <div class="pull-right mb-2">
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

    <div class="card">
        <div class="table-responsive">
    <table  class="table table-striped" >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Id Satuan</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($produks as $produk)
        {{--  --}}
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->kategori?->id_kategori}}</td>
                <td>{{ $produk->harga }}</td>
                <td>{{ $produk->satuan?->id_satuan}}</td>
                <td class="m-5">{{ $produk->keterangan }}</td>
                <td><img src="/gambar/{{ $produk->gambar }}" width="100px" /></td>
                <td>
                    <form action="{{ route('produks.destroy', $produk->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('produks.show', $produk->id) }}"><i class="bi bi-eye-fill"></i></a></a>

                        <a class="btn btn-primary" href="{{ route('produks.edit', $produk->id) }}"><i class="bi bi-pencil-square"></i></a></a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
        </div>
    </div>
</div>
    {!! $produks->links() !!}
@endsection
