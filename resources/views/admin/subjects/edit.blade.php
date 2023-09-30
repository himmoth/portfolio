@extends('admin.layouts.app')
@section('title-header','Languages Update')

@section('content')
<a href="{{route('subjects.index')}}" class=" btn btn-primary  mb-3">Back</a>
<div class="row">
   
    <div class="col-md-6">
     
        <form class="shadow" action="{{route('subjects.update', $subject->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="type">Select Skill</label>
                    <select name="skill_id" class="form-control  @error('skill_id') is-invalid @enderror" id="skill_id">
                        @foreach ($skills as $skill)
                        <option value="{{$skill->id}}" {{ $skill->id == $subject->skill_id  ? 'selected' : '' }}>
                            {{$skill->name}}
                        </option>  
                        @endforeach
                       
                    </select>
                   
                  </div>
              <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" name="title" value="{{$subject->title}}" id="name" placeholder="Enter name">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="percent">Percent</label>
                <input type="number" class="form-control" value="{{$subject->percent}}"  name="percent" id="percent" placeholder="precent">
                @error('percent')
                <p class="text-danger">{{$message}}</p>
            	@enderror
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
    </div>
</div>
@endsection