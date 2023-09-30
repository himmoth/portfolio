@extends('admin.layouts.app')
@section('title-header','Lists About')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">About </h3> 
            <a href="{{route('abouts.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Img</th>
                  <th>Bg Img</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($abouts as $about)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$about->name}}</td>
                <td>{{$about->description}}</td>
                <td>
                    <img src="{{asset('storage/'.$about->img)}}" height="100" alt="">
                </td>
                <td>
                    <img src="{{asset('storage/'.$about->bgimg)}}" height="100" alt="">
                </td>

                <td class="d-flex">
                    <a href="abouts/edit/{{$about->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('abouts.delete',$about->id)}}">
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