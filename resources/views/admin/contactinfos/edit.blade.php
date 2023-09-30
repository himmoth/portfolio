@extends('admin.layouts.app')
@section('title-header','Contactinfo Edit')

@section('content')
<a href="{{route('contactinfos.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('contactinfos.update',$contactinfo->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$contactinfo->name}}" id="name" placeholder="Enter name">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="url">Url</label>
                <input type="text" class="form-control" name="url" value="{{$contactinfo->url}}" id="url" placeholder="Enter url">
                @error('url')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="icon">Icon</label>
                <input type="file" class="form-control" name="icon"  id="icon" >
                <img src="{{asset('storage/'.$contactinfo->icon)}}" alt="">
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