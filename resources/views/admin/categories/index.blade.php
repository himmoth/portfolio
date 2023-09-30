@extends('admin.layouts.app')
@section('title-header','Lists Skills')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Categories </h3> 
            <a href="{{route('categories.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
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
                @foreach ($categories as $category)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
            
                <td class="d-flex">
                    <a href="categories/edit/{{$category->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('categories.delete',$category->id)}}">
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