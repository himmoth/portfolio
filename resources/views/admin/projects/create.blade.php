@extends('admin.layouts.app')
@section('title-header','Subjects Create')

@section('content')
<a href="{{route('projects.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="type">Select project type</label>
                    <select name="category_id" class="form-control  @error('category_id') is-invalid @enderror" id="category_id">
                      <option disabled selected>--- Please select project type ---</option>
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option> 
                      @endforeach
                                   
                    </select>
                  </div>
              <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" name="title" value="{{old('title')}}" id="name" placeholder="Enter name">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" value="{{old('description')}}" rows="3"></textarea>
                @error('percent')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
              <div class="form-group">
                <label for="url">Url</label>
                <input type="text" class="form-control" value="{{old('url')}}"  name="url" id="url" placeholder="url">
                @error('url')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" value="{{old('image')}}"  name="image" id="image">
                @error('image')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
    </div>
</div>
@endsection