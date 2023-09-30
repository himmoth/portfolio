@extends('admin.layouts.app')
@section('title-header','Profile Edit')

@section('content')
<a href="{{route('profiles.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('profiles.update', $profile->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
         <div class="card-body">
             <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$profile->name}}" id="name" placeholder="Enter name">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position" value="{{$profile->position}}"  id="position" placeholder="Position">
              @error('position')
              <p class="text-danger">{{$message}}</p>
              @enderror
              </div>
              <div class="form-group">
                <label for="profile">Profile</label>
                <input type="file" class="form-control" name="profile"  id="profile" >
                <img src="{{asset('storage/'.$profile->profile)}}" width="100" alt="">
                @error('profile')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
    </div>
</div>
@endsection