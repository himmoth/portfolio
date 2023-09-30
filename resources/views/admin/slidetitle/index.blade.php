@extends('admin.layouts.app')
@section('title-header','Lists Title Slide')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lists slide title</h3>
            <a href="{{route('slide.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th >CV</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($slidetitles as $slidetitle)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$slidetitle->name}}</td>
                <td>{{$slidetitle->position}}</td>
                <td>{{$slidetitle->cv}}</td>

                <td class="d-flex">
                    <a href="slidetitles/edit/{{$slidetitle->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('slide.delete',$slidetitle->id)}}">
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