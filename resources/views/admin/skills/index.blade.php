@extends('admin.layouts.app')
@section('title-header','Lists Skill')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Lists Skill</h3> 
            <a href="{{route('skills.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($skills as $skill)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$skill->name}}</td>
                <td>{{$skill->slug}}</td>
                <td class="d-flex">
                    <a href="skills/edit/{{$skill->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('skills.delete',$skill->id)}}">
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