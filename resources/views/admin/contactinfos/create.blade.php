@extends('admin.layouts.app')
@section('title-header','Contactinfo Create')

@section('content')
<a href="{{route('profiles.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('contactinfos.store')}}" method="POST" enctype="multipart/form-data">
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
                <label for="url">Url</label>
                <input type="text" class="form-control" name="url" value="{{old('url')}}" id="url" placeholder="Enter url">
                @error('url')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="icon">Icon</label>
                <input type="file" class="form-control" name="icon"  id="icon" >
                @error('icon')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
    </div>
</div>
@endsection