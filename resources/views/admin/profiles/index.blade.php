@extends('admin.layouts.app')
@section('title-header','Lists Profile')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Profile </h3> 
            <a href="{{route('profiles.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Profile</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($profiles as $profile)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$profile->name}}</td>
                <td>{{$profile->position}}</td>
                <td>
                    <img src="{{asset('storage/'.$profile->profile)}}" height="100" alt="">
                </td>
                <td class="d-flex">
                    <a href="profiles/edit/{{$profile->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('profiles.delete',$profile->id)}}">
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