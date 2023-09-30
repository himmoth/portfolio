@extends('admin.layouts.app')
@section('title-header','Lists Experiences')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Experiences </h3> 
            <a href="{{route('experiences.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Year</th>
                  <th>Company</th>
                  <th>Technology</th>
                  <th >Position</th>
                  <th >Languages</th>
                  <th >Action</th>


                </tr>
              </thead>
              <tbody>
                @foreach ($experiences as $experience)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$experience->year}}</td>
                <td>{{$experience->company}}</td>
                <td>{{$experience->technology}}</td>
                <td>{{$experience->position}}</td>
                
                  @php
                      $languages = explode(',', $experience->language)
                   
                  @endphp
                  <td>
                  @foreach ($languages as $language)
                    <p> {{$language}}</p>
                  @endforeach
                </td>


                <td class="d-flex">
                    <a href="experiences/edit/{{$experience->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('experiences.delete',$experience->id)}}">
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