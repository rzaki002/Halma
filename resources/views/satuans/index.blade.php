@extends('satuans.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Satuan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('satuans.create') }}"> Create New Satuan Produk</a>
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
        @foreach ($satuans as $satuan)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $satuan->nama }}</td>
                <td>{{ $satuan->keterangan }}</td>
                <td>
                    <form action="{{ route('satuans.destroy', $satuan->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('satuans.show', $satuan->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('satuans.edit', $satuan->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $satuans->links() !!}
@endsection
