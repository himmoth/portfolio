@extends('admin.layouts.app')
@section('title-header','Interests Create')

@section('content')
<a href="{{route('interests.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('interests.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="interest">Interest</label>
                <input type="text" class="form-control" name="interest" value="{{old('interest')}}" id="interest" placeholder="Enter interest">
                @error('interest')
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