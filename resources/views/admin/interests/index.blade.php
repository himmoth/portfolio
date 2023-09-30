@extends('admin.layouts.app')
@section('title-header','Lists Interest')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Interest </h3> 
            <a href="{{route('interests.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Interest</th>
                  <th>Icon</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($interests as $interest)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$interest->interest}}</td>
                <td>
                    <img src="{{asset('storage/'.$interest->icon)}}" height="24" alt="">
                </td>
                <td class="d-flex">
                    <a href="interests/edit/{{$interest->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('interests.delete',$interest->id)}}">
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