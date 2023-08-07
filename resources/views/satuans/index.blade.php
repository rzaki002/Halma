@extends('auth.admin.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Satuan</h2>
            </div>
            <div class="pull-right">
                @can('satuan-create')
                <a class="btn btn-success" href="{{ route('satuans.create') }}"> Create New Satuan Produk</a>
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
        @foreach ($satuans as $satuan)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $satuan->nama }}</td>
                <td>{{ $satuan->keterangan }}</td>
                <td>
                    <form action="{{ route('satuans.destroy', $satuan->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('satuans.show', $satuan->id) }}"><i class="bi bi-eye-fill"></i></a>

                        <a class="btn btn-primary" href="{{ route('satuans.edit', $satuan->id) }}"><i class="bi bi-pencil-square"></i></a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
        </div>
    </div>
</div>
    {!! $satuans->links() !!}
@endsection
