@extends('admin.layouts.app')
@section('title-header','File Create')

@section('content')
<a href="{{route('files.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('files.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
            
              <div class="form-group">
                <label for="cv">Cv</label>
                <input type="file" class="form-control" value="{{old('cv')}}"  name="cv" id="cv">
                @error('cv')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
                        
              <div class="form-group">
                <label for="resume">Resume</label>
                <input type="file" class="form-control" value="{{old('resume')}}"  name="resume" id="resume">
                @error('resume')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
    </div>
</div>
@endsection