@extends('admin.layouts.app')
@section('title-header','Lists Project')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Projects </h3> 
            <a href="{{route('projects.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Url</th>
                  <th>Image</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($projects as $project)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->category->name}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->url}}</td>
                <td>
                  <img src="{{asset('storage/'.$project->image)}}" height="60" alt="">
                </td>


                {{-- <td>
                    <img src="{{asset('storage/'.$about->img)}}" height="100" alt="">
                </td>
                <td>
                    <img src="{{asset('storage/'.$about->bgimg)}}" height="100" alt="">
                </td> --}}

                <td class="d-flex">
                    <a href="projects/edit/{{$project->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('projects.delete',$project->id)}}">
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