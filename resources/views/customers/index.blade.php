@extends('customers.layout')

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

    <table class="table table-bordered">
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

                        <a class="btn btn-info" href="{{ route('customers.show', $customer->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $customers->links() !!}
@endsection
