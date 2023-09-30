@extends('layouts.app')

@section('content')
    <div class=" top-resume">
        <div class="back "><a class="btn btn-primary btn-sm" href="/">Back</a></div>
        {{-- <div class="back"><a class="btn btn-success btn-sm" href="{{url('/export-pdf')}}">Export PDF</a></div> --}}
    </div>

    <div class="containers">

        <div class="left_side">
            <div class="arow-left"></div>

            <div class="resume dots">
                <div class="dot "></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <div class="profileText">
                @foreach ($profiles as $profile)
                    <div class="imgBx">
                        <img src="{{ asset('storage/' . $profile->profile) }}" alt="">
                    </div>
                    <h2>{{ $profile->name }} <br> <span>{{ $profile->position }}</span></h2>
                @endforeach
            </div>
            <div class="contactInfo">
                <h3 class="title">Contact Info</h3>
                <ul>
                    @foreach ($contactinfos as $contactinfo)
                        <li>
                            <span class="icon">
                                <img src="{{ asset('storage/' . $contactinfo->icon) }}" alt="">
                            </span>
                            <a href="{{ $contactinfo->url }}"> <span class="text">{{ $contactinfo->name }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="contactInfo education">
                <h3 class="title">Education</h3>
                <ul>
                    @foreach ($educations as $education)
                        <li>
                            <h5>{{ $education->year }}</h5>
                            <h4>{{ $education->bachelor }}</h4>
                            <h4>{{ $education->school }}</h4>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="contactInfo language">
                <h3 class="title">Languages</h3>
                <ul>
                    @foreach ($languages as $language)
                        <li>
                            <span class="text">{{ $language->language }}</span>
                            <span class="percent">
                                <div style="width: {{ $language->percent }}%;"></div>
                            </span>
                        </li>
                    @endforeach
            </div>
        </div>
        <div class="right_side">
            <div class="arow-right"></div>

            <div class="about">
                
            </div>
            {{-- <div class="about">
                <h2 class="title2">Profile</h2>
                <p>My name's Moth, I'm 26, have worked as a Junior Frontend Developer  for a smaller company, in Phnom Penh.</p>
            </div> --}}
            <div class="about">
                <h2 class="title2">Experience</h2>
                <div class="box">
                    @foreach ($experiences as $experience)
                        <div class="year_company">
                            <h5>{{ $experience->year }}</h5>
                            <h5>{{ $experience->company }}</h5>
                            <h5 class="technology-lg">{{ $experience->technology }}</h5>

                        </div>
                        <div class="text">
                            <h4>{{ $experience->position }}</h4>
                            <h5 class="technology-sm">{{ $experience->technology }}</h5>
                            {{-- @php
                                $languages = explode(',', $experience->language);
                                
                            @endphp

                            @foreach ($languages as $language)
                                <p> {{ $language }}</p>
                            @endforeach --}}

                            <p>{{$experience->language}}</p>
                        </div>
                    @endforeach
                </div>
                <div class="about skills">
                    <h2 class="title2">Skills</h2>
                    @foreach ($frontends as $frontend)
                    <div class="box">
                        <h4>{{$frontend->title}}</h4>
                        <div class="percent">
                            <div style="width: {{$frontend->percent}}%;"></div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($backends as $backend)
                    <div class="box">
                        <h4>{{$backend->title}}</h4>
                        <div class="percent">
                            <div style="width: {{$backend->percent}}%;"></div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($tools as $tool)
                    <div class="box">
                        <h4>{{$tool->title}}</h4>
                        <div class="percent">
                            <div style="width: {{$tool->percent}}%;"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="about interest">
                    <h2 class="title2">Interest</h2>
                    <ul>
                        @foreach ($interests as $interest)
                        <li>
                            <div style="img__interest"><img src="{{asset('storage/'.$interest->icon)}}" alt=""></div>
                            {{$interest->interest}}</li>  
                        @endforeach
                  
                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
