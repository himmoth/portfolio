@extends('admin.layouts.app')
@section('title-header','Lists Contactinfo')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">ContactInfo </h3> 
            <a href="{{route('contactinfos.create')}}" class=" btn btn-success btn-sm float-right">New Create</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Name</th>
                  <th>Icon</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($contactinfos as $contactinfo)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$contactinfo->name}}</td>
                <td>
                    <img src="{{asset('storage/'.$contactinfo->icon)}}" height="24" alt="">
                </td>
                <td class="d-flex">
                    <a href="contactinfos/edit/{{$contactinfo->id}}" class="btn btn-success btn-sm mr-2"> Edit</a>
                    <form method="post" action="{{route('contactinfos.delete',$contactinfo->id)}}">
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