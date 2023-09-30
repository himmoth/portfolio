@extends('admin.layouts.app')
@section('title-header','Lists Subject')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Lists Languages</h3> 
            <a href="{{route('subjects.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Title</th>
                  <th>Skill</th>
                  <th>Percentage</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($subjects as $subject)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$subject->title}}</td>
                <td>{{$subject->skill->name}}</td>
                <td>{{$subject->percent}}%</td>
                <td class="d-flex">
                    <a href="subjects/edit/{{$subject->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('subjects.delete',$subject->id)}}">
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