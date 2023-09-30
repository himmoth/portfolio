@extends('admin.layouts.app')
@section('title-header','Education Create')

@section('content')
<a href="{{route('educations.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('educations.store')}}" method="POST" >
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
                <label for="school">School</label>
                <input type="text" class="form-control" name="school" value="{{old('school')}}" id="school" placeholder="School">
                @error('school')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="bachelor">Bachelor</label>
                <input type="text" class="form-control" name="bachelor" value="{{old('bachelor')}}" id="bachelor" placeholder="School">
                @error('bachelor')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
    </div>
</div>
@endsection