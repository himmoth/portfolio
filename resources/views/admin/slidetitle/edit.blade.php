@extends('admin.layouts.app')
@section('title-header','Title Slide Edit')

@section('content')
<a href="{{route('slide.index')}}" class=" btn btn-success  mb-3">Back</a>
<div class="row">
    <div class="col-md-4">
        <form class="shadow" action="{{route('slide.update', $slidetitle->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$slidetitle->name}}"  name="name" id="name" placeholder="Enter name">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control"  value="{{$slidetitle->position}}"  name="position" id="position" placeholder="Position">
                @error('position')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
              {{-- <div class="form-group">
                <label for="cv">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file"  value="{{$slidetitle->cv}}" class="custom-file-input" name="cv" id="cv">
                    <label class="custom-file-label" for="cv">Choose file</label>
                  </div>
                </div>
              </div> --}}
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
    </div>
</div>
@endsection