@extends('admin.layouts.app')
@section('title-header','Interests Edit')

@section('content')
<a href="{{route('interests.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('interests.update',$interest->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="name">Interest</label>
                <input type="text" class="form-control" name="interest" value="{{$interest->interest}}" id="interest" >
                @error('interest')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="icon">Icon</label>
                <input type="file" class="form-control" name="icon"  id="icon" >
                <img src="{{asset('storage/'.$interest->interest)}}" alt="">
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