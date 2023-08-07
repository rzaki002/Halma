@extends('auth.admin.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('customers.create') }}"> Create New Customer</a>
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
            <th>No HP</th>
            <th>Email</th>
            <th>Password</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $customer->nama }}</td>
                <td>{{ $customer->no_hp }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->passwor }}</td>
                <td>
                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('customers.show', $customer->id) }}"><i class="bi bi-eye-fill"></i></a></a>

                        <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}"><i class="bi bi-pencil-square"></i></a>

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

    {!! $customers->links() !!}
@endsection
