@extends('order_details.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Order Detail Produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('order_details.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your
            input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('order_details.update', $order_detail->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Order:</strong>
                    <input type="text" name="id_order" class="form-control" placeholder="Id Customer"
                        value="{{ $order_detail->id_order }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Produk:</strong>
                    <textarea class="form-control" style="height:150px" name="id_produk" placeholder="Id Produk"
                        value="{{ $order_detail->id_produk }}"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Qty:</strong>
                    <textarea class="form-control" style="height:150px" name="qty" placeholder="QTY"value="{{ $order_detail->qty }}"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Harga:</strong>
                <textarea class="form-control" style="height:150px" name="harga"
                    placeholder="Harga"value="{{ $order_detail->harga }}"></textarea>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:150px" name="deskripsi"
                        placeholder="Deskripsi "value="{{ $order_detail->deksripsi }}"></textarea>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>File</strong>
                    <input type="file" name="file" class="form-control" placeholder="file"
                        value="{{ $order_detail->file }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
