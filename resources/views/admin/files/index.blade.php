@extends('admin.layouts.app')
@section('title-header','Lists Files')

@section('content')

<div class="row">
    
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="col-md-12">
        
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Files </h3> 
            <a href="{{route('files.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Cv</th>
                  <th>Resume</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($files as $file)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$file->cv}}</td>
                <td>{{$file->resume}}</td>
        
                <td class="d-flex">
                    <a href="files/edit/{{$file->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('files.delete',$file->id)}}">
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