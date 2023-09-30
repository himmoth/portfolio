@extends('admin.layouts.app')
@section('title-header','Lists User')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Lists User</h3> 
            <a href="{{route('users.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                  <img src="{{asset('storage/'.$user->user)}}" height="60" class="rounded-circle" alt="">
                </td>
                <td class="d-flex">
                    <a href="users/edit/profile/{{$user->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('users.delete',$user->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>

                </td>
                </tr>
                @endforeach
            
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.card -->
      </div>
</div>
@endsection