@extends('admin.layouts.app')
@section('content')
<div class="row ">
    {{-- <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>

          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>

          <p>Bounce Rate</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>44</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p>Unique Visitors</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col --> --}}
    <div class="col-md-6 col-12  ">
      <h5>Frontend Languages</h5>
      <ul>
        @foreach ($subjects as $subject)
        @if($subject->type == 'frontend')
        <li>{{$subject->title}}</li>
        @endif
        @endforeach
       
      </ul>
    </div>
    <div class="col-md-6 col-12 ">
      <h5>Backend Languages</h5>
      <ul>
        @foreach ($subjects as $subject)
        @if($subject->type == 'backend')
        <li>{{$subject->title}}</li>
        @endif
        @endforeach
       
      </ul>
    </div>
    <div class="col-lg-6 col-6 mt-3">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
       
          <h3 class="text-center">{{$projects->count()}}</h3>
      
          

          <p class="text-center">Total Projects</p>
        </div>
        <a href="{{route('projects.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
      
    <div class="col-lg-6 col-6 mt-3">
      <!-- small box -->
      <div class="small-box bg-dark">
        <div class="inner">
          <img src="{{asset('storage/'.auth()->user()->user)}}" class="rounded-circle d-block m-auto" height="50" width="50" alt="">

          <p class="text-center">Curent User: {{auth()->user()->name}}</p>
        </div>
        <a href="{{route('users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
@endsection