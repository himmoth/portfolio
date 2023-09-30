@extends('admin.layouts.app')
@section('title-header','File Create')

@section('content')
<a href="{{route('files.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('files.update', $file->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
            
              <div class="form-group">
                <label for="cv">Cv</label>
                <input type="file" class="form-control" value="{{$file->cv}}"  name="cv" id="cv">
                <p>{{$file->cv}}</p>

                @error('cv')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
                        
              <div class="form-group">
                <label for="resume">Resume</label>
                <input type="file" class="form-control" value="{{$file->resume}}"  name="resume" id="resume">
                <p>{{$file->resume}}</p>
                @error('resume')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
    </div>
</div>
@endsection