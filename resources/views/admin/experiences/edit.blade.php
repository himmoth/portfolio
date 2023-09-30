@extends('admin.layouts.app')
@section('title-header','Experience Edit')

@section('content')
<a href="{{route('experiences.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('experiences.update',$experience->id)}}" method="POST" >
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" name="year" value="{{$experience->year}}" id="year" >
                @error('year')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" name="company"  value="{{$experience->company}}"id="company" >
                @error('company')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="technology">Technology</label>
                <input type="text" class="form-control" name="technology"  value="{{$experience->technology}}" id="technology" >
                @error('technology')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position"  value="{{$experience->position}}" id="position" >
                @error('position')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="language">Languages</label>
                <input type="text" class="form-control" name="language"  value="{{$experience->language}}" >
                @error('language')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
    </div>
</div>
@endsection