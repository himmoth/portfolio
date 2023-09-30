@extends('admin.layouts.app')
@section('title-header','Users Edit Profile')

@section('content')
<a href="{{route('users.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="" id="name" placeholder="Enter name">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="{{old('email')}}"  name="email" id="email" placeholder="Enter mail">
                @error('email')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
              <div class="form-group">
                <label for="user">Image</label>
                <input type="file" class="form-control" value="{{old('user')}}"  name="user" id="user">
                @error('user')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
    </div>
</div>
@endsection