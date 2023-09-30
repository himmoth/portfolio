@extends('admin.layouts.app')
@section('title-header','Educations Edit')

@section('content')
<a href="{{route('educations.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('educations.update',$education->id)}}" method="POST" >
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" name="year" value="{{$education->year}}" id="year" placeholder="Enter year">
                @error('year')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="school">School</label>
                <input type="text" class="form-control" name="school" value="{{$education->school}}" id="school">
                @error('url')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="bachelor">Bachelor</label>
                <input type="text" class="form-control" name="bachelor" value="{{$education->bachelor}}" id="bachelor">
              </div>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
    </div>
</div>
@endsection