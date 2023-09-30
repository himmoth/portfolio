@extends('admin.layouts.app')
@section('title-header','Lists Education')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Education </h3> 
            <a href="{{route('educations.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Year</th>
                  <th>School</th>
                  <th>Bachelor</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($educations as $education)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$education->year}}</td>
                <td>{{$education->school}}</td>
                <td>{{$education->bachelor}}</td>

                <td class="d-flex">
                    <a href="educations/edit/{{$education->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('educations.delete',$education->id)}}">
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