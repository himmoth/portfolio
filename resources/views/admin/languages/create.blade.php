@extends('admin.layouts.app')
@section('title-header','Language Create')

@section('content')
<a href="{{route('languages.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('languages.store')}}" method="POST" >
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="language">Language</label>
                <input type="text" class="form-control" name="language" value="{{old('language')}}" id="language" placeholder="Language">
                @error('language')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="percent">Percet</label>
                <input type="number"class="form-control" name="percent" value="{{old('percent')}}" id="percent" placeholder="percent">
                @error('percent')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
    </div>
</div>
@endsection