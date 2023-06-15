@extends('kategori_produks.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Kategori Produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kategori_produks.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $kategori_produk->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                {{ $kategori_produk->keterangan }}
            </div>
        </div>
    </div>
@endsection
