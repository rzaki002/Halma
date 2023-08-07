@extends('auth.admin.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Order Produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
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

    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="form-group">
                <strong>Customer</strong>
                <select name="id_customer" class="form-control dropdown">
                    <option value="">-- Select Customer --</option>
                    @foreach ($customers as $customer)
                        <option value="{{$customer->id}}">
                            {{$customer->nama}}
                        </option>                        
                    @endforeach
                </select>
             </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Catatan:</strong>
                    <textarea class="form-control" style="height:150px" name="catatan" placeholder="Catatan"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <textarea class="form-control" style="height:150px" name="status" placeholder="Status"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Pengambilan:</strong>
                    <select class="form-select" aria-label="Default select example" name="status_pengambilan"
                        placeholder="Status pengambilan">
                        <option selected>Pilih metode pengambilan</option>
                        <option value="1">Ambil Sendiri</option>
                        <option value="2">Kirim</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Kirim:</strong>
                    <textarea class="form-control" style="height:150px" name="alamat_kirim" placeholder="Alamat Kirim"></textarea>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ongkir</strong>
                    <textarea class="form-control" style="height:150px" name="ongkir" placeholder="Ongkir"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status bayar:</strong>
                    <textarea class="form-control" style="height:150px" name="status_bayar" placeholder="Status bayar"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
