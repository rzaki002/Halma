@extends('auth.layout')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
          @can('user-create')
          <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
          @endcan
            
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
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>

    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                <a class="btn btn-info" href="{{ 
route('users.show',$user->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ 
route('users.edit',$user->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

      
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}


@endsection