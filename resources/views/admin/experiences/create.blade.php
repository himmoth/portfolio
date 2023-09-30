@extends('admin.layouts.app')
@section('title-header','Experience Create')

@section('content')
<a href="{{route('experiences.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('experiences.store')}}" method="POST" >
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" name="year" value="{{old('year')}}" id="year" placeholder="2020-2020">
                @error('year')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" name="company" value="{{old('company')}}" id="company" placeholder="Company">
                @error('company')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="technology">Technology</label>
                <input type="text" class="form-control" name="technology" value="{{old('technology')}}" id="technology" placeholder="Technology">
                @error('technology')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position" value="{{old('position')}}" id="position" placeholder="position">
                @error('position')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="language">Languages</label>
                <input type="text" class="form-control" name="language" value="{{old('language')}}" id="language" placeholder="Html, Css, Etc.">
                @error('language')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
    </div>
</div>
@endsection