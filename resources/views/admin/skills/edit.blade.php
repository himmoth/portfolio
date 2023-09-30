@extends('admin.layouts.app')
@section('title-header','Skills Edit')

@section('content')
<a href="{{route('skills.index')}}" class=" btn btn-success  mb-3">Back</a>

<div class="row">
    <div class="col-md-6">
        <form class="shadow" action="{{route('skills.update',$skill->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$skill->name}}" id="name" placeholder="Enter name">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" value="{{$skill->slug}}"  name="slug" id="slug" placeholder="slug">
                @error('slug')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
    </div>
</div>
@endsection