@extends('admin.layouts.app')
@section('title-header','Lists Language')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Languages </h3> 
            <a href="{{route('languages.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Languages</th>
                  <th>Percent</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($languages as $language)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$language->language}}</td>
                <td>{{$language->percent}}</td>
                <td class="d-flex">
                    <a href="languages/edit/{{$language->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('languages.delete',$language->id)}}">
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