@extends('admin.layouts.app')
@section('title-header','About Edit')

@section('content')
<a href="{{route('abouts.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('abouts.update',$about->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$about->name}}" id="name" placeholder="Enter name">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="description">Description</label>
              <textarea  name="description" id="description" class="form-control" cols="30" rows="3" > 
                {{$about->description}}
              </textarea>
              @error('description')
              <p class="text-danger">{{$message}}</p>
              @enderror
              </div>
              <div class="form-group">
                <label for="img">Img</label>
                <input type="file" class="form-control" name="img"  id="img" >
                <img src="{{asset('storage/'.$about->img)}}" height="100" alt="">
                
                @error('img')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="bgimg">Bg Img</label>
                <input type="file" class="form-control" name="bgimg"  id="bgimg"  >
                <img src="{{asset('storage/'.$about->bgimg)}}" height="100" alt="">
                @error('bgimg')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
    </div>
</div>
@endsection