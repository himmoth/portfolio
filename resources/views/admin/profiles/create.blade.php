@extends('admin.layouts.app')
@section('title-header','Profile Create')

@section('content')
<a href="{{route('profiles.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('profiles.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name" placeholder="Enter name">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position" value="{{old('position')}}" id="position" placeholder="Position">
              @error('position')
              <p class="text-danger">{{$message}}</p>
              @enderror
              </div>
              <div class="form-group">
                <label for="profile">Profile</label>
                <input type="file" class="form-control" name="profile"  id="profile" >
                @error('profile')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
    </div>
</div>
@endsection