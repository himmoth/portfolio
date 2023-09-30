@extends('admin.layouts.app')
@section('title-header','Lists Contact')

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
            <h3 class="card-title">Contacts </h3> 
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th >#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th >Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($contacts as $contact)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>

                <td class="d-flex">
                    <form method="post" action="{{route('contacts.delete',$contact->id)}}">
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