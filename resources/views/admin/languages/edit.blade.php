@extends('admin.layouts.app')
@section('title-header','Education Edit')

@section('content')
<a href="{{route('languages.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('languages.update',$language->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="language">language</label>
                <input type="text" class="form-control" name="language" value="{{$language->language}}" id="language" >
                @error('language')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="percent">Percent</label>
                <input type="text" class="form-control" name="percent" value="{{$language->percent}}" id="percent" >
                @error('percent')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
    </div>
</div>
@endsection